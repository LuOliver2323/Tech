<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc985a170badca0516d4b8b10360ef49d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Php\\Biblioteca\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Php\\Biblioteca\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc985a170badca0516d4b8b10360ef49d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc985a170badca0516d4b8b10360ef49d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc985a170badca0516d4b8b10360ef49d::$classMap;

        }, null, ClassLoader::class);
    }
}