<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7bb423094569a65cfd51a7de1e5dd59
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jusoor\\Verify\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jusoor\\Verify\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd7bb423094569a65cfd51a7de1e5dd59::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd7bb423094569a65cfd51a7de1e5dd59::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd7bb423094569a65cfd51a7de1e5dd59::$classMap;

        }, null, ClassLoader::class);
    }
}