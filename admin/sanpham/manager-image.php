<!Doctype html>
<html>
    <head>
        <meta charset="utf8">
        <title>Ảnh </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" mx-auto>
                    <div class="page-header clearfix">
                        <h3 class="pull-left">Ds ảnh có trong csdl</h3>
                        <a href="upload-image.php" class="btn btn-success pull-right">
                            Tải thêm ảnh lên csdl
                        </a>
                    </div>
                    <?php
                        require_once '../../csdl/connectdb.php';
                        $sql = " select * from image where 1";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) >0) {
                    ?>
                    <table class="table table-bordered table-striped">
                        
                        <tr>
                            <td>ID</td>
                            <td>Tên ảnh</td>
                            <td>Mã sp</td>
                            <td>Chức năng</td>
                            
                        </tr>
                        <?php 
                                $i=0;
                                while ($row = mysqli_fetch_array($result)) {
            
                           ?>
                        <tr>
                            <td> <?php echo $row['id_image'];?></td>
                            <td> <?php echo $row['ten_anh'];?></td>
                            <td> <?php echo $row['id_product'];?></td>
                            <td> <?php echo $row['chucnang'];?></td>
                        </tr>
                        <?php 
                            $i++;
                            }
                        ?>
                    </table>
                    <?php
                        }
                        else {
                            echo "Chưa có ảnh nào trong csdl";
                        }
                       ?>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    </body>
</html>