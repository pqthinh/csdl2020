<?php
    require_once '../../csdl/connectdb.php';
    
    if(isset($_POST['save'])) {
        $table = 'sanphamkhuyenmai';
        $sp=$_POST['idproduct'];
        $giam=$_POST['giamgia'];
        $ngay=$_POST['songay_hethan'];
        $start= date("Y/m/d h:m:s");
        $sql = "insert into $table (idproduct,giamgia,songay_hethan,ngay_batdau) values"
                . "( '$sp','$giam','$ngay','$start')";
        if(mysqli_query($conn, $sql)) {
            header("location: manager-spkhuyenmai.php");
            exit();
        } else {
            echo "Error : " .$sql." ".mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    ?>

<!Doctype html>
<html>
    <head>
        <title>sp khuyến mãi</title>
        <meta charset="utf8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h3>Thêm 1 sp vào ds khuyễn mãi</h3>
                    </div>
                    
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                          method="POST">
                        <div class="form-group">
                            <label>Mã sp </label>
                            <input type="text" name="idproduct"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Số tiền được giảm </label>
                            <input type="text" name="giamgia" 
                                   class="form-control"  required="">
                        </div>
                        
                        <div class="form-group">
                            <label>Số ngày hết hạn km </label>
                            <input type="number" name="songay_hethan" value="7" 
                                   class="form-control" required="">
                        </div>
                        
                        
                        
                        <input type="submit" name="save" class="btn btn-primary">
                        <a href="manager-spkhuyenmai.php" class="btn btn-default">Cancel</a>
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