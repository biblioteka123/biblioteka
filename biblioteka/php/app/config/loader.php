<?php

$loader = new \Phalcon\Loader();

$loader->registerDirs(
    array(
        $config->application->controllersDir,
        $config->application->modelsDir,
        $config->application->pluginsDir,
        $config->application->libraryDir,
    )
);

$loader->registerClasses(
    array(
        "PHPMailer" => "library/PHPMailer-master/class.phpmailer.php",
    )
);

$loader->register();
