<?php
    require_once '../csdl/connectdb.php';
    
    if(isset($_POST['save'])) {
        $table = 'image';
        $sp=$_POST['id_product'];
        $cn =$_POST['chucnang'];
        $ten = $_FILES['ten_anh']['name'];
        //$ten =$_POST['ten_anh'];
        echo $ten;
        $ten= basename($ten);
        echo $ten;
        if(move_uploaded_file($_FILES['ten_anh']['tmp_name'], "../image/".$ten))  {
        
            $sql = "insert into $table (ten_anh,id_product,chucnang) values"
                . "( '$ten','$sp','$cn')";
            echo $sql;
            if(mysqli_query($conn, $sql)) {
                header("location: ./sanpham/manager-image.php");
                exit();
            } else {
                echo "Error : " .$sql." ".mysqli_error($conn);
            }
        } else {
            echo "Error upload file";
        }
        mysqli_close($conn);
    }
    ?>

<!Doctype html>
<html>
    <head>
        <title>ql ảnh trên hệ thống</title>
        <meta charset="utf8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h3>Bắt đầu tải ảnh lên csdl</h3>
                    </div>
                    
                    <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                          method="POST">
                           
                        <div class="form-group">
                            <label>Tên ảnh </label>
                            <input type="file" name="ten_anh"
                                   class="form-control"  required="">
                        </div>
                        
                        <div class="form-group">
                            <label>Sản phẩm   </label>
                            <input type="text" name="id_product"  
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Chức năng của ảnh </label>
                            <input type="text" name="chucnang" 
                                   class="form-control" required="">
                        </div>
                        
                        
                        <input type="submit" name="save" class="btn btn-primary">
                        <a href="./sanpham/manager-image.php" class="btn btn-default">Cancel</a>
                    </form>
                    
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    </body>
</html>
    
    </head>
</html>