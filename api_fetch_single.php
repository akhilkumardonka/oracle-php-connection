<?php

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    $data = json_decode(file_get_contents("php://input"), true);
    $employee_id = $data['employee_id'];

    include "config.php";
    
    $sql = "SELECT * FROM EMPLOYEES WHERE id = {$employee_id}";
    $query = $db->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($results);

?>