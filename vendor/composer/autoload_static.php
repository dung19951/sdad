<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65837f5a62c2175853bfc84b2005a2a1
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit65837f5a62c2175853bfc84b2005a2a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65837f5a62c2175853bfc84b2005a2a1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
