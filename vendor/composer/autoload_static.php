<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10a319c7b46d1ff89c4f1d90c47e7976
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Ut\\Unittest\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ut\\Unittest\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit10a319c7b46d1ff89c4f1d90c47e7976::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10a319c7b46d1ff89c4f1d90c47e7976::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit10a319c7b46d1ff89c4f1d90c47e7976::$classMap;

        }, null, ClassLoader::class);
    }
}
