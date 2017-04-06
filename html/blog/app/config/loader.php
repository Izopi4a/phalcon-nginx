<?php

$loader = new \Phalcon\Loader();



//echo $config->application->controllersDir; exit;

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    array(
        $config->application->controllersDir,
        $config->application->modelsDir
    )
)->register();

//echo "<pre>"; print_r($loader); exit;