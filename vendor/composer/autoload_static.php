<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1e89cf884eb4b195fc4bee13a1142ad
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'max\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'max\\' => 
        array (
            0 => __DIR__ . '/..' . '/max',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1e89cf884eb4b195fc4bee13a1142ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1e89cf884eb4b195fc4bee13a1142ad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1e89cf884eb4b195fc4bee13a1142ad::$classMap;

        }, null, ClassLoader::class);
    }
}
