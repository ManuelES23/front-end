<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6540e6f8868b798b5e335b338af1b362
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit6540e6f8868b798b5e335b338af1b362', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6540e6f8868b798b5e335b338af1b362', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6540e6f8868b798b5e335b338af1b362::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
