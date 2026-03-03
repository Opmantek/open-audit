<?php

declare(strict_types=1);

namespace App\Libraries;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Pool;
use GuzzleHttp\Psr7\Request;

final class TranslationGenerator
{
    public function generate(): bool
    {
        $client = new Client([
            'base_uri' => 'http://localhost:5000',
            'timeout'  => 10,
        ]);

        try {
            $response = $client->request('HEAD', '/health');
            if ($response->getStatusCode() !== 200) {
                log_message('error', 'Translation API is not accessible (non-200 response). Aborting.');
                return false;
            }
        } catch (ConnectException | RequestException $error) {
            log_message('error', 'Translation API is not accessible: ' . $error->getMessage());
            return false;
        }

        $concurrency = 50;

        foreach ($this->getSupportedLanguages() as $code => $language) {
            $hashes = [];
            $requests = [];
            $translations = [];

            foreach ($this->getTranslations() as $hash => $text) {
                if ($text === '') {
                    continue;
                }

                $data = [
                    'q' => $text,
                    'source' => 'en',
                    'target' => $code,
                    'format' => 'html',
                ];

                $hashes[] = $hash;

                $requests[] = new Request('POST', '/translate', [
                    'Content-Type' => 'application/json',
                ], json_encode($data));
            }

            $startTime = microtime(true);

            $pool = new Pool($client, $requests, [
                'concurrency' => $concurrency,
                'fulfilled' => function ($response, $index) use (&$translations, $hashes) {
                    $body = $response->getBody()->getContents();
                    $data = json_decode($body, true);
                    if (! empty($data['translatedText'])) {
                        $hash = $hashes[$index];
                        $translations[$hash] = $data['translatedText'];
                    }
                },
                'rejected' => function ($reason, $index) {
                    log_message('info', "Translation {$index} failed: " . $reason->getMessage() . "\n");
                },
            ]);

            $promise = $pool->promise();
            $promise->wait();

            $duration = microtime(true) - $startTime;
            $successfulCount = count($translations);
            log_message('info', "Language: {$code} - Translations: {$successfulCount} - Duration: {$duration} seconds\n");

            $this->outputTranslationFiles($translations, $code);

            // Exit after first whilst testing
            break;
        }

        return true;
    }

    public function getTranslations(): array
    {
        return [
            'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855' => '',
            '0a9dae3aa671abc04d9833b7cf4ed8367d37eaef6defa3431350c7bcb43e5df8' => ' Default, currently ',
            '38610d7ce62ce4e1bc7ae88df3a7717f4e2c5053263641eaddb6e7e407a33a38' => ' If something does not work as expected, your first thing to do is check the logs.',
            'f3dd0fbdf763baae393b04c640c676c061f48b963e783d0b19099e2b78009211' => ' is now supported with a language file. To change your user to use this language, click ',
            '3489b52478843c24a40382ba9ac4cf2531de5975d22dcd583b0b569e26924d5e' => ' seconds',
            'c10987bd7cf853f6ea92ddac1b6c95fa830e3aee160cc5d4ba2fea3743be1aa2' => '!=',
        ];
    }

    public function getSupportedLanguages(): array
    {
        return [
            'ar' => 'Arabic',
            'az' => 'Azerbaijani',
            'bg' => 'Bulgarian',
            'cs' => 'Czech',
            'da' => 'Danish',
            //'dq' => 'Define Quadword',
            'de' => 'German',
            'el' => 'Greek',
            'eo' => 'Esperanto',
            'es' => 'Spanish',
            'et' => 'Estonian',
            'fi' => 'Finnish',
            'fr' => 'French',
            'ga' => 'Irish',
            'hi' => 'Hindi',
            'hu' => 'Hungarian',
            'id' => 'Indonesian',
            'it' => 'Italian',
            'ja' => 'Japanese',
            'ko' => 'Korean',
            'lt' => 'Lithuanian',
            'lv' => 'Latvian',
            'nl' => 'Dutch',
            'pb' => 'Punjabi',
            'pl' => 'Polish',
            'ru' => 'Russian',
            'sq' => 'Albanian',
            'tr' => 'Turkish',
            'uk' => 'Ukrainian',
            'zh' => 'Chinese'
        ];
    }

    private function outputTranslationFiles(array $translations, string $code): bool
    {
        $outputPhpFile = WRITEPATH . $code . '.php';
        $outputJsonFile = WRITEPATH . $code . '.json';

        $json = json_encode($translations, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        $array = json_decode($json, true);
        $content = "<?php\n\nreturn " . var_export($array, true) . ";\n";

        return file_put_contents($outputJsonFile, $json) !== false &&
            file_put_contents($outputPhpFile, $content) !== false;
    }
}
