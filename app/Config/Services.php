<?php

namespace Config;

use App\Services\AuditService;
use App\Services\AuditServiceInterface;
use CodeIgniter\Config\BaseService;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This file holds any application-specific services, or service overrides
 * that you might need. An example has been included with the general
 * method format you should use for your service methods. For more examples,
 * see the core Services file at system/Config/Services.php.
 */
class Services extends BaseService
{
    public static function audit(bool $shared = true): AuditServiceInterface
    {
        if ($shared) {
            /** @var AuditServiceInterface $instance */
            $instance = static::getSharedInstance('audit');
            return $instance;
        }

        return new AuditService();
    }

    public static function csp(?\Config\ContentSecurityPolicy $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('csp', $config);
        }

        $config ??= config(\Config\ContentSecurityPolicy::class);

        return new \App\Libraries\Http\ContentSecurityPolicy($config);
    }
}
