<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1a06004e8ecf5dbce5218aa071f1faf
{
    public static $prefixesPsr0 = array (
        'A' => 
        array (
            'Application' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitd1a06004e8ecf5dbce5218aa071f1faf::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
