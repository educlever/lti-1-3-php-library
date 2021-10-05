<?php

namespace Packback\Lti1p3\Interfaces;

interface ICookie
{
    public function getCookie($name);

    public function setCookie($name, $value, $exp = null, $options = []);
}
