<?php

?>
<!Doctype html>
<html>
    <head>
        <meta charset="utf8">
        <title>Manager Customer</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" mx-auto>
                    <div class="page-header clearfix">
                        <h3 class="pull-left">Danh sách khách hàng</h3>
                        <a href="create_customer.php" class="btn btn-success pull-right">
                            Thêm 1 khách hàng
                        </a>
                    </div>
                    <?php
                        require_once '../../csdl/connectdb.php';
                        $sql = " select * from customer where 1";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) >0) {
                    ?>
                    <table class="table table-bordered table-striped">
                        
                        <tr>
                            <td>ID Customer</td>
                            <td>Name</td>
                            <td>Birth</td>
                            <td>Place</td>
                            <td>Mobile</td>
                            <td>Email</td>
                            <td>ID Employee</td>
                            <td>Action</td>
                           
                        </tr>
                        <?php 
                                $i=0;
                                while ($row = mysqli_fetch_array($result)) {
            
                           ?>
                        <tr>
                            <td> <?php echo $row['id'];?></td>
                            <td> <?php echo $row['name'];?></td>
                            <td> <?php echo $row['birth']? $row['birth'] :"N/A";?></td>
                            <td> <?php echo $row['place']? $row['place']:"N/A";?></td>
                            <td> <?php echo $row['mobile']? $row['mobile']:"N/A";?></td>
                            <td> <?php echo $row['email']? $row['email']:"N/A";?></td>
                            <td> <?php echo $row['idemployee']? $row['idemployee']:"N/A";?></td>
                            <td>
                                <a href="update_customer.php?id=<?php echo $row['id']; ?>" title="Update record">
                                    <span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="delete_customer.php?id=<?php echo $row['id']; ?>" title="Delete record">
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