<?php

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    $data = json_decode(file_get_contents("php://input"), true);
    $employee_id = $data['employee_id'];
    $employee_name = $data['employee_name'];
    $employee_dept = $data['employee_dept'];

    include "config.php";
    
    $sql = "INSERT INTO EMPLOYEES(ID, NAME, DEPARTMENT) VALUES ({$employee_id}, '{$employee_name}', '{$employee_dept}')";
    $query = $db->prepare($sql);

    try{
        $query->execute();
        echo json_encode(array('message' => "employee added successfully!!", 'status' => true));
    }catch(PDOException $e){
        echo json_encode(array('message' => "employee not added!!", 'status' => false));
    }
    
?>