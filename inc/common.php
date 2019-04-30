<?php
session_start();
require "inc/class.connectdb.php";
require "inc/class.session.php";

define("UPLOAD_DIR",'./../../uploaded/');
define("UPLOAD_PATH",'C:\xampp\uploaded\\');

// handle error reporting
// handle timezone

spl_autoload_register(function ($class_name) {
    //echo "Loading {$class_name}<br>";
    $f = 'inc/class.' .  strtolower ($class_name) . '.php';
    if(file_exists($f)) {
        require $f;
    }
    else {
        echo "<pre>ERROR: Can not find $f</br>";
        debug_backtrace();
    }
});
