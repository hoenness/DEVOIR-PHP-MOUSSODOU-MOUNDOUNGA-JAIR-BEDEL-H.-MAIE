<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit07bd1bc7ad54cb7b55c7d1117247e46e
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

        spl_autoload_register(array('ComposerAutoloaderInit07bd1bc7ad54cb7b55c7d1117247e46e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit07bd1bc7ad54cb7b55c7d1117247e46e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit07bd1bc7ad54cb7b55c7d1117247e46e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}