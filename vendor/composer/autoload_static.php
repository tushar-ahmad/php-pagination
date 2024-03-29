<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e13b4eb51e46eb0df8b22f524bc00e0
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e13b4eb51e46eb0df8b22f524bc00e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e13b4eb51e46eb0df8b22f524bc00e0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e13b4eb51e46eb0df8b22f524bc00e0::$classMap;

        }, null, ClassLoader::class);
    }
}
