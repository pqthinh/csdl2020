<?php

?>
<!Doctype html>
<html>
    <head>
        <meta charset="utf8">
        <title>Manager Product</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
    </head>
    <body>
        <div class="container0">
            <div class="row">
                <div class="col-lg-12" mx-auto>
                    <div class="page-header clearfix">
                        <h3 class="pull-left">Product list</h3>
                        <a href="create_product.php" class="btn btn-success pull-right">
                            Add new product
                        </a>
                    </div>
                    <?php
                        require_once '../../csdl/connectdb.php';
                        $sql = " select * from products where 1";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) >0) {
                    ?>
                    <table class="table table-bordered table-striped">
                        
                        <tr>
                            <td>ID</td>
                            <td>Name product</td>
                            <td>Brand of product</td>
                            <td>ID info product</td>
                            <td>Product line</td>
                            <td>Memory</td>
                            <td>Chip</td>
                            <td>Operator</td>
                            <td>Camera</td>
                            <td>Screen</td>
                            <td>Battery</td>
                            <td>Image of product</td>
                            <td>Quantity</td>
                            <td>Buy Price product</td>
                            <td>Sell price product</td>
                            <td>Action</td>
                        </tr>
                        <?php 
                                $i=0;
                                while ($row = mysqli_fetch_array($result)) {
            
                           ?>
                        <tr>
                            <td> <?php echo $row['idproduct'];?></td>
                            <td> <?php echo $row['nameproduct'];?></td>
                            <td> <?php echo $row['brand'];?></td>
                            <td> <?php echo $row['idinfo'];?></td>
                            <td> <?php echo $row['idproductline'];?></td>
                            <td> <?php echo $row['ram'];?></td>
                            <td> <?php echo $row['chip']? $row['chip'] :"N/A";?></td>
                            <td> <?php echo $row['operator']? $row['operator']:"N/A";?></td>
                            <td> <?php echo $row['camera']? $row['camera']:"N/A";?></td>
                            <td> <?php echo $row['screen']? $row['screen']:"N/A";?></td>
                            <td> <?php echo $row['battery']? $row['battery']:"N/A";?></td>
                            <td> <?php echo $row['image']? "image/".$row['image']:"N/A";?></td>
                            <td> <?php echo $row['quantity']? $row['quantity']:"N/A";?></td>
                            <td> <?php echo $row['buyprice']? $row['buyprice']:"N/A";?></td>
                            <td> <?php echo $row['sellprice']? $row['sellprice']:"N/A";?></td>
                            <td>
                                <a href="update_product.php?idproduct=<?php echo $row['idproduct']; ?>" title="Update record">
                                    <span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="show-product.php?id=<?php echo $row['idproduct']; ?>" title="Update record">
                                    <span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="delete_product.php?idproduct=<?php echo $row['idproduct']; ?>" title="Delete record">
                                    <i class="material-icons">
                                    <span class="glyphicon glyphicon-trash"></span></a>
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
