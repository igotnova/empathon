<?php

    session_start();

    $path = __DIR__;

    $files = scandir($path.'/classes');
    foreach ($files as $file) {
        if (in_array($file, ['.', '..'])){ continue; }

        require_once($path.'/classes/'.$file);
    }

    function __autoload($controller) {
        global $path;

        $filename = "{$path}/controllers/{$controller}.php";
        include_once($filename);

    }

    $con = new mySQL('localhost', 'root', '', 'empathon');

