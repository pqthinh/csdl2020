<?php 
    require_once '../csdl/connectdb.php';
    $result=  mysqli_query($conn, "delete from spuathich where id = ".$_GET['remove']);
    if($result) {
        header("Location: sp-fav.php");
        exit();
    } else {
        echo 'Xuất hiện lỗi trong lúc xóa sp khỏi danh mục : '.  mysqli_error($conn);
    }
    mysqli_close($conn);
?>