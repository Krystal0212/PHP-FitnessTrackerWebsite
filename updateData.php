<?php

    include 'database.php';

    session_start();


    if(!isset($_POST)){
        echo "No data";
        return;
    }

    $status = $_POST['status'];

    $username = $_SESSION['Login Data']['username'];

    //Data tranining 

    $sqlData = "SELECT tranningData FROM `account` WHERE `username` = '$username'";

    $resultData = $database -> query($sqlData);

    $temp = 0;

    $data = $resultData -> fetch_assoc();

    $data = $data['tranningData'];

    if (gettype($data) == 'string') {
        $temp = $data;
    }

    if($status){
        $temp = $temp + 1;
    }

    $sql = "UPDATE `account` SET `status` = $status WHERE `username` = '$username'";
    $result = $database -> query($sql);


    $sqlData = "UPDATE `account` SET `tranningData` = $temp WHERE `username` = '$username'";
    $resultData = $database -> query($sqlData);


    if($result && $resultData){
        $dataReturn = [
            'status' => 'success',
            'message' => 'Data updated successfully',
            'data' => [
                'status' => $status,
                'tranningData' => $temp
            ]
        ];
    }else{
        $dataReturn = [
            'status' => 'error',
            'message' => 'Error updating data',
            'data' => [
                'status' => $status,
                'tranningData' => $temp
            ]
        ];
    }

    echo json_encode($dataReturn);
?>