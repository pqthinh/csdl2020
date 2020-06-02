
<!DOCTYPE html>
<html>
    <title>login</title>
    <link rel="icon" type="image/ico" href="../image/icons8-admin-settings-male-50.png" />
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/css-temp-slide.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600&amp;display=swap" rel="stylesheet">
    <style>
        .huongdandn {
            cursor: pointer;
            width: 200px;
            position: absolute;
            bottom: 50px;
            left: 40px;
            background: #333;
            color: #fff;
            padding: 5px;
            line-height: 30px;
            border-bottom: 1px solid #e0e0e0;
        }
        ul , li {
            margin-left: 10px;
            list-style-type: none;
        }
    </style>

</head>
<body>

<div class="container" >
  <div class="Slide" style="width:60%;">
    <div class="mySlides" ></div>
    <div class="mySlides" ></div>
    <div class="mySlides" ></div>
    <div class="mySlides" ></div>
  </div>
  
  	<div class="signup" style="width:38%;margin:auto;">
      	
        <div class="box">
            
            <form action="dangnhap.php" method="POST">
          <span>Đăng nhập.</span>
          <span style="color: red; font-size: 14px;margin: auto;" id="error"></span>
          <label>Email hoặc số điện thoại </label><br>
          <input type="text" name="taikhoan" value="<?php if(isset($_COOKIE["login"])) { echo $_COOKIE["login"]; } ?>"><br>
          
          <label>Mật khẩu</label><br>
          <input type="password" name="pass" value="<?php if(isset($_COOKIE["login"])) { ?> checked <?php } ?>"><br>
          <label> Nhớ mật khẩu</label>
          <input type="checkbox" id="remember-pass" name="remember">
          <br>
          <input type="submit" name="thanhvien" class="save" value="DN thành viên">
          <br>
          <input type="submit" name="quantri" class="save" value="DN quản trị">

          <div class="dangnhap-khach">Vào trang<a href="trangchung.php"> &nbsp&nbsp với tư cách khách   &nbsp&nbsp<i class="fa fa-long-arrow-right"></i></a>
          </div>
          <div class="dangky">Vào trang<a href="./dangkythanhvien.php"> &nbsp&nbsp Đăng ký thành viên   &nbsp&nbsp<i class="fa fa-long-arrow-right"></i></a>
          </div>
        </form>
            
  </div>
</div>
    <div class="huongdandn">
        <div onclick="showHuongdan('huongdandn')">Hướng dẫn đăng nhập</div>
        <div id="huongdandn" style="display: none;">
            <div onclick="showHuongdan('tv')">Đăng nhập tv </div>
            <ul id="tv" style="display: none;">
                <li>Tài khoản: pqthinh0@gmail.com</li>
                <li>Mật khẩu: 123</li>
            </ul>
            <div onclick="showHuongdan('admin')">Đăng nhập admin </div>
            <ul id="admin" style="display: none;">
                <li>Tài khoản: admin</li>
                <li>Mật khẩu: admin</li>
            </ul>
        </div>
    </div>
    <script>
        function showHuongdan(id) {
            var state= document.getElementById(id);
            state.style.background='#fff';
            state.style.color='#333';
            if(state.style.display=='block') 
                state.style.display='none';
            else state.style.display='block';
        }
    </script>
</div>
    <?php
    session_start();
    require_once '../csdl/connectdb.php';
    if(isset($_POST['thanhvien'])) {
        $name=$_POST['taikhoan'];
        $pass=$_POST['pass'];
        $name=  strip_tags($name);
        $name= addslashes($name);
        $pass= strip_tags($pass);
        $pass= addslashes($pass);
        //echo '<script> alert("'.$_POST['remember'].'"));'.'</script>';
        sleep(5);
        if($name=="" || $pass=="") {?>
            <script>
                document.getElementById("error").innerHTML= "Bạn phải điền đủ thông tin";
            </script>;
        <?php
        } else {
            $query="select * from thanhvien where (email='$name' or mobile='$name') and (password ='$pass'); ";
            $sql=mysqli_query($conn, $query);
            $row= mysqli_fetch_array($sql);
            if(mysqli_num_rows($sql)==0) { ?>
                <script>
                    document.getElementById("error").innerHTML= "Sai thông tin đăng nhập";
                </script>;
            <?php
            } else {
                $_SESSION['id']=$row['id'];
                $_SESSION['ten']=$row['ten'];
                ?>
                <script> 
                    alert("<?php echo $_SESSION['ten']; ?> Đăng nhập thành công ");
                </script>
                <?php 
                sleep(1);
                header('location: ../index.php');
            }
        
        }
    } else if(isset($_POST['quantri'])) {
        $name=$_POST['taikhoan'];
        $pass=$_POST['pass'];
        $name=  strip_tags($name);
        $name= addslashes($name);
        $pass= strip_tags($pass);
        $pass= addslashes($pass);
        if($name=="" || $pass=="") { ?>
            
            <script>
                document.getElementById("error").innerHTML= "Bạn phải điền đủ thông tin";
            </script>;
        <?php
        } else {
            $query="select * from admin where ten='$name' and pass ='$pass'; ";
            $sql=mysqli_query($conn, $query);
            $row= mysqli_fetch_array($sql);
            if(mysqli_num_rows($sql)==0) { ?>
                <script language="javascript">
                    document.getElementById("error").innerHTML= "Bạn bị điền sai tên email/sdt hoặc mật khẩu";
                </script>
                <?php
            } else {
                $_SESSION['id']=$row['id'];
                $_SESSION['ten']=$row['ten']; 
                
                echo "<script >"."alert('Đăng nhập thành công với tài quyền admin');"."</script>";
                header('location: ../admin/temp-quantri.php');
            }
        
        }
    }

 ?>
<script>
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

</body>
</html>

