<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit979a4325e7dcc18c175b8895d210a25c
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit979a4325e7dcc18c175b8895d210a25c::$classMap;

        }, null, ClassLoader::class);
    }
}
