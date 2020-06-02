<?php

?>
<!Doctype html>
<html>
    <head>
        <meta charset="utf8">
        <title>Manager order </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" mx-auto>
                    <div class="page-header clearfix">
                        <h3 class="pull-left">Bill list</h3>
                        <a href="create-bill.php" class="btn btn-success pull-right">
                            Add new bill
                        </a>
                    </div>
                    <?php
                        require_once '../../csdl/connectdb.php';
                        $sql = " select * from hoadon where 1";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) >0) {
                    ?>
                    <table class="table table-bordered table-striped">
                        
                        <tr>
                            <td>ID</td>
                            <td>ID product</td>
                            <td>ID customer</td>
                            <td>Date</td>
                            <td>Quantity</td>
                            <td>State</td>
                            <td>Action</td>
                           
                        </tr>
                        <?php 
                                $i=0;
                                while ($row = mysqli_fetch_array($result)) {
            
                           ?>
                        <tr>
                            <td> <?php echo $row['mahoadon'];?></td>
                            <td> <?php echo $row['idproduct'];?></td>
                            <td> <?php echo $row['idcustomer'];?></td>
                            <td> <?php echo $row['ngayban'];?></td>
                            <td> <?php echo $row['soluong'];?></td>
                            <td> <?php echo $row['trangthai']? $row['trangthai']:"N/A";?></td>
                            <td>
                                <a href="update_bill.php?mahoadon=<?php echo $row['mahoadon']; ?>" title="Update record">
                                    <span class="glyphicon glyphicon-pencil"></span></a>
                                
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