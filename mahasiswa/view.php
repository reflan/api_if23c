<?php 
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, DELETE, PUT");
    header("Access-Control-Allow-Headers: Content-Type, Autorization");

    include("../connection.php");

    $sql ="SELECT * FROM tbl_mahasiswa";

    $result = $connect->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $mahasiswa[] = $row;
        }
        echo json_encode(array(
            "success" => true,
            "mahasiswa" => $mahasiswa,
        ));
    }else{
        echo json_encode(array(
            "success" => false,
            
        ));
    }

?>