

<?php
    session_start();
    
   
    if(isset($_POST['xacnhan'])) {
        
        // Chenf duwx lieeuj vaof bangr thanh toans
        
        // Lấy thông tin từ form
        $nguoinhan = $_POST['tennhan'];
        $sdt = $_POST['sdtnhan'];
        $diachinhan = $_POST['diachinhan'];
        
        require_once '../csdl/connectdb.php';
        $res_tv = mysqli_query($conn, "select * from thanhvien where id = '".$_GET['id']."';");
        $row_tv = mysqli_fetch_array($res_tv);
        $name = $row_tv['ten'];
        $b = $row_tv['ngaysinh'];
        $e = $row_tv['email'];
        $m = $row_tv['mobile'];
        $p = $row_tv['password'];
        
        if($sdt=='') $sdt=$m;
        if($diachinhan==null) {
            echo '<script> alert("Nhập địa chỉ") </script>';
            sleep(3);
            header('location: cart.php');
        } else {
        // add thanh vien vao danh sach khach hang
        // Lấy thông tin thành viên để thêm thành khách hàng name / birth / place / mobile / email 
        // Lấy thông tin nhân viên đang có ít khách nhất để thêm vào khách hàng


            $idnv='';
            $resgetnv = mysqli_query($conn, "SELECT COUNT(*) as 'num',`idemployee` FROM `customer` GROUP BY `idemployee` ORDER BY 1 ;");
            while($row = mysqli_fetch_array($resgetnv)) {
                $idnv = $row['idemployee'];
                break;
            }
            $kiemtra = "select * from customer where email='".$e."';";
            if(mysqli_num_rows(mysqli_query($conn, $kiemtra))==0) {
                $sql = " insert into customer(name,birth,place,mobile,email,idemployee) values ('".$name."','".$diachinhan."','".$b."','".$m."','".$e."','".$idnv."');";
                if(mysqli_query($conn, $sql)) {
                    echo "Thêm khách hàng thành công";
                } else {
                    echo "Lỗi trong lúc truy vấn ". mysqli_error($conn);
                }
            }
            // 
            //     
            // Lấy thông tin từ giỏ hàng     
            // 
            // add gio hang vao hoa don
            //Lấy lastID()
            $rowid= mysqli_query($conn, "select max(id) as id from customer;");
            $idcus1= mysqli_fetch_array($rowid);
            $idcus =$idcus1['id'];

            //Laays last id cua hoa don
            $rowhd= mysqli_query($conn, "select max(mahoadon) as id from hoadon;");
            $idhd1= mysqli_fetch_array($rowhd);
            $idhoadon =$idhd1['id']+1;

            $id = $_GET['id']; // id thanhvien

            
            
            
            // truy vấn lấy hàng có idthanhvien = $id
            $sql_gio = "select * from giohang where id = '".$id."';";
            $res_gio = mysqli_query($conn, $sql_gio);
            while($row = mysqli_fetch_array($res_gio)) {
                $idpro = $row['idproduct'];
                $soluong = $row['soluong'];
                $sql="insert into hoadon(mahoadon,idcustomer,idproduct,soluong) values ($idhoadon,$idcus,'".$idpro."',$soluong);";
                // Thay doi so luong sp trong bang products
                $soluongsp = "update products set quantity=quantity-$soluong where idproduct='".$idpro."';";
                if(mysqli_query($conn, $sql)) {
                    mysqli_query($conn, $soluongsp);
                    echo "Thêm 1 sp vào hoadon";
                }
                else {
                    echo 'Lỗi thêm giỏ hàng vào hóa đơn  '.mysqli_error($conn); 
                }
            }
            
            //Thêm thông tin vào bảng thanhtoan
            $inserttothanhotoan = "insert into thanhtoan (`mahoadon`,`tennguoinhan`,`sdtnhan`,`diachinhan`) values('".$idhoadon."','".$nguoinhan."','".$sdt."','" .$diachinhan. "')";                       
            $test_insert=mysqli_query($conn, $inserttothanhotoan);
            if($test_insert) {
                echo '<script> alert("Thông tin đã đươc chèn vào bang thanh toán") </script>';
            }
            else {
                echo '<script> alert("'.$test_insert.' Lỗi : '. mysqli_error($conn).'") </script>';
                sleep(3);
                exit();
            }
            // kết thúc thêm vào bảng thanhtoan

            //Xoa khoi giohang
            $result=  mysqli_query($conn, "delete from giohang where id = '".$id."'");
            if($result) {
                echo $idcus. "  ".$id;
                echo '<script> alert("Thanh toán thành công !!!");</script>';
                header("Location: ../index.php");
                exit(); 
            } else {
                echo 'Xuất hiện lỗi trong lúc xóa sp khỏi giỏ hàng : '.  mysqli_error($conn);
            }
        }
        mysqli_close($conn);
        header('location: cart.php');
    }
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Thanh toán</title>
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
.row{
    margin:auto;
    width:1200px;
    overflow:auto;
}
table.center { width: 1000px; margin: 0 auto; } 
table, th, td{
    border:1px solid #e0e0e0;
}
table{
    border-collapse:collapse;
/*    //width:600px;*/
}
tr:hover {
    background: #e0e0e0;
}
th, td{
    text-align:left;
    padding:10px;
}
.editMode{
    border: 1px solid greenyellow;
    background: #fff;
}

.head_form{
	font-size: 24px;
	color: #57b846;
	line-height: 1.2;
	text-align: center;
	width: 100%;
	display: block;
	padding-bottom: 20px;
        white-space: nowrap;
}
label {
	font-size: 18px;
        font-weight: 400;
	top:0px;
	left:0px;
	color:#57b846;;	
        pointer-event:none;
	padding: 10px;
        white-space: nowrap;
}
input {
	width: 200px;
	border-radius: 30px;
	background: #e0e0e0;
	height: 30px;
	text-align: center;
	line-height: 1.2;
        border: none;
        margin: 10px 0;
}
#date {color: #57b846; }
input:focus{
	width: 202px;
	height: 32px;
	border:none;
}
.save {
        margin-top: 30px;
	background: #57b846;
	cursor: pointer;
        color: #fff;
}
.save:hover {
	background: #fff;
        color: #57b846;
        border: 1px solid #57b846;
}
.cancel {
    width: 200px;
    border-radius: 30px;
    background: red;
    
    height: 30px;
    text-align: center;
    line-height: 30px;
    border: none;
    margin: 10px 0;
}
.cancel:hover {
    
    background: #e0e0e0;
    border: 1px solid red;
    transition: all .2s ease;
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
                    <div style="float: right;margin-left: 60%;">Chào bạn <?php echo $_SESSION['ten'];  ?> đến thăm trang của mình <3 || <a href="../public/dangxuat.php">Đăng xuất</a></div>
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
						<a href="../index.php#all-sp">Xem hàng</a>
					</li>
					<li>
						<a href="../index.php#gioithieu">Hỏi đáp</a>
					</li>
					<li>
                                            <a href="../index.php#gioithieu">Liên hệ</a>
					</li>
					<li>
						<a href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=https%3A%2F%2Fcsdl-2020.000webhostapp.com%2F&display=popup&ref=plugin&src=share_button" target="_blank">
							<i class="fa fa-facebook-square"></i>
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
                    <div class="trang-chu"><a href="../index.php">Trang chủ</a></div>
			<div class="trang-chu"><a href="../index.php#danhmuc">Danh mục</a></div>
			<div class="trang-chu"><a href="../index.php#gioithieu">Giới thiệu</a></div>
		</div>
		<div class="menu-fun">
				<ul>
				    <?php 
                            require_once '../csdl/connectdb.php'; ?>
                        <li><span style="cursor: pointer;"><i class="fa fa-search" id="search" ></i></span></li>
                        <li>
                            <?php 
                                
                                $sql= " select * from spuathich where idthanhvien= ".$_GET['id'];
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result)>0) {
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
                                    <div class="nv"> <a href="../public/user-profile.php" style="color: #fff;"> &nbsp&nbspThông tin&nbsp&nbsp </a></div>
                                    <div class="nv"><a href="../public/dangxuat.php" style="color: #fff;">&nbsp&nbspĐăng xuất</a></div>
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
                                $sql= " select * from giohang where id=".$_GET['id'];
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
                    <a href="../show-product-search.php?search=<?php echo $input;?>">Xem kết quả tìm kiếm</a></div>
                    <?php } ?>
                </div>
                </div>
           </div>
        </div>
        </div>

<!-- Xác nhận thanh toán -->
<span class="head_form"> Xác nhận thanh toán </span>
<div style="display: flex;width: 800px;margin: auto;">
    <div class="form">
        <form action="" method="POST">
            

            <label>Họ tên người nhận</label><br/>
            <input type="text" name="tennhan" value="<?php echo $_SESSION['ten'];?>"/><br/>
            <label>Số điện thoại người nhận</label><br/>
            <input type="text" name="sdtnhan" value="" /><br/>
            <label>Địa chỉ nhận</label><br/>
            <input type="text" name="diachinhan" placeholder="Phải nhập thông tin"/><br/>

            <div><input type="submit" name="xacnhan" class="save" value="Xác nhận"/></div>
            <div class="cancel"><a href="cart.php"> Hủy </a></div>

            <br/>

        </form>
    </div>
    <div class="hoadon">
        <label class="head_form">Đơn hàng hiện tại</label>
        <table class="table" style="text-align: center; left: 10%;margin-left: 5%; margin-top:15px;" id="table_t">
           
            <?php
                require_once '../csdl/connectdb.php';
                
                $total = 0;
                $idthanhvien = $_GET['id'];
                $sql= " select * from giohang where id=".$idthanhvien;
                $result = mysqli_query($conn, $sql);
                
                while($row1 = mysqli_fetch_array($result)) {
                    $idthanhvien = $row1['id'];
                    $sql2= "select *  from products where idproduct='".$row1['idproduct']."'";
                    $res = mysqli_query($conn, $sql2);
                    $row= mysqli_fetch_array($res);

                 ?>
                <tr style="height: 100px;">
                        <td><img src="../image/<?php echo $row["image"];?>"></td>
                        <td><?php
                            echo '<h4>'.$row['nameproduct']."</h4>";
                        ?></td>
                        <td><?php echo '<p>'.$row['sellprice']."</p>";?></td>
                        <td>
                            <?php echo '<p> *'.$row1['soluong']."</p>";?>
                        </td>
                        <td>
                            <?php echo '<p style="white-space: nowrap"> ='.($row1['soluong']*$row['sellprice'])."</p>";?>
                        </td>
                </tr>
                <?php
                    $total = $total + $row['sellprice']*$row1['soluong'];
                }
                
            ?>	  
                    
                <tr>
                    <td><strong>Tổng số tiền: </strong></td>
                    <td id="tongtien"><strong><?php echo $total; ?> vnđ</strong></td>
                </tr>
	  </table>
    </div>
</div>
<!--- Kết thú thanh toán -->
    
<footer id="gioithieu">
    <div class="container" style="width: 1200px;margin: auto;">
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
					<p></p> 
					<p></p>
					<p>Chỉnh sửa giao diện</p> 
					<p> ...</p>
				</div>
			</div>
		</div>
		<div class="design">
			design by thinh / shop didong.vn
		</div>
	</footer>

<?php mysqli_close($conn);?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>
    