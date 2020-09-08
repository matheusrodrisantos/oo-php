<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13fbdc5162c8dde79aadcea451debb02
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Omini\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Omini\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13fbdc5162c8dde79aadcea451debb02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13fbdc5162c8dde79aadcea451debb02::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}