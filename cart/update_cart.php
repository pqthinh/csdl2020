<?php
    include "../csdl/connectdb.php";
    $soluong = $_POST['soluong'];
    $editid = $_POST['id'];
    $sql0 = "select * from products where idproduct= (select idproduct from giohang where idgiohang='".$editid."');";
    $res = mysqli_query($conn, $sql0);
    $row = mysqli_fetch_array($res);
    if($soluong > $row['quantity']-1 && $soluong >0) {
        $soluong=$row['quantity'];
        echo '<script>';
        echo   'alert("Cửa hàng chỉ còn '.$row['quantity'].' sản phẩm '.$row['nameproduct'].'");' ;
        echo '</script>';
    }
    $query = "UPDATE giohang SET soluong = '".$soluong."' WHERE idgiohang='".$editid."'";
    mysqli_query($conn,$query);
    echo 1;
?>