<?php

namespace Integration;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use OpenAuditTest\Support\Database\Seeds\ExampleSeeder;
use OpenAuditTest\Support\Models\ExampleModel;

final class ExampleDatabaseTest extends CIUnitTestCase
{
    use DatabaseTestTrait;

    /**
     * MigrationRunner uses this namespace when gathering migration files.
     * Files are expect under path <namespace>/Database/Migrations/
     *
     * @var string
     */
    protected $namespace = 'OpenAuditTest\Support';

    protected $seed = ExampleSeeder::class;

    public function testModelFindAll(): void
    {
        $model = new ExampleModel();

        // Get every row created by ExampleSeeder
        $objects = $model->findAll();

        // Make sure the count is as expected
        $this->assertCount(3, $objects);
    }

    public function testSoftDeleteLeavesRow(): void
    {
        $model = new ExampleModel();
        $this->setPrivateProperty($model, 'useSoftDeletes', true);
        $this->setPrivateProperty($model, 'tempUseSoftDeletes', true);

        /** @var stdClass $object */
        $object = $model->first();
        $model->delete($object->id);

        // The model should no longer find it
        $this->assertNull($model->find($object->id));

        // ... but it should still be in the database
        $result = $model->builder()->where('id', $object->id)->get()->getResult();

        $this->assertCount(1, $result);
    }
}
