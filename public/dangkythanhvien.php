<!DOCTYPE html>
<html>
<title>signup</title>
<link rel="icon" type="image/ico" href="../image/icons8-admin-settings-male-50.png" />
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/css-temp-slide.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600&amp;display=swap" rel="stylesheet">
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
            <form action="dangkythanhvien.php" method="POST">
          <span>Đăng ký thành viên.</span>
          <span style="color: red; font-size: 14px;margin: auto;" id="error"></span>
          <label>Họ tên</label><br>
          <input type="text" name="ten"><br>
          <label >Ngày sinh</label><br>
          <input id="date" type="date" name="ngaysinh"><br>
          <label>Email</label><br>
          <input type="email" name="email"><br>
          <label>SĐT</label><br>
          <input type="text" name="sdt"><br>
          <label>Mật khẩu</label><br>
          <input type="password" name="pass"><br>
          <label>Nhập lại mật khẩu</label><br>
          <input type="password" name="re_pass"><br>
          <input type="submit" name="save" class="save" >
          <div class="dangnhap">Vào trang<a href="dangnhap.php"> &nbsp&nbsp&nbsp Đăng nhập   &nbsp&nbsp<i class="fa fa-long-arrow-right"></i></a>
          </div>
        </form>
            <?php
    require_once '../csdl/connectdb.php';
    
    if(isset($_POST['save'])) {
        $name=$_POST['ten'];
        $birth=$_POST['ngaysinh'];
        $email=$_POST['email'];
        $mobile=$_POST['sdt'];
        $pass=$_POST['pass'];
        $re_pass=$_POST['re_pass'];
        if($name=="" || $birth=="" ||$email=="" || $mobile=="" || $pass=="" || $re_pass=="") { ?>
            <script>
                document.getElementById("error").innerHTML= "Bạn phải điền đủ thông tin";
            </script>;
        <?php }
        else if($pass!=$re_pass) {
            ?>
            <script>
                document.getElementById("error").innerHTML= "Bạn đã nhập không khớp mật khẩu :(";
            </script>
        <?php }
            //echo '';
        
        else {
            $query = "select * from thanhvien where email= '".$email."' or mobile='".$mobile."'";
            $sql = mysqli_query($conn, $query);
            if(mysqli_num_rows($sql)>0) {
                echo '';
                 ?>
                <script>
                    document.getElementById("error").innerHTML= "Email hoặc số điện thoại đã được sử dụng rồi :|";
                </script>
            <?php
            } else if(mysqli_num_rows(mysqli_query($conn, "select * from thanhvien where ten='".$name."'"))>0) {
                ?><script>
                    document.getElementById("error").innerHTML= "Tên này đã có trên hệ thống ";
                </script><?php
            } else {
                $query="insert into thanhvien (ten,ngaysinh,email,mobile,password) "
                        . "values('$name','$birth','$email','$mobile','$pass')";
                mysqli_query($conn, $query);
                echo '';
                ?>
                <script>
                    alert("Bạn đã đang ký thành công <br> Cảm ơn đã ghé test btl của mình");
                </script>
            <?php
                header('location: ../index.php');
            }
            
        }
    }
?>
  </div>
</div>
</div>
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
    