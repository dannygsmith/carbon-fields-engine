<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99aeb0e32ba680082f4f859f9fb795c1
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit99aeb0e32ba680082f4f859f9fb795c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99aeb0e32ba680082f4f859f9fb795c1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
