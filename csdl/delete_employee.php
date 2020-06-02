<?php
    require_once './connectdb.php';
    $sql=" delete from employee where idemployee = '".$_GET['idemployee']."'";
    if(mysqli_query($conn, $sql)) {
        header("location: manager-employee.php");
        exit();
    }else {
        echo "Error deleting record: ".$sql." ".mysqli_error($conn);
    }
    mysqli_close($conn);
  ?>