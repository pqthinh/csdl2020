<?php 
    require_once '../csdl/connectdb.php';
    $result=  mysqli_query($conn, "delete from giohang where idgiohang = ".$_GET['remove']);
    if($result) {
        header("Location: cart.php");
        exit();
    } else {
        echo 'Xuất hiện lỗi trong lúc xóa sp khỏi giỏ hàng : '.  mysqli_error($conn);
    }
    mysqli_close($conn);
?>