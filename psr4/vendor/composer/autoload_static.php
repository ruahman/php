<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51d2314ae4e4efa10679a7586023c884
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Acme',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit51d2314ae4e4efa10679a7586023c884::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit51d2314ae4e4efa10679a7586023c884::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit51d2314ae4e4efa10679a7586023c884::$classMap;

        }, null, ClassLoader::class);
    }
}
