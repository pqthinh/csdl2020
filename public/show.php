<?php
    require_once '../csdl/connectdb.php';
    $id = $_GET['idproductline'];
    $query = "select * from productline where idproductline='".$id."'";
    $row =  mysqli_fetch_array(mysqli_query($conn, $query));
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
	<link rel="icon" type="image/ico" href="image/icons8-admin-settings-male-50.png" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
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
/*      background-color: rgba(44, 69, 88, 0.9);*/
        transition: .2s ease;
        transform: scale(0);
    }
    .close{
        position: fixed;
        top: 5px;
        right: 5px;
        font-size: 3rem;
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
        height: 50vh;
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
</style>
</head>
<body>
 
    <div class="contain-info" aria-hidden="true" style="transform: scale(1);">
        <span class="close"><a href="javascript:history.go(-1)" title="Tro lai trang truoc">&laquo;</a></span>
        <div class="show-info">
            <div class="info"><?php echo $row['nameproductline']; ?></div>
            <div class="image"> <img src="image/<?php echo $row['image']; ?> " alt="<?php echo $row['image']; ?>" title="<?php echo $row['nameproductline']; ?>"></div>
            <div class="text"><?php echo $row['intro']; ?></div>
        </div>
    </div>
</body>
</html>