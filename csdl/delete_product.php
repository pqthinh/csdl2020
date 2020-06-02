<?php
    require_once './connectdb.php';
    $sql=" delete from products where idproduct = '".$_GET['idproduct']."'";
    if(mysqli_query($conn, $sql)) {
        header("location: manager-product.php");
        exit();
    }else {
        echo "Error deleting record: ".$sql." ".mysqli_error($conn);
    }
    mysqli_close($conn);
  ?>