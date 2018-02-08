<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add('Html2pdf_',__DIR__.'/../vendor/html2pdf');

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
