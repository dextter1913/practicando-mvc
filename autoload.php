<?php
function app_autoload($class)
{
    require_once 'controller/' . $class . '.php';
}
spl_autoload_register('app_autoload');
