<?php 
    if($_SERVER["QUERY_STRING"]) {
        require_once '../csdl/connectdb.php';
        $hoadon=$_GET['update'];
        $sp= $_GET['sp'];
        $sql= "update hoadon set trangthai=1 where mahoadon= ".$hoadon." and idproduct=".$sp;
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header('location: ./user-profile.php');
    }
?>
<?php
include '../test-struct-file/header.php'; ?>
        <?php 
            
            
            require '../csdl/connectdb.php';
            
            if(isset($_POST['saveimage'])) {
                $image= $_FILES['image']['name'];
                $image = basename($image);
                move_uploaded_file($_FILES['image']['tmp_name'], '../image/'.$image);
                $sql= "update thanhvien set image='".$image."' where ten='".$_SESSION['ten']."'";
                mysqli_query($conn, $sql);
                echo "<script> alert('Thay đôi thành công' </script>";
                
            }
            if(isset($_POST['savethongtin'])) {
                $ten=$_POST['ten'];
                $day=$_POST['day'];
                //$diachi=$_POST['diachi'];
                $sdt=$_POST['sdt'];
                $email=$_POST['mail'];
                $sql= "update thanhvien set ten='".$ten."', ngaysinh='".$day."',email='".$email."',mobile='".$sdt."' where ten='".$_SESSION['ten']."'";
                mysqli_query($conn, $sql);
                echo "<script> alert('Thay đôi thành công' </script>";
                
            }
            $result= mysqli_query($conn, "select * from thanhvien where ten= '".$_SESSION['ten']."'");
            $row= mysqli_fetch_array($result);
            $pass= $row['password'];
            if(isset($_POST['savepass'])) {
                $old = $_POST['pass'];
                $new1=$_POST['pass1'];
                $new2=$_POST['pass2'];
                if($old != $row['password']) {
                    echo "<script> alert('Bạn nhập sai mật khẩu cũ'); </script>";
                }
                else if($new1!=$new2) {
                    echo "<script> alert('Bạn nhập mật khẩu không khớp'); </script>";
                }
                else if($new1==$old) {
                    echo "<script> alert('Không có sự thay đổi'); </script>";
                } else {
                    $query= "update thanhvien set password='".$new1."' where ten='".$_SESSION['ten']."'";
                    mysqli_query($conn,$query);
                    echo "<script> alert('Thay đôi thành công'); </script>";
                    
                }
            }
            
        ?>
        <div id="thay_anh" style="display: none;">
            <div class="thay_anh">
                <div onclick="javascript:thoat('thay_anh')" style="border-radius: 50%;background: #fff;width: 30px;text-align: center;height: 30px;">x</div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div style="background: url('../image/<?php 
                        if($row['image'] == '' ) echo "user2.png";
                        else echo $row['image'];
                    ?>') no-repeat;background-size: cover;width: 100%;height: 250px;">
                        <input type="file" name="image"/>
                    </div>
                    <input type="submit" name="saveimage"/>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="left">
                <div class="avatar">
                    <div onclick="javascript:thayanh('thay_anh')" style="background: url('../image/<?php 
                        if($row['image'] == '' ) echo "user2.png";
                        else echo $row['image'];
                    ?>');background-size: cover;width: 80%; height: 150px;background-position: 20px center;" alt="avatar of user [ten]" title="user[ten]" ></div>
                    
                    <script>
                        function thayanh(content) {
                            //document.getElementsByTagName('body')[0].style.visibility= 'hidden';
                            //var divo= document.getElementsByTagName('div');
                            //for(var i=0;i<divo.length;i++) 
                                //divo[i].style.visibility='hidden';
                            document.getElementById(content).style.visibility="visible";
                            document.getElementById(content).style.display='block';
                        }
                        function thoat(content) {
                            //document.getElementsByTagName('body')[0].style.background= '#fff';
                            document.getElementById(content).style.display='none';
                        }
                    </script>
                </div>
                
                <div class="l_content"  onclick="javascript:opentab('thongtin')">Thông tin</div>
                <div class="l_content"  onclick="javascript:opentab('lichsu')">Lịch sử mua hàng</div>
                <div class="l_content"  onclick="javascript:opentab('doimk')">Đổi mật khẩu </div>
            </div>
            <div class="right" id="right" >
                <div id="thongtin" class="r_content" style="//display: none;">
                    <div style="display: flex;">
                        <div class="thongtin_l">
                            <form action="" method="POST">
                                <span class="head_form"> Thông tin cá nhân </span>
                                
                                <label>Họ tên</label><br/>
                                <input type="text" name="ten" value="<?php echo $row['ten'];?>" style="pointer-events: none;border:1px solid yellow;"/><br/>
                                <label>Ngày sinh</label><br/>
                                <input type="date" name="day" value="<?php echo $row['ngaysinh']; ?>"/><br/>
<!--                                <label>Địa chỉ</label><br/>
                                <input type="text" name="diachi" value="Thái Bình"/><br/>-->
                                 <label>SĐT</label><br/>
                                <input type="text" name="sdt" value="<?php echo $row['mobile'];?>"/><br/>
                                <label>Email</label><br/>
                                <input type="text" name="mail" value="<?php echo $row['email'];?>"/><br/>

                                <input type="submit" name="savethongtin" class="save" value="Cập nhật thông tin"/><br/>
                            </form>
                        </div>
                        <div style="width: 20%;">
                            <div class="donhang" onclick="javascript:opentabdonhang('donhang')"> Đơn hàng hiện tại </div>
                            <div class="show_donhang" id='donhang' style="display: none; color: #57b846">
                                <div>[test]</div>
                                <div>[test]</div>
                                <div>[test]</div>
                            </div>
                            <script>
                                function opentabdonhang(content) {
                                    if(document.getElementById(content).style.display==='none')
                                        document.getElementById(content).style.display='block';
                                    else 
                                        document.getElementById(content).style.display='none';
                                }
                            </script>
                        </div>
                        
                    </div>
                    
                </div>
                <div id="lichsu" class="r_content" style="display: none;">
                    [test]
                    
                    <div style="overflow-x: auto;">
                        <table style="overflow-x: auto;margin-left: auto;margin-right: auto;">
                            <tr>
                                <td style="margin-right: 15px;">Tên sản phẩm</td>
                                <td style="margin-right: 15px;">Số lượng</td>
                                <td style="margin-right: 15px;">Ngày mua hàng</td>
                                <td style="margin-right: 15px;">Đã nhận hàng</td>
                            </tr>
                            <?php
                                require_once '../csdl/connectdb.php';
                                $query4= "select * from hoadon where idcustomer = (select id from customer where name= '".$_SESSION['ten']."')";
                                $result = mysqli_query($conn, $query4);
                                if(mysqli_num_rows($result)==0) echo '['.$_SESSION['ten'].' Chưa có dữ liệu mua hàng]';
                                else {
                                    while($row= mysqli_fetch_array($result)) {
                                        ?>
                            <tr style="height: 100px">
                                <td><?php echo $row['idproduct'];?></td>
                                <td><?php echo $row['soluong'];?></td>
                                <td><?php echo $row['ngayban'];?></td>
                                <td title="Đã nhận được hàng chưa ?"><?php if($row['trangthai'] !=1) echo '<a href="user-profile.php?update='.$row['mahoadon']."&sp='".$row['idproduct']."'".'"><img src="../image/checked.png" style="height: 30px;width:30px;"></a>';?></td>
                            </tr>
                                        <?php
                                    }
                                }
                            ?>
                        </table>
                    </div>
                    
                </div>
                <div id="doimk" class="r_content" style="display: none;">
                    <form action="" method="POST">
                        <span class="head_form">Đổi mật khẩu</span>
                        <span style="color: red; font-size: 14px;margin: auto;" id="errorpass"></span>
                        <label>Mật khẩu cũ </label><br>
                        <input type="password" name="pass" value="<?php echo $pass;?>"><br>

                        <label>Mật khẩu mới </label><br>
                        <input type="password" name="pass1" value=""><br>
                        
                        <label>Nhắc lại </label><br>
                        <input type="password" name="pass2" value=""><br>
                        
                        <input type="submit" name="savepass" class="save" value="Xác nhận">
                        
                    </form>
                </div>
            </div>
        </div>
        <script>
            function opentab(content) {
                var tab0=document.getElementsByClassName('r_content');
                for(var i=0;i<tab0.length;i++) {
                    tab0[i].style.display='none';
                }
                document.getElementById(content).style.display='block';
                
            }
        </script>
    
        
<?php include '../test-struct-file/footer.php';?>