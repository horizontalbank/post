<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbdea186dcf945dd3c55da78dcfe98257
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Keboola\\Csv\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Keboola\\Csv\\' => 
        array (
            0 => __DIR__ . '/..' . '/keboola/csv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbdea186dcf945dd3c55da78dcfe98257::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbdea186dcf945dd3c55da78dcfe98257::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}