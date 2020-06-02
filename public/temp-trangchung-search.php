<!DOCTYPE html>
<html>
<head>
    <title>Shop</title>
    <link rel="icon" type="image/ico" href="image/icons8-admin-settings-male-50.png" />
    <meta charset="utf-8">
    <link href="css/css-trangchung.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href=".css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600&amp;display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
<style>

.test03 {
  	display: <?php echo isset($_POST["search"])?"block":"none";?>;
        width: 100%;
        margin-left: 15%;
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
	<div class="top0">
		<div class="container">
			<span class="l">Chào mừng bạn đến với bài demo btl môn csdl. </span>
			<span class="r">Để có trải nghiệm tốt nhất bạn nên <a href="dangkythanhvien.php"> Đăng ký thành viên </a> hoặc <a href="dangnhap.php"> Đăng nhập</a></span>			
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
                                    <li><a href="#">Xem hàng</a></li>
                                    <li><a href="#">Hỏi đáp</a></li>
                                    <li><a href="#">Liên hệ</a></li>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
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
				<a href="index.php">Didong<span>.vn</span></a>
			</div>
		</div>
		<div class="content-menu">
			<div class="trang-chu"><a href="../trangchu.php">Trang chủ</a></div>
			<div class="trang-chu"><a href="../danhmuc.php">Danh mục</a></div>
			<div class="trang-chu"><a href="../gioithieu.php">Giới thiệu</a></div>
			<div class="trang-chu"><a href="../gioithieu.php"></a></div>
		</div>
		<div class="menu-fun">
                    <ul>
                        <li>
                            <span style="cursor: pointer;"><i class="fa fa-search" id="search" ></i></span>
                            
                        </li>
                        
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-user-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    
		</div>
        </div>
    
    <div class="test03">
        <div class="qc-phuhop"><?php
                    require_once './connectdb.php';
                    
                    if(count($_POST)>0) {
                        $input = $_POST['input'];
                        $query = "select * from image where chucnang like '%".$input."%' limit 0,2";
                        $result = mysqli_query($conn, $query);
                        if(mysqli_num_rows($result)>0) {
                            while($row=  mysqli_fetch_array($result)) {
                            ?>
                    <div class="quangcao-search" style="background: url('./image/<?php echo $row['ten_anh'];?>') no-repeat;background-size: contain"></div>
                        
                        
                        <?php
                            }
                       } else {
                           echo "Không tìm thấy quảng cáo phù hợp với kết quả tìm kiếm";
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
                            <button type="submit" name=search><i class="fa fa-search" id="result" ></i></button>
                        </form>
                    </div>
                    <div id="output-search">
                <?php
                    //require_once './connectdb.php';
                    
                    if(count($_POST)>0) {
                        $input = $_POST['input'];
                        
                        $sql = "select * from products where nameproduct like '%".$input."%' and quantity>0 limit 0,5;";
                        $query = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($query)>0) {
                            $i=0;
                            while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <div class="result">
                        <div class="image-result"><img src="image/<?php echo $row["image"];?>"></div>
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
                    <a href="show-product-search.php?search=<?php echo $input;?>">Xem kết quả tìm kiếm</a></div>
                    <?php } ?>
                </div>
                </div>
           </div>
        </div>
        </div>
	<div class="banner">

	<!-- Slideshow container -->
	<div style="width: 70%;" >
		<div class="slideshow-container">
		  <!-- Full-width images with number and caption text -->
		  <div class="mySlides fade">
		    <div class="numbertext">1 / 10</div>
		    <img src="./image/Slide08.png" style="width:100%">
		    <div class="text">Realme616</div>
		  </div>
		  <div class="mySlides fade">
		    <div class="numbertext">2 / 10</div>
		    <img src="./image/Silde01.png" style="width:100%">
		    <div class="text">Tư vấn miễn phí / Đội ngũ nhân viên nhiệt tình</div>
		  </div>

		  <div class="mySlides fade">
		    <div class="numbertext">3 / 9</div>
		    <img src="./image/Slide03.png" style="width:100%">
		    <div class="text">Mua iPad uy tín</div>
		  </div>
		  <div class="mySlides fade">
		    <div class="numbertext">4 / 10</div>
		    <img src="./image/Slide04.png" style="width:100%">
		    <div class="text">iPad 2- Học online - Giá siêu rẻ</div>
		  </div>
		  <div class="mySlides fade">
		    <div class="numbertext">5 / 10</div>
		    <img src="./image/Slide05.png" style="width:100%">
		    <div class="text">iPhone11 giá sốc mùa cô Vy</div>
		  </div>
		  <div class="mySlides fade">
		    <div class="numbertext">6 / 10</div>
		    <img src="./image/Slide06.png" style="width:100%">
		    <div class="text">Bảo hành tại nhà</div>
		  </div>
		   <div class="mySlides fade">
		    <div class="numbertext">7 / 10</div>
		    <img src="./image/Slide07.png" style="width:100%">
		    <div class="text">Realme5 - chip trâu - cam sắc - pin khủng</div>
		  </div>
		  <div class="mySlides fade">
		    <div class="numbertext">8 / 10</div>
		    <img src="./image/Silde02.png" style="width:100%">
		    <div class="text">iPad ngon-bổ-rẻ</div>
		  </div>
		   
		   <div class="mySlides fade">
		    <div class="numbertext">9 / 10</div>
		    <img src="./image/Slide09.png" style="width:100%">
		    <div class="text">Giao hàng tận nhà / phục vụ xuyên cô rô na :))</div>
		  </div>
		   <div class="mySlides fade">
		    <div class="numbertext">10 / 10</div>
		    <img src="./image/Slide10.png" style="width:100%">
		    <div class="text">Samsung : Chất lượng Mỹ</div>
		  </div>
		  <!-- Next and previous buttons -->
		  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<!-- The dots/circles -->
		<div style="text-align:center;width: 100%" >
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                    <span class="dot" onclick="currentSlide(6)"></span>
                    <span class="dot" onclick="currentSlide(7)"></span>
                    <span class="dot" onclick="currentSlide(8)"></span>
                    <span class="dot" onclick="currentSlide(9)"></span>
                    <span class="dot" onclick="currentSlide(10)"></span>
		</div> 
	</div>

	<div class="shopping">
		<div class="cover">
                    <div>
                        <a href="temp-k.html">Vào trang
                            <div class="icon-user"></div>
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
		</div>
		<div class="cover">
			<div>
                            <a href="dangnhap.php">Đăng nhập
				<i class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>
		<div class="cover">
			<div>
                            <a href="dangkythanhvien.php">Đăng ký thành viên
                                <i class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>
	</div>
</div>
<service>
	<div class="container">
		<div class="__slo" style="margin-left: 10px">
			<p class="__p"><i class="fa fa-truck"></i><b>miễn phí ship</b></p>
			<p>Với mọi đơn hàng trên 10m vnd</p>
		</div>
		<div class="__slo">
			<p class="__p"><i class="fa fa-refresh"></i><b>hoàn tiền</b></p>
			<p>Hoàn tiền trong 30 ngày</p>
		</div>
		<div class="__slo">
			<p class="__p"><i class="fa fa-lock"></i><b>Mua sắm an toàn</b></p>
			<p>Bảo mật tối đa khi mua hàng</p>
		</div>
		<div class="__slo">
			<p class="__p"><i class="fa fa-database"></i><b>trên 200 sản phẩm</b></p>
			<p>Có mọi loại điện thoại bạn muốn :)</p>
		</div>
	</div>
	</service>


<category>
	<div class="r-banner">
		<div class="items">
			<div>
                            <p>iPad</p>
			    <a href="./show-ipad.php">Xem iPad <i class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>
		<div class="items">
			<div>
                            <p>Smartphone</p>
			    <a href="./show-smartphone.php">Xem Smartphone <i class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>
		<div class="items">
			<div>
                            <p>Normalphone</p>
			    <a href="./show-normalphone.php">Xem Normalphone  <i class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>
		</div>
</category>

<div class="bestPick" >
	<div class="container" style="background-color: #e0e0e0;border-radius: 50%;">
		<div class="r-content">
			<h2>Lựa chọn tốt nhất năm 2020</h2>
			<p>Sản phẩm mẫu mã đẹp, thiết kế sang trọng thể hiện đẳng cấp :))) </p>
		</div>
		<div class="r-img">
			<div class="imag"><p>iPhone 11 pro</p></div>
			<div class="imag"><p>Vsmart Joy 3</p></div>
			<div class="imag"><p>Realme C3</p></div>
			<div class="imag"><p>Xiaomi redmi Note 9s</p></div>
			<div class="imag"><p>Samsung galaxy-s20</p></div>
		</div>
	</div>
</div>


<div class="hangvn" >
	<div class="container" >
		<div class="r-content">
			<h2>Điện thoại thông minh VIỆT NAM - Vsmartphone</h2>
			<p>Sản phẩm điện thoại thông minh phục vụ người việt nam /Bao rẻ / bao xịn :))) </p>
		</div>
		<div class="r-img" style="background: #e0e0e0; border-radius: 10px" >
			<div class="imag">
				<p>Vsmart Active 3 -6GB
				<a href="#" style="color: #fff"><i class="fa fa-eye" title="Xem ngay -+"></i></a></p>
			</div>
			<div class="imag">
				<p>Vsmart Active 3
				<a href="#" style="color: #fff"><i class="fa fa-eye" title="Xem ngay -+"></i></a></p></div>
			<div class="imag">
				<p>Vsmart Bee 3
				<a href="#" style="color: #fff"><i class="fa fa-eye" title="Xem ngay -+"></i></a></p></div>
			<div class="imag">
				<p>Vsmart Bee
				<a href="#" style="color: #fff"><i class="fa fa-eye" title="Xem ngay -+"></i></a></p></div>
			<div class="imag">
				<p>Vsmart Joy 3
				<a href="#" style="color: #fff"><i class="fa fa-eye" title="Xem ngay -+"></i></a>
				</p></div>
			<div class="imag">
				<p>Vsmart live 3
				<a href="#" style="color: #fff"><i class="fa fa-eye" title="Xem ngay -+"></i></a></p>
				</div>
			<div class="imag">
				<p>Vsmart Star 3
				<a href="#" style="color: #fff"><i class="fa fa-eye" title="Xem ngay -+"></i></a></p>
				</div>
			<div class="imag">
				<p>Vsmart Star coral
				<a href="#" style="color: #fff"><i class="fa fa-eye" title="Xem ngay -+"></i></a></p>
			</div>
		</div>
	</div>
</div>

<div class="container5">
		<div class="r-sell">
			<h3>Sản phẩm bán chạy</h3>
		</div>
		<div class="filter-sell">
			<select id="sort-by">
				<option value="">--Sort By--</option>
			</select> 
			<select id="price">
				<option value="">--Price--</option>
			</select>
			<select id="size">
				<option value="">--Size--</option>
			</select>
			<select id="color">
				<option value="">--Color--</option>
			</select>
			<a href="#">FILTER</a>
		</div>
	</div>

<div class="sp">
	<div class="container" style="background: #e0e0e0;">
		<div class="sanpham">
			<div class="img">
				<a href="#">
					<img src="image/iPhone11-pro.jpg" alt="product-5" >
				</a>
				<div class="f-icon">
					<a href="#">
						<i class="fa fa-heart-o"></i></a>
					<a href="#">
						<i class="fa fa-rss"></i></a>
					<a href="#">
						<i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
			
			<div class="content">
				<h4>iPhone 11 Pro</h4>
				<p id="dis">
					<strike>24000000 vnd</strike>
					21950000vnd
				</p>
			</div>
		</div>


		<div class="sanpham">
			<div class="img">
				<a href="#">
					<img src="image/iPhone11-pro.jpg" alt="product-5">
				</a>
				<div class="f-icon">
					<a href="#">
						<i class="fa fa-heart-o"></i></a>
					<a href="#">
						<i class="fa fa-rss"></i></a>
					<a href="#">
						<i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
			
			<div class="content">
				<h4>iPhone 11 Pro</h4>
				<p id="dis">
					<strike>24000000 vnd</strike>
					21950000vnd
				</p>
			</div>
		</div>


		<div class="sanpham">
			<div class="img">
				<a href="#">
					<img src="image/iPhone11-pro.jpg" alt="product-5">
				</a>
				<div class="f-icon">
					<a href="#">
						<i class="fa fa-heart-o"></i></a>
					<a href="#">
						<i class="fa fa-rss"></i></a>
					<a href="#">
						<i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
			
			<div class="content">
				<h4>iPhone 11 Pro</h4>
				<p id="dis">
					<strike>24000000 vnd</strike>
					21950000vnd
				</p>
			</div>
		</div>



		<div class="sanpham">
			<div class="img">
				<a href="#">
					<img src="image/iPhone11-pro.jpg" alt="product-5">
				</a>
				<div class="f-icon">
					<a href="#">
						<i class="fa fa-heart-o"></i></a>
					<a href="#">
						<i class="fa fa-rss"></i></a>
					<a href="#">
						<i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
			
			<div class="content">
				<h4>iPhone 11 Pro</h4>
				<p id="dis">
					<strike>24000000 vnd</strike>
					21950000vnd
				</p>
			</div>
		</div>


		<div class="sanpham">
			<div class="img">
				<a href="#">
					<img src="image/iPhone11-pro.jpg" alt="product-5">
				</a>
				<div class="f-icon">
					<a href="#">
						<i class="fa fa-heart-o"></i></a>
					<a href="#">
						<i class="fa fa-rss"></i></a>
					<a href="#">
						<i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
			
			<div class="content">
				<h4>iPhone 11 Pro</h4>
				<p id="dis">
					<strike>24000000 vnd</strike>
					21950000vnd
				</p>
			</div>
		</div>
		

		

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