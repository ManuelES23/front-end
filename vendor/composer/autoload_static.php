<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6540e6f8868b798b5e335b338af1b362
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
            'Manuel\\Vistas\\' => 14,
            'MVC\\' => 4,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Manuel\\Vistas\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6540e6f8868b798b5e335b338af1b362::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6540e6f8868b798b5e335b338af1b362::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6540e6f8868b798b5e335b338af1b362::$classMap;

        }, null, ClassLoader::class);
    }
}