<?php
$lifetime=60;
session_set_cookie_params($lifetime);
session_start();
if(isset($_SESSION['ten'])&& $_SESSION!= null) {
    session_unset();
    session_destroy(); 
    echo 'Đăng xuất thành công';
    header('location: trangchung.php');
}
?>
