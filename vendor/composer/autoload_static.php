<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit744fed97d7ef73fac7bf47b8a0b3e0ae
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit744fed97d7ef73fac7bf47b8a0b3e0ae::$classMap;

        }, null, ClassLoader::class);
    }
}
