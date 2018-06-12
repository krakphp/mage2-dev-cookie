<?php

namespace Krak\DevCookie\Plugin\Framework;

use Magento\Framework\View\Element\Js\Cookie;

final class AllowLocalhostCookiePlugin
{
    public function afterGetDomain(Cookie $subject, $domain) {
        return $domain == '.localhost' ? 'localhost' : $domain;
    }
}

