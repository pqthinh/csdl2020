<?php 
    
    if($_SERVER["QUERY_STRING"]) {
        require_once '../csdl/connectdb.php';
        $id=$_GET['delete'];
        $sql= "delete from donggop where id =$id";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html>
<title>Góc quản trị</title>
<link rel="icon" type="image/ico" href="../image/icons8-admin-settings-male-50.png" />
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/css-temp-quantri.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./sanpham/css-sanpham/css-qlsp.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style>
    .nv{
        text-align: center;
        /*line-height: 40px;*/
        border-top: 1px solid #00000075;
        white-space: nowrap
    }
    img {
        height: 100px;
    }
</style>
</head>
<body>
    <?php
       
        session_start();
        if(!isset($_SESSION['ten']) || ($_SESSION['ten'] != 'admin') ){
            header('Location: ../public/dangnhap.php');
        }
    ?>
    <div class="menu">
            <div class="container" style="width: 90%;height: 90vh;margin: auto;">
                    <div class="header">
                            <a href="../index.php" target="_blank">
                                    <div class="logo">
                                            <div class="icon"></div>
                                            <div class="text">Didong<span>.vn</span></div>
                                    </div>
                            </a>
                        <a href="../index.php" >
                                    <div class="quanly">
                                            <div class="icon"><i class="fa fa-eye" title="Xem ngay -+"></i></div>
                                    <div class="text">
                                            Xem trang web (TV)
                                    </div>
                                    </div>
                            </a>
                        <a href="../public/trangchung.php" >
                            <div class="quanly">
                                <div class="icon"><i class="fa fa-eye" title="Xem ngay -+"></i></div>
                                <div class="text">Xem trang web  (K)</div>
                            </div>
                        </a>
                    </div>
                    <div class="header">
                            <div class="quanly" onclick="javascript:openTab('qlnhanvien')">
                                    <div class="icon"></div>
                                    <div class="text" id="c_qlnhanvien">Quản lý nhân viên</div>
                            </div>
                            <div class="quanly" onclick="javascript:openTab('khachhang')">
                                    <div class="icon"></div>
                                    <div class="text" id="c_khachhang">Chăm sóc khách hàng</div>
                            </div>
                        <div class="quanly" onclick="javascript:openTab('qlsanpham')">
                                    <div class="icon"></div>
                                    <div class="text" id='c_qlsanpham'>Quản lý sản phẩm</div>
                                    <div class="icon">
                                            <i class="fa fa-chevron-right"></i>
                                    </div>
                            </div>
                        <div class="quanly" onclick="javascript:openTab('qldonhang')">
                                    <div class="icon"></div>
                                    <div class="text" id='c_qldonhang'> Theo dõi đơn hàng</div>
                            </div>
                    </div>
                    <div class="header">
                        <div class="quanly"  onclick="javascript:openTab('qldoanhthu')">
                                    <div class="icon"></div>
                                    <div class="text" id='c_qldoanhthu'>Doanh thu</div>
                            </div>
                        <div class="quanly" onclick="javascript:openTab('thuong')">
                                    <div class="icon"></div>
                                    <div class="text" id='c_thuong'>Thưởng nhân viên</div>
                            </div>
                        <div class="quanly"  onclick="javascript:openTab('khuyenmai')">
                                    <div class="icon"></div>
                                    <div class="text" id='c_khuyenmai'>Khuyến mại / Quà</div>
                            </div>
                        <div class="quanly"  onclick="javascript:openTab('phanhoi')">
                                    <div class="icon"></div>
                                    <div class="text" id='c_phanhoi'>Phản hồi</div>
                            </div>
                    </div>
                    <div class="header">
                        <div class="quanly">
                                    <div class="icon"></div>
                                    <div class="text"><a href="../public/dangxuat.php">Kết thúc phiên</a></div> 
                        </div>
                    </div>
            </div>
    </div>
    
    <div class="content">
        <div class="top-content" style="width: 100%; border-bottom: 1px solid #e0e0e0;height: 50px;line-height: 44px;/*position: sticky;position: -webkit-sticky;top: 0;position: absolute*/ ">
            <div class="menu_of_content" style="width: 70%;font-size: 20px;float: left; "><span>Danh mục</span> <i class="fa fa-chevron-right"></i> &nbsp&nbsp<span  id="content_danhmuc"></span></div>
            <div style="width: 14%;float: right;">
                
                <div class="user" onmouseover="javascript:openuser('user')" onmouseout="javascript:closeuser('user')"><i class="fa fa-user" style="font-size: 30px;padding-right: 10px;line-height: 48px;"></i><span>admin</span>
                    <div id="user" style="display: none; position: absolute;color: #fff; background: #333;border-radius: 0 20px;">
                        <div class="nv"> <a href="../index.php" style="color: #fff;"> &nbsp&nbspTest trang web&nbsp&nbsp </a></div>
                        <div class="nv"><a href="../public/dangxuat.php" style="color: #fff;">Đăng xuất</a></div>
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
            </div>
        </div>
        <div class="container"  style="width: 99%;height: calc(100vh - 60px);margin-top:60px;margin: auto;top:60px/*border: 1px solid #e0e0e0;*/">
            
            <div id="qlnhanvien" class="tabcontent">
                
                <div class="tab">
                    <div class="qlnhanvien"  onclick="javascript:openSub_Tab('danhsachnv','content_ofTab_qlnhanvien')">Danh sách nv <i class="fa fa-user-clock"></i></div>
<!--                    <div class="qlnhanvien"  onclick="javascript:openSub_Tab('xephangnv','content_ofTab_qlnhanvien')">Xếp hạng nv <i class="fa fa-user-crown"></i></div>
                    <div class="qlnhanvien"  onclick="javascript:openSub_Tab('luongnv','content_ofTab_qlnhanvien')">Lương nv <i class="fa fa-universal-access"></i></div>-->
                </div>
                <div class="content_ofTab_qlnhanvien" id="content_ofTab_qlnhanvien" style="display: none;">
                    <div class="content_subtab" id="danhsachnv">
                        <a href="./thanhvien/manager-employee.php" target="blank">Mở quản lý nv trong tab mới</a>
                        <iframe id="frame" src="./thanhvien/manager-employee.php"></iframe>
                        <form>
                            <input type="button" value="Zoom out" name="btn_zoomout" onclick="zoomout();"/>
                            <input type="button" value="Zoom in"  name="btn_zoomin"  onclick="zoomin();"/>
                        </form>
                    </div>
                    <div class="content_subtab" id="xephangnv">
                        <a href="./sanpham/manager-product.php" target="blank">Mở quản lý sp trong tab mới</a>
                        <iframe id="frame" src="./sanpham/manager-product.php">
                        </iframe>
                        <form>
                            <input type="button" value="Zoom out" name="btn_zoomout" onclick="zoomout();"/>
                            <input type="button" value="Zoom in"  name="btn_zoomin"  onclick="zoomin();"/>
                        </form>
                    </div>
                    <div class="content_subtab" id="luongnv">
                        <a href="./sanpham/manager-employee.php" target="blank">Mở quản lý nv trong tab mới</a>
                        <iframe id="frame" src="./thanhvien/manager-employee.php"></iframe>
                        <form>
                            <input type="button" value="Zoom out" name="btn_zoomout" onclick="zoomout();"/>
                            <input type="button" value="Zoom in"  name="btn_zoomin"  onclick="zoomin();"/>
                        </form>
                    </div>

                </div>
                
            </div>
            <div id="khachhang" class="tabcontent" >
                 <div class="tab">
                    <div class="qlnhanvien"  onclick="javascript:openSub_Tab('danhsachkh','content_ofTab_qlkhackhang')">Danh sách KH <i class="fa fa-user-clock"></i></div>
              
                </div>
                <div class="content_ofTab_qlnhanvien" id="content_ofTab_qlkhackhang" style="display: none;">
                    <div class="content_subtab" id="danhsachkh">
                        <a href="./thanhvien/manager-customer.php" target="blank">Mở quản lý KH trong tab mới</a>
                        <iframe id="frame" src="./thanhvien/manager-customer.php"></iframe>
                        <form>
                            <input type="button" value="Zoom out" name="btn_zoomout" onclick="zoomout();"/>
                            <input type="button" value="Zoom in"  name="btn_zoomin"  onclick="zoomin();"/>
                        </form>
                    </div>
                    
                </div>
            </div>
            <div id="qlsanpham" class="tabcontent" >
                <div class="tab">
                    <div class="qlnhanvien"  onclick="openSub_Tab('danhsachsp','content_ofTab_qlsp')">Danh sách sp(bảng) <i class="fa fa-user-clock"></i></div>
                    <div class="qlnhanvien"  onclick="openSub_Tab('grid-sp','content_ofTab_qlsp')">Danh sách sp(lưới) <i class="fa fa-user-crown"></i></div>
<!--                    <div class="qlnhanvien"  onclick="openSub_Tab('luongnv')"> <i class="fa fa-universal-access"></i></div>-->
                </div>
                <div class="content_ofTab_qlnhanvien" id="content_ofTab_qlsp" style="display: none;">
                    <div class="content_subtab" id="danhsachsp">
                        <a href="./sanpham/manager-product.php" target="blank">Mở quản lý sp trong tab mới</a>
                        <iframe id="frame" src="./sanpham/manager-product.php"></iframe>
                        <form>
                            <input type="button" value="Zoom out" name="btn_zoomout" onclick="zoomout();"/>
                            <input type="button" value="Zoom in"  name="btn_zoomin"  onclick="zoomin();"/>
                        </form>
                    </div>
                    <div class="content_subtab" id="grid-sp" style="width: 100%;">
                        <?php 
                            
                            if(isset($_GET['page'])) {
                            ?>
                            <script>
                                openTab('qlsanpham');
                                openSub_Tab('grid-sp','content_ofTab_qlsp');
                            </script>
                            <?php
                            
                        }
                            include('./phantrang-qlsp.php');
                        ?>
                        
                    </div>
                </div>
            </div>
            <div id="qldonhang" class="tabcontent" >
                <div class="tab">
                    <div class="qlnhanvien"  onclick="javascript:openSub_Tab('danhsachhd','content_ofTab_hd')">Danh sách Hóa Đơn <i class="fa fa-user-clock"></i></div>
              
                </div>
                <div class="content_ofTab_qlnhanvien" id="content_ofTab_hd" style="display: none;">
                    <div class="content_subtab" id="danhsachhd">
                        <a href="./hoadon/manager-bill.php" target="blank">Mở quản lý HÓA ĐƠN trong tab mới</a>
                        <iframe id="frame" src="./hoadon/manager-bill.php"></iframe>
                        <form>
                            <input type="button" value="Zoom out" name="btn_zoomout" onclick="zoomout();"/>
                            <input type="button" value="Zoom in"  name="btn_zoomin"  onclick="zoomin();"/>
                        </form>
                    </div>
                    
                </div>
            </div>
            <div id="qldoanhthu" class="tabcontent" >[Không có thông tin]</div>
            <div id="thuong" class="tabcontent" >[Không có thông tin]</div>
            <div id="khuyenmai" class="tabcontent" >
                <div class="tab">
                    <div class="qlnhanvien"  onclick="javascript:openSub_Tab('danhsachspkm','content_ofTab_spkm')">Danh sách KH <i class="fa fa-user-clock"></i></div>
              
                </div>
                <div class="content_ofTab_qlnhanvien" id="content_ofTab_spkm" style="display: none;">
                    <div class="content_subtab" id="danhsachspkm">
                        <a href="./sanpham/manager-spkhuyenmai.php" target="blank">Mở quản lý SPKM trong tab mới</a>
                        <iframe id="frame" src="./sanpham/manager-spkhuyenmai.php"></iframe>
                        <form>
                            <input type="button" value="Zoom out" name="btn_zoomout" onclick="zoomout();"/>
                            <input type="button" value="Zoom in"  name="btn_zoomin"  onclick="zoomin();"/>
                        </form>
                    </div>
                    
                </div>
            </div>
            <div id="phanhoi" class="tabcontent" style="overflow-x:auto;">
                <span style="margin-top: 30px;"> [Thông tin lỗi được báo từ người dùng] </span>
                <table style="margin-top: 30px;text-align: center;">
                    <tr>
                        <td>Mã lỗi</td>
                        <td>ID người báo cáo</td>
                        <td>Mô tả lỗi</td>
                        <td>Ảnh nội dung</td>
                        <td>Thời gian báo</td>
                        <td>Trạng thái lỗi</td>
                    </tr>
                    <?php
                        $sql_err = "select * from donggop";
                        $query_err= mysqli_query($conn, $sql_err);
                        if(mysqli_num_rows($query_err)==0) echo '<span style="margin: auto;margin-top: 60px;color: #57b846;"> [Hệ thống chưa phát hiện có thông báo lỗi từ người dùng </span>';
                        while($row_err = mysqli_fetch_array($query_err)) {
                            ?>
                            
                    <tr style="height: 110px;margin-top: 15px;">
                        <td><?php echo $row_err['id'];?></td>
                        <td><?php echo $row_err['idthanhvien'];?></td>
                        <td><?php echo $row_err['noidung'];?></td>
                        <td style="height: 100px;"><a href="../image/<?php echo $row_err['anh'];?>"><img src="../image/<?php echo $row_err['anh'];?>"></a></td>
                        <td><?php echo $row_err['thoigian'];?></td>
                        <td><a href="temp-quantri.php?delete=<?php echo $row_err['id'];?>">fixed</a></td>
                    </tr>
                                
                            <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
  

<script type="text/javascript">
    //alert("Nạp js thành công!!!");
        function openTab(cong_viec) {
            //alert("Đang gọi hàm open !!!");
            var i, tabcontent;

            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
            }

            document.getElementById(cong_viec).style.display = "block";
            document.getElementById('content_danhmuc').innerHTML=document.getElementById('c_'+cong_viec).innerHTML;
            //alert("kết thúc gọi hàm open !!!");
        } 
        
    // js of sub tab
        function openSub_Tab(cong_viec,cha) {
            //alert("Đang gọi hàm open !!!");
            var i, tabcontent;
            document.getElementById(cha).style.display="block";
            tabcontent = document.getElementsByClassName("content_subtab");
            for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
            }

            document.getElementById(cong_viec).style.display = "block";
            
            //alert("kết thúc gọi hàm open !!!");
        } 
        
        
        function close(content) {
            document.getElementByID(content).style.display = 'none';
        }
        
    var zoom = 0.6;
    function zoomout()
    {
       if(zoom <0) zoom =0;
       zoom = zoom - 0.1;
       var element = document.getElementById("frame");
       // This line does the trick for FireFox
       element.style.MozTransform = "scale(" + zoom + ")";
       // This line does the trick for IE
       element.style.zoom = "" + zoom;
    }
    function zoomin()
    {
       if(zoom >0.9) zoom = 0.9;
       zoom = zoom + 0.1;
       var element = document.getElementById("frame");
       // This line does the trick for FireFox
       element.style.MozTransform = "scale(" + zoom + ")";
       // This line does the trick for IE
       element.style.zoom = "" + zoom;
    }   
    
    <?php 
                            
                            if(isset($_GET['page'])) {
                            ?>
                           
                                openTab('qlsanpham');
                                openSub_Tab('grid-sp','content_ofTab_qlsp');
                            
                            <?php
                            
                        }
                            //include('./phantrang-qlsp.php');
                        ?>
</script>
	
</body>
</html>
<!--<div class="content_ofTab_qlnhanvien" id="content_ofTab_qlsp" style="display: none;">
                    <div class="content_subtab" id="danhsachsp">
                        <a href="./thanhvien/manager-employee.php" target="blank">Mở quản lý sp trong tab mới</a>
                        <iframe id="frame" src="./thanhvien/manager-employee.php"></iframe>
                        <form>
                            <input type="button" value="Zoom out" name="btn_zoomout" onclick="zoomout();"/>
                            <input type="button" value="Zoom in"  name="btn_zoomin"  onclick="zoomin();"/>
                        </form>
                    </div>
                    <div class="content_subtab" id="grid-sp">
                        <?php //include './sanpham/phantrang-qlsp.php';?>
                    </div>
   onmouseout="close('user')"                 
                </div>-->
<!--  
    <div class="qlnhanvien"  onclick="javascript:openSub_Tab('xephangnv','content_ofTab_qlnhanvien')">Xếp hạng nv <i class="fa fa-user-crown"></i></div>
                    <div class="qlnhanvien"  onclick="javascript:openSub_Tab('luongnv','content_ofTab_qlnhanvien')">Lương nv <i class="fa fa-universal-access"></i></div>-->