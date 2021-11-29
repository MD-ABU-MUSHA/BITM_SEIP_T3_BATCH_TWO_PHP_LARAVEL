<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52fabd16e8005b132721f5a82d085165
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52fabd16e8005b132721f5a82d085165::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52fabd16e8005b132721f5a82d085165::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit52fabd16e8005b132721f5a82d085165::$classMap;

        }, null, ClassLoader::class);
    }
}