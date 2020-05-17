<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
	<link rel="icon" type="image/ico" href="image/icons8-admin-settings-male-50.png" />
	<meta charset="utf-8">
        <link href="css/css-trangchung.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
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
                $lifetime=60;
                session_set_cookie_params($lifetime);
		session_start();
		if (!isset($_SESSION['ten'])) {
                    header('location: ./public/dangnhap.php');
		}
	?>
	<div class="top0">
		<div class="container">
                    <div style="float: right;margin-left: 60%;">Chào bạn <?php echo $_SESSION['ten'];echo $_SESSION['id'];  ?> đến thăm trang của mình <3 || <a href="./public/dangxuat.php">Đăng xuất</a></div>
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
				<a href="index.php">Didong<span>.vn</span></a>
			</div>
		</div>
		<div class="content-menu">
			<div class="trang-chu"><a href="./index.php">Trang chủ</a></div>
			<div class="trang-chu"><a href="#danhmuc">Danh mục</a></div>
			<div class="trang-chu"><a href="#gioithieu">Giới thiệu</a></div>
<!--			<div class="trang-chu"><a href="<?php // if($_SESSION['ten']=='admin') echo './temp-quantri.php'; else echo '#';?>">Mục quản trị viên</a></div>-->
		</div>
		<div class="menu-fun">
                    <ul>
                        <?php 
                            //session_start();
                            require_once './csdl/connectdb.php'; ?>
                        <li><span style="cursor: pointer;"><i class="fa fa-search" id="search" ></i></span></li>
                        <li>
                            <?php 
                                $ten= $_SESSION['ten'];
                                $sql= "select * from spuathich where idthanhvien=(select id from thanhvien where ten='".$ten."');";
                                $result = mysqli_query($conn, $sql);
                                if($result!= '' && mysqli_num_rows($result) >0) {
                                    echo '<div style="width: 20px;height: 20px;">';
                                    echo "<a href='./sp-fav/sp-fav.php'>";
                                    echo '<i class="fa fa-heart-o"></i></a> </div>';
                                    echo '<div style="color: red; width:10px; height: 10px; background: red; border-radius: 50%;right: 0;bottom: 12px;position: absolute; "></div>';
                                }
                                else echo '<a href="./sp-fav/sp-fav.php"><i class="fa fa-heart-o"></i></a>';
                            ?>
                            
                        </li>
                        <li><a href="./public/user-profile.php"><i class="fa fa-user-o"></i>
                        </a></li>

                        <li>
                            <?php 
                                $ten= $_SESSION['ten'];
                                $sql= " select * from giohang where id=(select id from thanhvien where ten='".$ten."');";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result)>0) {
                                    echo '<div style="width: 20px;height: 20px;">';
                                    echo "<a href='cart/cart.php'>";
                                    echo '<i class="fa fa-shopping-cart"></i></a> </div>';
                                    echo '<div style="color: red; width:10px; height: 10px; background: red; border-radius: 50%;right: 0;bottom: 12px;position: absolute; "></div>';
                                    
                                }
                                else echo '<a href="./cart/cart.php"><i class="fa fa-shopping-cart"></i></a>';
                            ?>

                        </li>
                    </ul>
				
			</div>

	</div>
    <div class="test03" style="display: none;">
        <div class="qc-phuhop"><?php
                    require_once './csdl/connectdb.php';
                    
                    if(isset($_POST['search'])) {
                        $input = $_POST['input'];
                        $query = "select * from image where chucnang like '%".$input."%' limit 0,2";
                        $result = mysqli_query($conn, $query);
                        if(mysqli_num_rows($result)>0) {
                            while($row=  mysqli_fetch_array($result)) {
                            ?>
                    <div class="quangcao-search" style="background: url('./image/<?php echo $row['ten_anh'];?>') no-repeat;background-size: contain">
                    <?php echo "<p style='color: red;'>".$row['title']."</p>"?>
                    </div>
                        
                        
                        <?php
                            }
                       } else {
                            echo "Không tìm thấy quảng cáo phù hợp với kết quả tìm kiếm"; ?>
                           <div class="quangcao-search" style="background: url('./image/Slide-mua-Corona-sua-mien-phi-tan-nha.png') no-repeat;background-size: contain">
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
                        <div class="image-result"><img src="image/<?php echo $row["image"];?>"></div>
                        <div class="info-result">
                            <?php
                                echo '<h4>'.$row['nameproduct']." ".$row['ram']."</h4>";
                                echo '<p>'.$row['sellprice']."</p>";
                            ?>
                        </div>
                        <div style="line-height: 44px;">
                            <a href="<?php 
                                echo "./sp-fav/addtofav.php?idproduct=".$row['idproduct']."&ten=".$_SESSION['ten'];?>" title="them vao sp ua thich">
				<i class="fa fa-heart-o"></i></a>
                            <a href="./public/show-product.php?id=<?php echo $row['idproduct'];?>" title="Xem thong tin sp">
				<i class="fa fa-rss"></i></a>
                            <a href="./cart/addtocart.php?idproduct=<?php echo $row['idproduct']; ?>&ten=<?php echo $_SESSION['ten']; ?>" title="them vao gio hang">
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
                    <a href="./public/show-product-search.php?search=<?php echo $input;?>">Xem kết quả tìm kiếm</a></div>
                    <?php } ?>
                </div>
                </div>
           </div>
        </div>
        </div>
<!-- Lọc sản phẩm --> 

<div class="container5" id="all-sp">
    <div class="r-sell">
            <h3>Danh sách sp lọc</h3>
            <p style="text-align: center; color: greenyellow;margin-top: 15px;">Sản phẩm lọc ra từ bảng products</p>
    </div>
    <form action="" method="POST">
        <div class="filter-sell">
            <select name="gia">
                    <option value="all">--Tất cả (theo giá)--</option>
                    <option value="1">--dưới 2 triệu--</option>
                    <option value="2">--2-5 triệu--</option>
                    <option value="3">--5-10 triệu--</option>
                    <option value="4">--10-20 triệu--</option>
                    <option value="5">--trên 20 triệu--</option>
            </select> 
            <select name="hang">
                    <option value="all">-- Tất cả (theo hãng)--</option>
                    <option value="vsmart">--Vsmart--</option>
                    <option value="apple">--Apple--</option>
                    <option value="samsung">--Samsung--</option>
                    <option value="xiaomi">--Xiaomi--</option>
                    <option value="realme">--Realme--</option>
                    <option value="nokia">--Nokia--</option>
                    <option value="bkav">--Bphone--</option>
            </select>
            <select name="dongsp">
                    <option value="all">--dòng sp--</option>
                    <option value="1">--iPad--</option>
                    <option value="2">--Smart phone--</option>
                    <option value="3">--Normal phone--</option>
            </select>
            <select name="tinhnang">
                    <option value="all">--Tính năng--</option>
                    <option value="1">--PIN-</option>
                    <option value="2">--Màn hình-</option>
                    <option value="3">--RAM-</option>
            </select>
            <select name="sp">
                    <option value="all">--Sản phẩm--</option>
                    <option value="1">--Sp mới-</option>
                    <option value="2">--Sp bán chạy-</option>
                    <option value="3">--Sp ưa thích-</option>
                    <option value="4">--Sp đang có khuyến mãi-</option>
            </select>
            <input type="submit" name="submit" value="FILTER">
        </div>
    </form>
    <?php 
        if(isset($_POST['submit'])) {
            $gia=$hang=$dongsp=$tinhnang=$sp=$query='';
            $select_gia=$_POST['gia'];
            $select_hang=$_POST['hang'];
            $select_dongsp=$_POST['dongsp'];
            $select_tinhnang=$_POST['tinhnang'];
            $select_sp=$_POST['sp'];
            switch ($select_hang) {
                case 'all':
                    $hang='1';  break;
                case 'vsmart':
                    $hang="(nameproduct like '%vsmart%')";  break;
                case 'apple':
                    $hang="(nameproduct like '%ip%')";  break;
                case 'samsung':
                    $hang="(nameproduct like '%samsung%')";  break;
                case 'xiaomi':
                    $hang="(nameproduct like '%mi%')";  break;
                case 'realme':
                    $hang="(nameproduct like '%realme%')";  break;   
                case 'nokia':
                    $hang="(nameproduct like '%nokia%')";  break;
                case 'bkav':
                    $hang="(nameproduct like '%bphone%')";  break;
            }
            switch ($select_gia) {
                case 'all':
                    $gia='1';  break;
                case '1':
                    $gia='(sellprice between 0 and 2000000)';  break;
                case '2':
                    $gia='(sellprice between 2000000 and 5000000)';  break;
                case '3':
                    $gia='(sellprice between 5000000 and 10000000)';  break;
                case '4':
                    $gia='(sellprice between 10000000 and 20000000)';  break;
                case '5':
                    $gia='(sellprice > 20000000)';  break;   
            }
            switch ($select_dongsp) {
                case 'all':
                    $dongsp='1';  break;
                case '1':
                    $dongsp="(idproductline like '%ip%')";  break;
                case '2':
                    $dongsp="(idproductline like '%sm%')";  break;
                case '3':
                    $dongsp="(idproductline like '%normal%')";  break;               
            }
            switch ($select_tinhnang) {
                case 'all':
                    $tinhnang="ORDER BY '' "; break;
                case '1':
                    $tinhnang='ORDER BY `battery` desc';   break;
                case '2':
                    $tinhnang='ORDER BY `screen` desc';   break;
                case '3':
                    $tinhnang='ORDER BY `ram` desc';   break;
            }
            switch ($select_sp) {
                case 'all':
                    $sp=''; 
                    $query= 'select * from products where '.$gia.' and '.$hang.' and '.$dongsp.' '.$tinhnang. ' '.$sp; break;
                case '1':
                    $sp=',`upload` asc';   
                    $query= 'select * from products where '.$gia.' and '.$hang.' and '.$dongsp.' '.$tinhnang. ' '.$sp; break;
                case '2': // sản phẩm bán chạy
                    $query= "select distinct(idproduct),`ram`,battery,sellprice,screen,`image`,`upload`,`nameproduct`,quantity,hoadon.soluong from products left join hoadon using(idproduct) where ".$gia.' and '.$hang.' and '.$dongsp." group by idproduct ".' '.$tinhnang.",`soluong` desc ;";   break;
                case '3': // sản phẩm ưa thích
                    $query = "select distinct(idproduct),`ram`,`image`,`upload`,`nameproduct`,COUNT( spuathich.idproduct),`ram`,battery,sellprice,quantity from products left join spuathich using(idproduct) where ".$gia.' and '.$hang.' and '.$dongsp." group by idproduct ".' '.$tinhnang.", 6 desc ";   break;
                case '4': // sản phẩm có khuyến mãi
                    $query="select distinct(idproduct),`ram`,`image`,`upload`,`nameproduct`,`sellprice`,`ram`,`battery`,`screen`,quantity from products left join sanphamkhuyenmai using(idproduct) where (DATE_ADD(`sanphamkhuyenmai`.`ngay_batdau`,INTERVAL `sanphamkhuyenmai`.`songay_hethan` DAY)> CURRENT_TIME) and ". $gia.' and '.$hang.' and '.$dongsp." group by idproduct ".' '.$tinhnang.", 10 desc ";   break;
            } 
            ?>
</div>
<div class="sp">
    <?php  echo '<p style="text-align: center;">'.$gia . '  '.$hang. '  '.$dongsp . '  '. $tinhnang . '    '.$sp. "</p>";
        echo '<p style="text-align: center;padding-bottom: 30px;width: 800px; margin : auto;">'.$query. "</p>";?>
    <div class="container" style="background: #e0e0e0;">
    
            <?php
            if($query=='') 
                $query = 'select * from products where '.$gia.' and '.$hang.' and '.$dongsp.' '.$tinhnang;
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result)>0) {
                while($row= mysqli_fetch_array($result)) {
                  ?>
    <div class="sanpham">
			<div class="img">
                            <a href="./public/show-product.php?id=<?php echo $row['idproduct'];?>">
					<img src="image/<?php echo $row['image']?>" alt="<?php echo $row['nameproduct'];?>" >
				</a>
                            <?php
                                        if($row['quantity']<=0) echo '<span style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);border: 1px solid red;border-radius: 5px;background: #fff;color: red;">Hết hàng</span>';
                                       
                                    ?>
                            
				<div class="f-icon">
					<a href="<?php
                                            echo "./sp-fav/addtofav.php?idproduct=".$row['idproduct']."&ten=".$_SESSION['ten'];?>">
						<i class="fa fa-heart-o"></i></a>
                                                <a href="./public/show-product.php?id=<?php echo $row['idproduct'];?>">
						<i class="fa fa-rss"></i></a>
                                    <a href="<?php
                                        if($row['quantity']>0) echo "./cart/addtocart.php?idproduct=".$row['idproduct']."&ten=".$_SESSION['ten'];
                                        else echo "#";
                                    ?>">
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
                                <strike><?php echo $row['sellprice']-$row2['giamgia'];
                                    echo " vnd";} else echo'';?></strike>
                                    <?php echo $row['sellprice']." vnd"; ?>
				</p>
			</div>
                    </div>
    <?php
                }
            } else {
                echo 'Không tìm thấy sp nào cả.';
            }
        }
    ?>
</div>
</div>   
    
    
<!-- Kết thúc lọc sp-->
    <div class="banner" style="margin-top: 15px;">

	<!-- Slideshow container -->
	<div style="width: 100%;height: ">
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


<category id="danhmuc">
	<div class="r-banner">
		<div class="items">
			<div>
				<p>iPad</p>
                                <a href="public/xemdanhmucsp.php?id=ipad">Xem iPad <i class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>
		<div class="items">
			<div>
				<p>Smartphone</p>
			    <a href="public/xemdanhmucsp.php?id=sm">Xem Smartphone <i class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>
		<div class="items">
			<div>
				<p>Normalphone</p>
			    <a href="public/xemdanhmucsp.php?id=normal">Xem Normalphone  <i class="fa fa-long-arrow-right"></i></a>
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
                <p style="text-align: center;color: greenyellow;">Show 8 sản phẩm nổi bật của hãng vsmart theo số lượng bán được giảm dần</p>
		<div class="r-img" style="background: #e0e0e0; border-radius: 10px" >
                    <?php 
                        require_once './csdl/connectdb.php';
                        $sql= "SELECT *from `products`LEFT JOIN `hoadon` on `products`.`idproduct`   = `hoadon`.idproduct 
                              where `nameproduct` like '%vsmart%'ORDER BY `hoadon`.`soluong`  DESC limit 0,8";
                        $result= mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_array($result)) {
                    ?>
			<div class="imag">
				<p><?php echo $row['nameproduct']; ?>
                                    <a href="public/show-product.php?id=<?php echo $row['idproduct'];?>" style="color: #fff"><i class="fa fa-eye" title="Xem ngay -+"></i></a></p>
			</div>
                        <?php }
                        ?>
                    
		</div>
	</div>
</div>

<div class="container5">
    <div class="r-sell">
            <h3>Sản phẩm bán chạy</h3>
            <p style="text-align: center; color: greenyellow;margin-top: 15px;">Dựa theo số lượng sp bán được có trong bảng hoadon</p>
    </div>
</div>


<div class="sp">
        <div class="container" style="background: #e0e0e0;">
                <?php
                    require_once './csdl/connectdb.php';
                    $sql = "select `hoadon`.`idproduct`,`hoadon`.`trangthai`,`hoadon`.`soluong`,`products`.`idproduct`,`products`.`image`,`products`.`nameproduct`,`products`.`ram`,`products`.`sellprice`,`products`.`quantity`"
                            . "from `hoadon`,`products` where `hoadon`.`idproduct`= `products`.`idproduct`"
                            . "group by `hoadon`.`idproduct` order by `hoadon`.`soluong` desc limit 0,8";
                    $query = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($query)>0) {
                        $i=0;
                        while($row = mysqli_fetch_array($query)) {
                    
                ?>
		<div class="sanpham">
			<div class="img">
                            <a href="public/show-product.php?id=<?php echo $row['idproduct'];?>">
					<img src="image/<?php echo $row['image']?>" alt="<?php echo $row['nameproduct'];?>" >
				</a>
                            <?php
                                        if($row['quantity']<=0) echo '<span style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);border: 1px solid red;border-radius: 5px;background: #fff;color: red;">Hết hàng</span>';
                                       
                                    ?>
                            
				<div class="f-icon">
					<a href="<?php
                                            echo "./sp-fav/addtofav.php?idproduct=".$row['idproduct']."&ten=".$_SESSION['ten'];?>">
						<i class="fa fa-heart-o"></i></a>
                                                <a href="public/show-product.php?id=<?php echo $row['idproduct'];?>">
						<i class="fa fa-rss"></i></a>
                                    <a href="<?php
                                        if($row['quantity']>0) echo "./cart/addtocart.php?idproduct=".$row['idproduct']."&ten=".$_SESSION['ten'];
                                        else echo "#";
                                    ?>">
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
                                <strike><?php echo $row['sellprice']-$row2['giamgia'];
                                    echo " vnd";} else echo'';?></strike>
                                    <?php echo $row['sellprice']." vnd"; ?>
				</p>
			</div>
                    </div>
                    <?php 
                        $i+=1;
                    }
                } else {echo "No result found";}
                ?>
	</div>
</div>

<footer id="gioithieu">
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
				<div class="__box1">Tình trạng btl </div>
				<div class="__box11">
					<p> </p> 
					<p> </p>
					<p> </p> 
					<p> ...</p>
				</div>
			</div>
		</div>
		<div class="design">
			design by thinh / shop didong.vn
		</div>
	</footer>

<?php mysqli_close($conn);?>



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
        
        var myIndex = 0;
        carousel();

        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 5000);    
        }
</script>
<script type="text/javascript">
	function() {
	  jQuery('.search-form').slideToggle();
	}
</script>
</body>
</html>