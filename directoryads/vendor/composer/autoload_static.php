<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit192080a99a0a2581dba7a9ac99f44267
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit192080a99a0a2581dba7a9ac99f44267::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit192080a99a0a2581dba7a9ac99f44267::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
