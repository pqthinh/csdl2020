<?php
    session_start();
    require_once '../../csdl/connectdb.php';
    $id = $_GET['id'];
    $query = "select * from products where idproduct='".$id."'";
    $row =  mysqli_fetch_array(mysqli_query($conn, $query));
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sản phâm <?php echo $row['nameproduct']; ?></title>
	<link rel="icon" type="image/ico" href="../image/icons8-admin-settings-male-50.png" />
	<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./css-sanpham/css-showproduct.css"/>
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600&amp;display=swap" rel="stylesheet">

</head>
<body>
 
    <div class="contain-info" aria-hidden="true" style="transform: scale(1);">
        <span class="close"><a href="javascript:history.go(-1)" title="Tro lai trang truoc">&laquo;</a></span>
        <div class="show-info">
            <div class="image"> <img src="../../image/<?php echo $row['image']; ?>" alt="<?php echo $row['image']; ?>" title="<?php echo $row['nameproduct']; ?>"></div>
            <div class="info"><?php echo $row['nameproduct']; ?></div>
            <div class="text">Giá bán: <?php echo $row['sellprice'];  ?> vnđ</div>
            <div class="text">Bộ nhớ: <?php echo $row['ram']; ?></div>
            <div class="text">Hệ điều hành: <?php echo $row['operator']; ?></div>
            <div class="text">Chip: <?php echo $row['chip']; ?></div>
            <div class="text">Thông tin PIN: <?php echo $row['battery']; ?></div>
            <div class="text">Camera: <?php echo $row['camera']; ?></div>
            <div class="text">Hãng: <?php echo $row['brand']; ?></div>
            <div class="text" style="color: red; text-align: center"><?php echo $row['quantity']>0?"":"HẾT HÀNG"; ?></div>
<!--            <a href="../cart/addtocart.php?idproduct=<?php //echo $row['idproduct']; ?>&ten=<?php //echo $_SESSION['ten']; ?>" style="padding: 0 0 10px;">
                Cho vào giỏ  <i class="fa fa-shopping-cart"></i></a><br>-->
                                                
            <a href="cauhinh-chitiet.php?id=<?php echo $row['idinfo']; ?>">Xem thông tin chi tiết của sản phẩm  <i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
</body>
</html>