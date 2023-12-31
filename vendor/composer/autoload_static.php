<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92a59d42ae751c0232506d7a0b2d6e03
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dalek\\Pdf\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dalek\\Pdf\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92a59d42ae751c0232506d7a0b2d6e03::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92a59d42ae751c0232506d7a0b2d6e03::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92a59d42ae751c0232506d7a0b2d6e03::$classMap;

        }, null, ClassLoader::class);
    }
}
