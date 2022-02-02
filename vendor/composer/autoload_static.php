<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit605523acf5b60a4366d57334d5a962dd
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit605523acf5b60a4366d57334d5a962dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit605523acf5b60a4366d57334d5a962dd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
