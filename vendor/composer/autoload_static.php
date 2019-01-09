<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89138df2e15ec41decffe2fad8dfa851
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Storage\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Storage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Storage',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit89138df2e15ec41decffe2fad8dfa851::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89138df2e15ec41decffe2fad8dfa851::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
