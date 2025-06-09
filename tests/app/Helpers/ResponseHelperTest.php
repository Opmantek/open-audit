<?php

namespace Tests\Helpers;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\Mock\MockDatabaseConnection;

/**
 * @coversNothing
 */
class ResponseHelperTest extends CIUnitTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // Load the helper
        helper('response');
    }

    public function testValidSingleField()
    {
        $result = response_get_sort('users', 'name');
        $this->assertEquals('users.name', $result);
    }

    public function testDescendingField()
    {
        $result = response_get_sort('users', '-email');
        $this->assertEquals('users.email DESC', $result);
    }

    public function testMultipleFields()
    {
        $result = response_get_sort('users', 'name,-email');
        $this->assertEquals('users.name, users.email DESC', $result);
    }

    public function testDotNotation()
    {
        $result = response_get_sort('ignored', 'devices.last_seen');
        $this->assertEquals('devices.last_seen', $result);
    }

    public function testInvalidField()
    {
        $result = response_get_sort('users', 'invalid');
        $this->assertEquals('', $result);
    }

    public function testMixedValidAndInvalid()
    {
        $result = response_get_sort('users', 'name,invalid,-email');
        $this->assertEquals('users.name, users.email DESC', $result);
    }

    public function testEmptyInput()
    {
        $result = response_get_sort('users', '');
        $this->assertEquals('', $result);
    }
}
