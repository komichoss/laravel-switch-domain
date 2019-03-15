<?php

use Komicho\Laravel\SwitchDomain;

function set_domain($domain)
{
    return (new SwitchDomain())->setDomain($domain);
}