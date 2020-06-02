<!Doctype html>
<html>
    <head>
        <meta charset="utf8">
        <title>Manager product line </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" mx-auto>
                    <div class="page-header clearfix">
                        <h3 class="pull-left">Product lines</h3>
                        <a href="create_productline.php" class="btn btn-success pull-right">
                            Add new product line
                        </a>
                    </div>
                    <?php
                        require_once '../../csdl/connectdb.php';
                        $sql = " select * from productline where 1";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) >0) {
                    ?>
                    <table class="table table-bordered table-striped">
                        
                        <tr>
                            
                            <td>ID product line</td>
                            <td>Name product line's</td>
                            <td>Introduce</td>
                            <td>Image</td>
                            <td>Action</td>
                           
                        </tr>
                        <?php 
                                $i=0;
                                while ($row = mysqli_fetch_array($result)) {
            
                           ?>
                        <tr>
                            <td> <?php echo $row['idproductline'];?></td>
                            <td> <?php echo $row['nameproductline'];?></td>
                            <td> <?php echo $row['intro'];?></td>
                            <td> <?php echo "../image/".$row['image'];?></td>
                            <td>
                                <a href="update_productline.php?idproductline=<?php echo $row['idproductline']; ?>" title="Update record">
                                    <span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="show.php?idproductline=<?php echo $row['idproductline']; ?>" title="Update record">
                                    <span class="glyphicon glyphicon-eye-open"></span></a>
                            </td>
                        </tr>
                        <?php 
                            $i++;
                            }
                        ?>
                    </table>
                    <?php
                        }
                        else {
                            echo "No result found";
                        }
                       ?>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    </body>
</html>