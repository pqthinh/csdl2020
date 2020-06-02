<!Doctype html>
<html>
    <head>
        <meta charset="utf8">
        <title>Khuyến mãi</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" mx-auto>
                    <div class="page-header clearfix">
                        <h3 class="pull-left">Ds sản phẩm đang có khuyến mãi có trong csdl</h3>
                        <a href="create-spkhuyenmai.php" class="btn btn-success pull-right">
                            Thêm 1 sp khuyến mãi 
                        </a>
                    </div>
                    <?php
                        require_once '../../csdl/connectdb.php';
                            $sql = " select * from sanphamkhuyenmai where  date_add(ngay_batdau, interval songay_hethan day)>current_time;";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) >0) {
                            
                    ?>
                    <table class="table table-bordered table-striped">
                        
                        <tr>
                            <td>Mã sản phẩm</td>
                            <td>Giảm giá</td>
                            <td>Thanh lý(bool/giảm 50%)</td>
                            <td>Số ngày hết khuyến mãi</td>
                            <td>Ngày bắt đầu khuyến mãi</td>
                        </tr>
                        <?php 
                                $i=0;
                                while ($row = mysqli_fetch_array($result)) {
            
                           ?>
                        <tr>
                            <td id="product"> <?php echo $row['idproduct'];?></td>
                            <td> <?php echo $row['giamgia'];?></td>
                            <td> <?php echo $row['thanhly'];?></td>
                            <td> <?php echo $row['songay_hethan'];?></td>
                            <td> <?php echo $row['ngay_batdau'];?></td>
                        </tr>
                        <?php 
                            }
                        ?>
                    </table>
                    <?php
                        }
                        else {
                            echo "Không có sản phẩm nào đang có khuyến mãi";
                        }
                       ?>
                    
                    <?php
                        //require_once '../../csdl/connectdb.php';
                            $sql = " select * from sanphamkhuyenmai where   date_add(ngay_batdau, interval songay_hethan day)<=current_time;";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) >0) {
                            
                    ?>
                    <h3>Sản phẩm đã có khuyến mãi</h3>
                    <table class="table table-bordered table-striped">
                        
                        <tr>
                            <td>Mã sản phẩm</td>
                            <td>Giảm giá</td>
                            <td>Thanh lý(bool/giảm 50%)</td>
                            <td>Số ngày hết khuyến mãi</td>
                            <td>Ngày bắt đầu khuyến mãi</td>
                        </tr>
                        <?php 
                                $i=0;
                                while ($row = mysqli_fetch_array($result)) {
            
                           ?>
                        <tr>
                            <td id="product"> <?php echo $row['idproduct'];?></td>
                            <td> <?php echo $row['giamgia'];?></td>
                            <td> <?php echo $row['thanhly'];?></td>
                            <td> <?php echo $row['songay_hethan'];?></td>
                            <td> <?php echo $row['ngay_batdau'];?></td>
                        </tr>
                        <?php 
                            }
                        ?>
                    </table>
                    <?php
                        }
                        else {
                            echo "Không có sản phẩm đã có khuyến mãi";
                        }
                       ?>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    </body>
</html>