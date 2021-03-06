<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ff5be380cd05061382b3b439e70c507
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ff5be380cd05061382b3b439e70c507::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ff5be380cd05061382b3b439e70c507::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ff5be380cd05061382b3b439e70c507::$classMap;

        }, null, ClassLoader::class);
    }
}
