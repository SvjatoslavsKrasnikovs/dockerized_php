<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf49716233c133b0b4cf40b01648dc3b2
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitf49716233c133b0b4cf40b01648dc3b2::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf49716233c133b0b4cf40b01648dc3b2::$classMap;

        }, null, ClassLoader::class);
    }
}
