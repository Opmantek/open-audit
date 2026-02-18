<?php

namespace OpenAuditTest\Unit;

use CodeIgniter\Test\CIUnitTestCase;
use Config\App;

final class HealthTest extends CIUnitTestCase
{
    public function testIsDefinedAppPath(): void
    {
        $this->assertTrue(defined('APPPATH'));
    }

    public function testBaseUrlHasBeenSet(): void
    {
        $config = new App();
        $validation = service('validation');

        $this->assertTrue(
            $validation->check($config->baseURL, 'valid_url'),
            'baseURL "' . $config->baseURL . '" in app/Config/App.php is not valid URL',
        );

        // App config does unorthodox things... CLI forcefully defaults to below
        $this->assertSame('http://localhost/', $config->baseURL);
    }
}
