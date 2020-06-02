<?php

require '../csdl/connectdb.php';
session_start();
$i=1;
if(isset($_POST['submit'])) {
    $img= $_FILES['anh']['name'];
    $img = basename($img,'.png');
    while(1) {
        //$img=$img.$i;
        if(!file_exists("../image/".$img.$i.".png"))    {
            $img.=$i;
            break;
        }
        $i++;
    }
    move_uploaded_file($_FILES['anh']['tmp_name'], "../image/".$img.'.png');
    $anh = $img.'.png';
    $noidung= $_POST['noidung'];
    $idthanhvien = $_SESSION['id'];
    if($noidung==null) {
        header('location: ../index.php');
        exit();
    }
        
    $sql = "insert into donggop (idthanhvien, noidung, anh) values ($idthanhvien, '".$noidung."', '".$anh."');";
    if(mysqli_query($conn, $sql)) {
        header('location: ../index.php');
        exit();
    }else {
        echo "Lỗi truy vấn: " .$sql ."  ".mysqli_error($conn); 
    }
    mysqli_close($conn);
}
?>