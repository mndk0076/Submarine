<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit140d5dad0c9df30c4e4f463124ccd445
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit140d5dad0c9df30c4e4f463124ccd445::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit140d5dad0c9df30c4e4f463124ccd445::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
