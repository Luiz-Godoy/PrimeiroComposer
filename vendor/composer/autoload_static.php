<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80ffd6698c4a2a5b2ba5cbabd8c174b8
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'L' => 
        array (
            'Luizgodoy\\PwaComposer\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Luizgodoy\\PwaComposer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit80ffd6698c4a2a5b2ba5cbabd8c174b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80ffd6698c4a2a5b2ba5cbabd8c174b8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit80ffd6698c4a2a5b2ba5cbabd8c174b8::$classMap;

        }, null, ClassLoader::class);
    }
}