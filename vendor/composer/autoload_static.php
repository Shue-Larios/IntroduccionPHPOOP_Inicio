<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d6265188507aabf5ff78061aa54aa3d
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/clases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d6265188507aabf5ff78061aa54aa3d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d6265188507aabf5ff78061aa54aa3d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0d6265188507aabf5ff78061aa54aa3d::$classMap;

        }, null, ClassLoader::class);
    }
}
