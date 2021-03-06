<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c3c71f37ff687355c86d9da2325f41d
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Design\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Design\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c3c71f37ff687355c86d9da2325f41d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c3c71f37ff687355c86d9da2325f41d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
