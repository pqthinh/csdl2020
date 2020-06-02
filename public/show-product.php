<?php
    session_start();
    require_once '../csdl/connectdb.php';
    $id = $_GET['id'];
    $query = "select * from products where idproduct='".$id."'";
    $row =  mysqli_fetch_array(mysqli_query($conn, $query));
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
	<link rel="icon" type="image/ico" href="../image/icons8-admin-settings-male-50.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600&amp;display=swap" rel="stylesheet">
<style>
    .contain-info {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow-y: auto;
        z-index: 14;
        /*background-color: rgba(44, 69, 88, 0.9);*/
        transition: .2s ease;
        transform: scale(0);
    }
    .close{
        position: fixed;
        top: 5px;
        right: 5px;
        font-size: 30px;
        width: 1em;
        height: 1em;
        line-height: 1em;
        text-align: center;
        color: #aaa;
        cursor: pointer;
        transition: .2s ease;
    }
    .show-info {
        width: 400px;
        margin: auto;
    }
        .show-info .info {
            font-size: 30px;
            text-align: center;
        }
        .show-info .text {
            font-size: 16px;
            text-align: left;
            margin-top: 15px;
        }
img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 98%;
    margin-top: 15px;
}
body {
	padding: 0px;
	margin: 0px;
	font-family: 'Quicksand', sans-serif;
	font:14px;
}

*{
	padding: 0px;
	margin: 0px;
	box-sizing: border-box;
	outline: 0;
}
a {
	color: #000;
	text-decoration: none;
	display: inline-block;
	text-transform: capitalize;
}
a:hover{
	color: red;
	transition: all 0.4 ease;
}
</style>
</head>
<body>
 
    <div class="contain-info" aria-hidden="true" style="transform: scale(1);">
        <span class="close"><a href="javascript:history.go(-1)" title="Tro lai trang truoc">&laquo;</a></span>
        <div class="show-info">
            <div class="image"> <img src="../image/<?php echo $row['image']; ?>" alt="<?php echo $row['image']; ?>" title="<?php echo $row['nameproduct']; ?>"></div>
            <div class="info"><?php echo $row['nameproduct']; ?></div>
            <div class="text"><?php echo $row['sellprice']; ?></div>
            <div class="text">Bộ nhớ: <?php echo $row['ram']; ?></div>
            <div class="text">Hệ điều hành: <?php echo $row['operator']; ?></div>
            <div class="text">Chip: <?php echo $row['chip']; ?></div>
            <div class="text">Thông tin PIN: <?php echo $row['battery']; ?></div>
            <div class="text">Camera: <?php echo $row['camera']; ?></div>
            <div class="text">Hãng: <?php echo $row['brand']; ?></div>
            <div class="text" style="color: red; text-align: center"><?php echo $row['quantity']>0?"":"HẾT HÀNG"; ?></div>
            <a href="../cart/addtocart.php?idproduct=<?php echo $row['idproduct']; ?>&ten=<?php echo $_SESSION['ten']; ?>" style="padding: 0 0 10px;">
                Cho vào giỏ  <i class="fa fa-shopping-cart"></i></a><br>
                                                
            <a href="cauhinh-chitiet.php?id=<?php echo $row['idinfo']; ?>">Xem thông tin chi tiết của sản phẩm  <i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
</body>
</html>