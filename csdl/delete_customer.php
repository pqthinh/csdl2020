<?php

    require_once './connectdb.php';
    $sql = "delete from customer where id=".$_GET['id'];
    
    if(mysqli_query($conn, $sql)) {
        header("location: manager-customer.php");
        exit();
    } else {
        echo "Error ".$sql." ".mysqli_error($conn);
    }
    mysqli_close($conn);
?>

