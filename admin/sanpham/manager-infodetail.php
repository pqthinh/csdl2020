<?php

?>
<!Doctype html>
<html>
    <head>
        <meta charset="utf8">
        <title>Manager Product information details</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" mx-auto>
                    <div class="page-header clearfix">
                        <h3 class="pull-left">List information product</h3>
                        <a href="create_infordetails.php" class="btn btn-success pull-right">
                            Add 
                        </a>
                    </div>
                    <?php
                        require_once '../../csdl/connectdb.php';
                        $sql = " select * from infodetail where 1";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) >0) {
                    ?>
                    <table class="table table-bordered table-striped">
                        
                        <tr>
                            <td>ID</td>tor</td>
                            <td>Chip</td>
                            <td>Camera - front</td>
                            <td>Camera -behind</td>
                            <td>Bra
                            <td>Memory</td>
                            <td>Operand</td>
                            <td>Connector</td>
                            <td>Screen</td>
                            <td>Design</td>
                            <td>Battery</td>
                            <td>Utilities </td>
                            <td>More </td>
                            <td>image1</td>
                            <td>image2</td>
                            <td>image3 </td>
                            <td>Action</td>
                        </tr>
                        <?php 
                                $i=0;
                                while ($row = mysqli_fetch_array($result)) {
            
                           ?>
                        <tr>
                            <td> <?php echo $row['idinfo'];?></td>
                            <td> <?php echo $row['memory'];?></td>
                            <td> <?php echo $row['hedieuhanh'];?></td>
                            <td> <?php echo $row['chip'];?></td>
                            <td> <?php echo $row['cameratruoc'];?></td>
                            <td> <?php echo $row['camerasau'];?></td>
                            <td> <?php echo $row['thuonghieu']? $row['thuonghieu'] :"N/A";?></td>
                            <td> <?php echo $row['ketnoi']? $row['ketnoi']:"N/A";?></td>
                            <td> <?php echo $row['manhinh']? $row['manhinh']:"N/A";?></td>
                            <td> <?php echo $row['thietke']? $row['thietke']:"N/A";?></td>
                            <td> <?php echo $row['thongtinpin']? $row['thongtinpin']:"N/A";?></td>
                            <td> <?php echo $row['tienich']? $row['tienich']:"N/A";?></td>
                            <td> <?php echo $row['thongtinkhac']? $row['thongtinkhac']:"N/A";?></td>
                            <td> <?php echo $row['image1']? $row['image1']:"N/A";?></td>
                            <td> <?php echo $row['image2']? $row['image2']:"N/A";?></td>
                            <td> <?php echo $row['image3']? $row['image3']:"N/A";?></td>
                            <td>
                                <a href="update_infodetail.php?idinfo=<?php echo $row['idinfo']; ?>" title="Update record">
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