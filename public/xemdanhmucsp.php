<!DOCTYPE html>
<html>
<head>
    <title>Shop</title>
    <link rel="icon" type="image/ico" href="../image/icons8-admin-settings-male-50.png" />
    <meta charset="utf-8">
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
                    header('location: dangnhap.php');
		}
	?>
	<div class="top0">
		<div class="container">
                    <div style="float: right;margin-left: 60%;">Chào bạn <?php echo $_SESSION['ten'];  ?> đến thăm trang của mình <3 || <a href="./dangxuat.php">Đăng xuất</a></div>
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
                                    <li><a href="../index.php#all-sp">Xem hàng</a></li>
                                    <li><a href="../index.php#gioithieu">Hỏi đáp</a></li>
                                    <li><a href="../index.php#gioithieu">Liên hệ</a></li>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=https%3A%2F%2Fcsdl-2020.000webhostapp.com%2F&display=popup&ref=plugin&src=share_button" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-tumblr-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
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
			<div class="trang-chu"><a href="../index.php"></a></div>
		</div>
		<div class="menu-fun">
                    <ul>
                        <li>
                            <span style="cursor: pointer;"><i class="fa fa-search" id="search" ></i></span>
                            
                        </li>
                        
                        <li><a href="../sp-fav/sp-fav.php"><i class="fa fa-heart-o"></i></a></li>
                        <li><a href="./user-profile.php"><i class="fa fa-user-o"></i></a></li>
                        <li><a href="../cart/cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    
		</div>
        </div>
                
    <div class="test03">
        <div class="qc-phuhop"><?php
                    require_once '../csdl/connectdb.php';
                    
                    if(isset($_POST["search"])) {
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
        <div class="" style="width: 35%;">
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
                    if(isset($_POST["search"])) {
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
                    </div>
                    
                    <?php
                        
                                }$i++;
                            } else {
                                echo "<p>Cửa hàng không còn sản phẩm bạn tìm. Mong bạn quay lại lần sau</p>";
                            }
                        
                    ?>
                <div id="xemthem" style="background: #9DBFAF;cursor: pointer;">
                    <a href="./show-product-search.php?search=<?php echo $input;?>">Xem kết quả tìm kiếm</a></div>
                    <?php } ?>
                </div>
                </div>
           </div>
        </div>
    </div>
    


<div class="container5">
        <div class="r-sell">
                <h3>Danh mục <?php echo " ".$_GET['id'];?></h3>
                <p style="margin-top: 15px;">Dựa trên số lượng sản phẩm đã bán được trong table 'products'</p>
                <?php 
                    require_once '../csdl/connectdb.php';
                    $id= $_GET['id'];
                    $sql= "select idproductline ,idproduct, nameproduct,sellprice,ram,image from products where idproductline like '%".$id."%'";
                    $result = mysqli_query($conn, $sql); 
                    echo '<p style="text-align: center;color: green;margin-top: 15px;">';
                    echo "Tìm thấy '". mysqli_num_rows($result)." ' sản phẩm cho danh mục '".$id." '. </p>";
                ?>
        </div>
</div>
    <div class="sp" style="border-bottom: 1px solid #e0e0e0; padding: 15px 0 50px;">
        <div class="container" style="background: #e0e0e0;">
                
                    <?php
                    while($row = mysqli_fetch_array($result)) {
                ?>
		<div class="sanpham">
			<div class="img">
                            <a href="./show-product.php?id=<?php echo $row['idproduct'];?>">
					<img src="../image/<?php echo $row['image']?>" alt="<?php echo $row['nameproduct'];?>" >
				</a>
				<div class="f-icon">
					<a href="#">
						<i class="fa fa-heart-o"></i></a>
					<a href="./show-product.php?id=<?php echo $row['idproduct'];?>">
						<i class="fa fa-rss"></i></a>
					<a href="../cart/addtocart.php?idproduct=<?php echo $row['idproduct']; ?>&ten=<?php echo $_SESSION['ten']; ?>">
						<i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
			<div class="content">
				<h4><?php echo $row['nameproduct']."  ".$row['ram']; ?></h4>
                                <?php 
                                    $sql2 = "select * from `sanphamkhuyenmai` 
where `sanphamkhuyenmai`.`idproduct`='".$row['idproduct']."' and DATE_ADD(`sanphamkhuyenmai`.`ngay_batdau`,INTERVAL `sanphamkhuyenmai`.`songay_hethan` DAY)> CURRENT_TIME";
                                    $result2 = mysqli_query($conn, $sql2);
                                    $out='';
                                    if(mysqli_num_rows($result2)==1) 
                                    {   
                                        $out= 'dis';
                                        $row2 = mysqli_fetch_array($result2);
                                ?>
				<p id="<?php echo $out;?>">
                                Giá sp:   </p><strike><?php echo $row['sellprice']-$row2['giamgia'];
                                    echo " vnd";} else echo'';?></strike>
                                    <?php echo $row['sellprice']." vnd"; ?>
				</p>
			</div>
                    </div>
                    <?php 
                       
                    }
                
                ?>
	</div>
</div>

<footer>
		<div class="container">
			<div class="box1">
				<div class="__box1">Thông tin cửa hàng</div>
				<div class="__box11">
					<p>Địa chỉ : Thái Bình</p> 
					<p>Cửa hàng duy nhất tại Thái Bình :|| </p>
					<p>Cung cấp dịch vụ xem mẫu điện thoại trực tuyến</p> 
					
				</div>
			</div>
			<div class="box1">
				<div class="__box1">Thông tin liên hệ</div>
				<div class="__box11">
					<p>admin : Thịnh</p> 
					<p>Địa chỉ : Thái Bình </p>
					<p>SĐT :0123456789</p> 
					<p>Email : email@gmail.com </p>
					
				</div>
			</div>
			<div class="box1">
				<div class="__box1">Nhân viên chăm sóc khách hàng</div>
				<div class="__box11">
					<p>empl : Thịnh</p> 
					<p>Địa chỉ : Thái Bình </p>
					<p>SĐT :0123456789</p> 
					<p>Email : email@gmail.com </p>
				</div>
			</div>
			<div class="box1">
				<div class="__box1">Tính trạng btl </div>
				<div class="__box11">
					<p>Database chưa hoạt động được</p> 
					<p>Chưa hoàn thiện danh mục sp </p>
					<p>Chưa tạo được phiên hoạt động trên trang</p> 
					<p> ...</p>
				</div>
			</div>
		</div>
		<div class="design">
			design by thinh / shop didong.vn
		</div>
	</footer>





<script type="text/javascript">
	var slideIndex = 1;
	showSlides(slideIndex);

	// Next/previous controls
	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	// Thumbnail image controls
	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";
	  dots[slideIndex-1].className += " active";
	} 
        
</script>

</body>
</html>