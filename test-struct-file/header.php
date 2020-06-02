<!DOCTYPE html>
<html>
<head>
	<title>Thông tin</title>
	<link rel="icon" type="image/ico" href="../image/icons8-admin-settings-male-50.png" />
	<meta charset="utf-8">
        <link href="../css/css-user.css" rel="stylesheet" type="text/css"/>
        <link href="../css/css-trangchung.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600&amp;display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
<style>
.test03 {
  	display: <?php echo isset($_POST["search"])?"block":"none";?>;
        width: 90%;
        margin-left: 10%;
/*        margin-right: 9%;*/
        display: flex;
}
.qc-phuhop{
    width: 50%;
    height: 210px;
    margin-right: 15px;
}
    .quangcao-search {
        height: 200px;
        margin-top:10px; 
    }
.form-search{
	display: flex;
        width: 100%;
}
    .form-search input {
        border: 3px solid #00B4CC;
        border-right: none;
        padding: 5px;
        height: 35px;
        border-radius: 20px;
        outline: none;
        color: #9DBFAF;
        width: 90%;
    }
    .form-search button {
            width: 40px;
            height: 35px;
            border: 1px solid #00B4CC;
            background: #00B4CC;
            text-align: center;
            color: #fff;
            border-radius: 20px;
            cursor: pointer;
            font-size: 20px;
    }

.result {
    display: inline-block;
    width: 100%;
    margin-top: 2px;
    background: #e0e0e0;
}
    .result .image-result {
        width: 90px;
        height: 70px;
        margin: 5px 5px;
        margin-left: 5px;
        float: left;
    }
    .result .info-result {
        width: 65%;
        margin-left: 10px;
        float: left;
        margin-top: 15px;
    }

img {
    border: 1px solid #ddd;
    border-radius: 4px;
    width: 75px;
}
        
</style>
<script>
$(function(){
    $('#search').click(function(){
        $('.test03').toggle(1000);
    });
});
</script>
</head>
<body>
	<?php 
		session_start();
		if (!isset($_SESSION['ten'])) {
                    header('location: ../public/dangnhap.php');
		}
	?>
	<div class="top0">
		<div class="container">
                    <div style="float: right;margin-left: 60%;">Chào bạn <?php echo $_SESSION['ten'];echo $_SESSION['id'];  ?> đến thăm trang của mình <3 || <a href="../public/dangxuat.php">Đăng xuất</a></div>
		</div>
		
	</div>

	<div class="menu-phu">
		<div class="container">
			<div class="l-header">
				<i class="fa fa-bolt"></i>
				<p>hệ thống bán lẻ điện thoại di động</p>
				<i class="fa fa-bolt"></i>
			</div>
			<div class="r-header">
				<ul>
					<li>
						<a href="#all-sp">Xem hàng</a>
					</li>
					<li>
						<a href="#gioithieu">Hỏi đáp</a>
					</li>
					<li>
                                            <a href="#gioithieu">Liên hệ</a>
					</li>
					<li>
						<a href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=https%3A%2F%2Fcsdl-2020.000webhostapp.com%2F&display=popup&ref=plugin&src=share_button" target="_blank">
							<i class="fa fa-facebook-square">
								
							</i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-twitter-square">
								
							</i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-tumblr-square">
								
							</i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-google-plus-square">
							</i>
						</a>
					</li>

				</ul>
			</div>
		</div>
	</div>

	<div class="menu-chung">
		<div class="logo">
			<div class="c">
				<a href="../index.php">Didong<span>.vn</span></a>
			</div>
		</div>
		<div class="content-menu">
			<div class="trang-chu"><a href="../index.php">Trang chủ</a></div>
                        <div class="trang-chu"><a href="../index.php#danhmuc">Danh mục</a></div>
			<div class="trang-chu"><a href="../index.php#gioithieu">Giới thiệu</a></div>
<!--			<div class="trang-chu"><a href="<?php // if($_SESSION['ten']=='admin') echo './temp-quantri.php'; else echo '#';?>">Mục quản trị viên</a></div>-->
		</div>
		<div class="menu-fun">
                    <ul>
                        <?php 
                            //session_start();
                            require_once '../csdl/connectdb.php'; ?>
                        <li><span style="cursor: pointer;"><i class="fa fa-search" id="search" ></i></span></li>
                        <li>
                            <?php 
                                $ten= $_SESSION['ten'];
                                $sql= "select * from spuathich where idthanhvien=".$_SESSION['id'];
                                $result = mysqli_query($conn, $sql);
                                if($result!= '' && mysqli_num_rows($result) >0) {
                                    echo '<div style="width: 20px;height: 20px;">';
                                    echo "<a href='../sp-fav/sp-fav.php'>";
                                    echo '<i class="fa fa-heart-o"></i></a> </div>';
                                    echo '<div style="color: red; width:10px; height: 10px; background: red; border-radius: 50%;right: 0;bottom: 12px;position: absolute; "></div>';
                                }
                                else echo '<a href="../sp-fav/sp-fav.php"><i class="fa fa-heart-o"></i></a>';
                            ?>
                            
                        </li>
                        <li>
                            <div class="user" onmouseover="javascript:openuser('user')" onmouseout="javascript:closeuser('user')"><a href="./public/user-profile.php"><i class="fa fa-user-o"></i> </a>
                                <div id="user" style="display: none; position: absolute;color: #fff; background: #333;border-radius: 0 20px;width: 160px;">
                                    <div class="nv"> <a href="./user-profile.php" style="color: #fff;"> &nbsp&nbspThông tin&nbsp&nbsp </a></div>
                                    <div class="nv"><a href="./dangxuat.php" style="color: #fff;">&nbsp&nbspĐăng xuất</a></div>
                                </div>
                            </div>
                            
                            <script>
                                function openuser(content) {
                                    //alert('show ///');
                                    document.getElementById(content).style.display = "block";
                                    //document.getElementByID().style.display = 'block';
                                }
                                function closeuser(content) {
                                    //alert('show ///');
                                    document.getElementById(content).style.display = "none";
                                    //document.getElementByID().style.display = 'block';
                                }
                            </script>
                        </li>

                        <li>
                            <?php 
                                $ten= $_SESSION['ten'];
                                $sql= " select * from giohang where id=".$_SESSION['id'];
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result)>0) {
                                    echo '<div style="width: 20px;height: 20px;">';
                                    echo "<a href='../cart/cart.php'>";
                                    echo '<i class="fa fa-shopping-cart"></i></a> </div>';
                                    echo '<div style="color: red; width:10px; height: 10px; background: red; border-radius: 50%;right: 0;bottom: 12px;position: absolute; "></div>';
                                    
                                }
                                else echo '<a href="../cart/cart.php"><i class="fa fa-shopping-cart"></i></a>';
                            ?>

                        </li>
                    </ul>
				
			</div>

	</div>
    <div class="test03" style="display: none;">
        <div class="qc-phuhop"><?php
                    require_once '../csdl/connectdb.php';
                    
                    if(isset($_POST['search'])) {
                        $input = $_POST['input'];
                        $query = "select * from image where chucnang like '%".$input."%' limit 0,2";
                        $result = mysqli_query($conn, $query);
                        if(mysqli_num_rows($result)>0) {
                            while($row=  mysqli_fetch_array($result)) {
                            ?>
                    <div class="quangcao-search" style="background: url('../image/<?php echo $row['ten_anh'];?>') no-repeat;background-size: contain">
                    <?php echo "<p style='color: red;'>".$row['title']."</p>"?>
                    </div>
                        
                        
                        <?php
                            }
                       } else {
                            echo "Không tìm thấy quảng cáo phù hợp với kết quả tìm kiếm"; ?>
                           <div class="quangcao-search" style="background: url('../image/Slide-mua-Corona-sua-mien-phi-tan-nha.png') no-repeat;background-size: contain">
                            <p style='color: red;'>Quảng cáo chung</p>"
                            </div>
            <?php
                       }
                    }
                    ?>
        </div>
        <div class="" style="width: 40%;">
            <div style="display: flex;"> 
                <div>
                    <div class="form-search">
                        <form action="" method="POST" class="form-search">
                            <input type="text" name="input" placeholder="Nhập tên sp...">
                            <button type="submit" name="search"><i class="fa fa-search" id="result" ></i></button>
                        </form>
                    </div>
                    <div id="output-search">
                <?php
                    //require_once './connectdb.php';
                    
                    if(isset($_POST['search'])) {
                        $input = $_POST['input'];
                        
                        $sql = "select * from products where nameproduct like '%".$input."%' and quantity>0 limit 0,5;";
                        $query = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($query)>0) {
                            $i=0;
                            while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <div class="result">
                        <div class="image-result"><img src="../image/<?php echo $row["image"];?>"></div>
                        <div class="info-result">
                            <?php
                                echo '<h4>'.$row['nameproduct']." ".$row['ram']."</h4>";
                                echo '<p>'.$row['sellprice']."</p>";
                            ?>
                        </div>
                        <div style="line-height: 44px;">
                            <a href="<?php 
                                echo "../sp-fav/addtofav.php?idproduct=".$row['idproduct']."&ten=".$_SESSION['ten'];?>" title="them vao sp ua thich">
				<i class="fa fa-heart-o"></i></a>
                            <a href="../public/show-product.php?id=<?php echo $row['idproduct'];?>" title="Xem thong tin sp">
				<i class="fa fa-rss"></i></a>
                            <a href="../cart/addtocart.php?idproduct=<?php echo $row['idproduct']; ?>&ten=<?php echo $_SESSION['ten']; ?>" title="them vao gio hang">
				<i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    
                    <?php
                        
                                }$i++;
                            } else {
                                echo "<p>Cửa hàng không còn sản phẩm bạn tìm. Mong bạn quay lại lần sau</p>";
                            }
                        
                    ?>
                <div id="xemthem" style="background: #9DBFAF;cursor: pointer;">
                    <a href="../public/show-product-search.php?search=<?php echo $input;?>">Xem kết quả tìm kiếm</a></div>
                    <?php } ?>
                </div>
                </div>
           </div>
        </div>
        </div>