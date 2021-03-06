<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite68d45521690819a6fc849a7aee30f98
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GethApi\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GethApi\\' => 
        array (
            0 => __DIR__ . '/..' . '/lajosbencz/geth-php/src/GethApi',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite68d45521690819a6fc849a7aee30f98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite68d45521690819a6fc849a7aee30f98::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite68d45521690819a6fc849a7aee30f98::$classMap;

        }, null, ClassLoader::class);
    }
}
