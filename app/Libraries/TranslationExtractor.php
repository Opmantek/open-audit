<?php

declare(strict_types=1);

namespace App\Libraries;

use App\Controllers\BaseController;
use Config\Database;
use FilesystemIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use stdClass;

final class TranslationExtractor
{
    private array $directories = [];
    private array $exclusions = [];
    private array $translations = [];

    public function __construct()
    {
        helper('utility');
    }

    public function getDirectories(): array
    {
        return $this->directories;
    }

    public function addDirectory(string $directory): self
    {
        $this->directories[] = $directory;

        return $this;
    }

    public function setDirectories(array $directories): self
    {
        $this->directories = [];

        foreach ($directories as $directory) {
            $this->addDirectory($directory);
        }

        return $this;
    }

    public function getTranslations(): array
    {
        return $this->translations;
    }

    public function getExclusions(): array
    {
        return $this->exclusions;
    }

    public function addExclusion(callable $exclusion): self
    {
        $this->exclusions[] = $exclusion;

        return $this;
    }

    public function setExclusions(array $exclusions): self
    {
        $this->exclusions = [];

        foreach ($exclusions as $exclusion) {
            $this->addExclusion($exclusion);
        }

        return $this;
    }

    public function extract(?string $outputFile = null): bool
    {
        $this->translations = [];

        $this->extractStrings();
        $this->extractCountries();
        $this->extractTableInformation();
        $this->extractModelDictionaries();

        asort($this->translations);

        if ($outputFile !== null) {
            return $this->writeToFile($outputFile);
        }

        return true;
    }

    private function extractStrings(): void
    {
        foreach ($this->directories as $directory) {
            $this->scanDirectory($directory);
        }
    }

    private function extractCountries(): void
    {
        foreach (codeToCountry() as $country) {
            $this->addTranslation($country);
        }
    }

    private function extractTableInformation(): void
    {
        $db = Database::connect();
        $tables = $db->listTables();
        $databaseName = $db->getDatabase();

        foreach ($tables as $table) {
            $this->addTranslation($table);

            foreach ($db->getFieldNames($table) as $field) {
                $this->addTranslation($field);
                $this->addTranslation($this->tableFieldName($field));
            }
        }

        foreach ($tables as $table) {
            foreach ($db->getFieldData($table) as &$column) {
                if ($column->type === 'enum') {
                    $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `values` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '$databaseName' AND TABLE_NAME = '$table' AND COLUMN_NAME = '{$column->name}'";
                    $query = $db->query($sql);
                    $result = $query->getResult();
                    $valuesJson = $result[0]->values ?? '';

                    if (! empty($valuesJson) && is_string($valuesJson)) {
                        $values = @json_decode($valuesJson);
                        if (is_array($values)) {
                            foreach ($values as $enumValue) {
                                $this->addTranslation($enumValue);
                            }
                        }
                    }
                }
            }
        }
    }

    private function extractModelDictionaries(): void
    {
        $newDictionary = function() {
            $dictionary = new stdClass();
            $dictionary->id = 'The identifier column (integer) in the database (read only).';
            $dictionary->name = 'The name given to this item. Ideally it should be unique.';
            $dictionary->org_id = 'The Organisation that owns this item. Links to <code>orgs.id</code>.';
            $dictionary->description = 'Your description of this item.';
            $dictionary->options = 'A JSON object containing collection specific options.';
            $dictionary->edited_by = 'The name of the user who last changed or added this item (read only).';
            $dictionary->edited_date = 'The date this item was changed or added (read only). NOTE - This is the timestamp from the server.';
            $dictionary->device_id = 'The id of the linked device. Links to <code>devices.id</code>';
            $dictionary->link = 'For more detailed information, check the Open-AudIT Knowledge Base.';
            return $dictionary;
        };

        $excluded = [
            'Model.php',
            'BaseModel.php',
            'LogonModel.php',
            'NewsModel.php',
            'SearchModel.php',
        ];

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator(__DIR__ . '/../Models', FilesystemIterator::SKIP_DOTS)
        );

        foreach ($iterator as $file) {
            if (! $file->isFile() || strtolower($file->getExtension()) !== 'php') {
                continue;
            }

            if (in_array($file->getBasename(), $excluded, true)) {
                continue;
            }

            $modelName = str_replace('.php', '', $file->getBasename());
            $controllerName = str_replace('Model', '', $modelName);
            $controllerClass = 'App\\Controllers\\' . $controllerName;

            if (! class_exists($controllerClass)) {
                continue;
            }

            $controller = new $controllerClass();

            if (! $controller instanceof BaseController) {
                continue;
            }

            // Required due to models reliance on a controller instance
            register_ci_instance($controller);
            $instance = & get_instance();
            $instance->dictionary = $newDictionary();

            $model = model('App\\Models\\' . $modelName);

            if (! method_exists($model, 'dictionary')) {
                continue;
            }

            $dictionary = $model->dictionary();

            foreach ($dictionary->columns as $column) {
                if (is_string($column)) {
                    $this->addTranslation($column);
                } else if (is_iterable($column)) {
                    foreach ($column as $value) {
                        if (is_string($value)) {
                            $this->addTranslation($value);
                        }
                    }
                }
            }

            if (! empty($dictionary->about)) {
                $this->addTranslation($dictionary->about);
            }

            if (! empty($dictionary->notes)) {
                $this->addTranslation($dictionary->notes);
            }
        }
    }

    private function scanDirectory(string $directory): void
    {
        if (! is_dir($directory)) {
            return;
        }

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($directory, FilesystemIterator::SKIP_DOTS)
        );

        foreach ($iterator as $file) {
            if (! $file->isFile() || strtolower($file->getExtension()) !== 'php') {
                continue;
            }

            if (str_contains($file->getPathname(), 'TranslationExtractor.php')) {
                continue;
            }

            $allowed = true;

            foreach ($this->exclusions as $exclusion) {
                $allowed = $exclusion($file->getPathname());
                if ($allowed === false) {
                    break;
                }
            }

            if ($allowed === false) {
                continue;
            }

            $this->extractFromFile($file->getPathname());
        }
    }

    private function extractFromFile(string $filePath): void
    {
        $content = file_get_contents($filePath);

        if ($content === false) {
            return;
        }

        // Pattern matching: __('...') and __("...") including multiline strings
        $pattern = '/(?<![\w"\'#\/])__\(\s*(?P<quote>[\'"])(.*?)\k<quote>\s*\)/s';

        if (preg_match_all($pattern, $content, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $this->addTranslation($match[2]);
            }
        }
    }

    private function addTranslation(string $text): void
    {
        $hash = hash('sha256', $text);
        $this->translations[$hash] = $text;
    }

    private function writeToFile(string $outputFile): bool
    {
        $json = json_encode($this->translations);
        $array = json_decode($json, true);
        $content = "<?php\n\nreturn " . var_export($array, true) . ";\n";

        return file_put_contents($outputFile, $content) !== false;
    }

    private function tableFieldName(string $name): string {
        $name = $name === 'db_action' ? 'Database Action' : $name;
        $name = $name === 'db_column' ? 'Database Column' : $name;
        $name = $name === 'db_row' ? 'Database Row' : $name;
        $name = $name === 'db_table' ? 'Database Table' : $name;

        $name = str_replace('.', ' ', $name);
        $name = str_replace('_', ' ', $name);
        $name = ucwords($name);

        $name = $name === 'Ip' ? 'IP' : $name;
        $name = $name === 'Id' ? 'ID' : $name;
        $name = $name === 'Uuid' ? 'UUID' : $name;
        $name = $name === 'Cli Config' ? 'CLI Config' : $name;
        //$name = ($name === 'Device Id') ? 'Device ID' : $name;

        $name = str_replace(' Id ', ' ID ', $name);
        $name = str_replace(' Ip', ' IP', $name);
        $name = str_replace("'", "\\'", $name);
        $pos = strrpos($name, ' Id');

        if ($pos and $pos === strlen($name) - 3) {
            $name = substr_replace($name, ' ID', $pos);
        }

        return $name;
    }
}
