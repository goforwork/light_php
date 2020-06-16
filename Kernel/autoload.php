<?php

define('ROOT_PATH', __DIR__ .  '/../');

function autoload1($classnameWithNamespace)
{
    require_once ROOT_PATH .  str_replace("\\", '/', $classnameWithNamespace) . '.php';
}

spl_autoload_register('autoload1');