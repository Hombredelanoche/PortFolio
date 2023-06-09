<?php

namespace Portfolio\Infrastructure;

class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($class): bool {
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
            $file = str_replace('PortFolio', __DIR__ . '/..', $file);
            if (file_exists($file)) {
                require $file;
                return true;
            }
            return false;
        });
    }
}

Autoloader::register();
