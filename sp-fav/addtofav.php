<?php
    require_once '../csdl/connectdb.php';
    $product = $_GET['idproduct'];
    $name = $_GET['ten'];
    $result = mysqli_query($conn, "select id from thanhvien where ten='".$name."'");
    $row0= mysqli_fetch_array($result);
    $id= $row0['id'];
    $sql = "select * from spuathich where idproduct ='".$product."' and idthanhvien='".$id."'";
    if(mysqli_num_rows(mysqli_query($conn, $sql))<=0) {
        $query = "insert into spuathich(idproduct,idthanhvien) values ('".$product."','".$id."');";
    
        if(mysqli_query($conn, $query)) {
            header("location: ../index.php");
            exit();
        }
        else {
            echo $name. "   " .$product;
            header("location: ../dangnhap.php");
            echo "<script> alert('Có lỗi trong lúc thêm sp vào danh mục');</alert>";
        }
    }
    header("location: ../index.php");
    mysqli_close($conn);
?>
