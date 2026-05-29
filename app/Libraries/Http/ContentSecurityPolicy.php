<?php

declare(strict_types=1);

namespace App\Libraries\Http;

use CodeIgniter\HTTP\ContentSecurityPolicy as BaseContentSecurityPolicy;
use Config\ContentSecurityPolicy as ContentSecurityPolicyConfig;

class ContentSecurityPolicy extends BaseContentSecurityPolicy
{
    /**
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Headers/Content-Security-Policy/style-src-attr
     */
    protected array|string $styleSrcAttr = [];

    public function __construct(ContentSecurityPolicyConfig $config)
    {
        $this->directives['style-src-attr'] = 'styleSrcAttr';

        if (isset($config->styleSrcAttr)) {
            $this->styleSrcAttr = $config->styleSrcAttr;
        } else {
            $this->styleSrcAttr = "'unsafe-inline'";
        }

        parent::__construct($config);
    }
}