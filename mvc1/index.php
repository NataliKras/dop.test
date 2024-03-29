<?php

session_start();

include_once 'core/config.php';

spl_autoload_register(function($class) {
    $sources = ["controllers/$class.php", 
    "models/$class.php",
    "core/$class.php",
    "views/$class.php"];
    foreach ($sources as $source) {
        if (file_exists($source)) {
            require_once $source;
        }
    }
});

include_once "core/router.php";

?>