<?php
    include "../connection.php";


    $npm    = $_POST['text_npm'];
    $nama    = $_POST['text_nama'];
    $prodi    = $_POST['text_prodi'];
    

    $sql1 = "SELECT * FROM tbl_mahasiswa WHERE npm = '$npm'";

    $check = $connect->query($sql1);
    $reason = "";
    $success = true;

    if($check-> num_rows > 0){
        $success = false;
        $reason = "NPM sudah ada di database";
    }else{
        $sql2 = "INSERT INTO tbl_mahasiswa VALUES ('$npm','$nama','$prodi')";
        $result = $connect->query($sql2);

        if(!$result){
            $success = false;
            $reason = "Gagal Tambah data mahasiswa";
        }
    }

    echo json_encode(array(
        "success" => $success,
        "reason" => $reason,    
    ));


?>