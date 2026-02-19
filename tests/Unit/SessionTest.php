<?php

namespace OpenAuditTest\Unit;

use CodeIgniter\Test\CIUnitTestCase;

final class SessionTest extends CIUnitTestCase
{
    public function testSessionSimple(): void
    {
        $session = service('session');

        $session->set('logged_in', 123);
        $this->assertSame(123, $session->get('logged_in'));
    }
}
