<?php

    $server = 'localhost';
    $username = 'akhil';
    $service_name = 'orcl';
    $password = 'akhil123';
    $sid = '';
    $port = '1521';
    
    $dbCon = "(
        DESCRIPTION = 
        (ADDRESS = (PROTOCOL = TCP)(HOST = $server)(PORT = $port))
        (CONNECT_DATA = (SERVICE_NAME = $service_name) (SID = $sid))
    )";

    $db = new PDO("oci:dbname=" . $dbCon . "; charset=utf8", $username, $password,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    define("APP_NAME", 'PHP_RESTFUL_API');

?>