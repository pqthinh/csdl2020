<?php
    require_once '../csdl/connectdb.php';
    $product = $_GET['idproduct'];
    $name = $_GET['ten'];
    $result = mysqli_query($conn, "select id from thanhvien where ten='".$name."'");
    $row0= mysqli_fetch_array($result);
    $id= $row0['id'];
    $soluong=1;
    $sql = "select * from giohang where idproduct ='".$product."' and id='".$id."'";
    $query='';
    if(mysqli_num_rows(mysqli_query($conn, $sql))>0) {
        $query= " update giohang set soluong=soluong+1 where idproduct = '".$product."'";
    }
    else    $query = "insert into giohang(idproduct,id,soluong) values ('".$product."','".$id."',".$soluong.");";
    
    echo $query;
    
    if(mysqli_query($conn, $query)) {
        header("location: ../index.php");
        exit();
    }
    else {
        echo $name. "   " .$product;
        header("location: ../public/dangnhap.php");
        echo "<script> alert('Có lỗi trong lúc thêm sp vào giỏ hàng);</alert>";
    }
    mysqli_close($conn);
?>

