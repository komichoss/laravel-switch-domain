<?php

namespace Komicho\Laravel;

class SwitchDomain
{
    public function __construct()
    {
        // 
    }

    function setDomain($domain)
    {
        if (env('KOMICHO_SWITCH_DOMAIN_TO', false) == $domain) {
            return '';
        }
        return $domain;
    }
}