<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite73a21725dca933a701e70dbbe46b9a7
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mustache' => 
            array (
                0 => __DIR__ . '/..' . '/mustache/mustache/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInite73a21725dca933a701e70dbbe46b9a7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite73a21725dca933a701e70dbbe46b9a7::$classMap;

        }, null, ClassLoader::class);
    }
}
