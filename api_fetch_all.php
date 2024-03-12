<?php

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    include "config.php";
    
    $sql = "SELECT * FROM EMPLOYEES";
    $query = $db->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($results);

?>