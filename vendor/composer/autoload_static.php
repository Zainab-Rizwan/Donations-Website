<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf75dab091fa5977adfbfa457a12addf
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf75dab091fa5977adfbfa457a12addf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf75dab091fa5977adfbfa457a12addf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf75dab091fa5977adfbfa457a12addf::$classMap;

        }, null, ClassLoader::class);
    }
}
