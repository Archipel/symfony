<?php

spl_autoload_register(function($class) {
    if(strpos($class, 'Symfony\\') === 0) {
        $path = __DIR__ . '/src/' . str_replace('\\', '/', $class).'.php';
        require_once $path;
    }
});
