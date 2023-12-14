<?php
class Autoloader
{
    static function autoload($class):void
    {
        require 'Model/' . $class . '.php';
    }

    static function register():void
    {
        spl_autoload_register('Autoloader::autoload');
    }
}