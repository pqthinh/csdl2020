<?php
//UPDATE `user` SET `name` = 'Pham quang thinh2' WHERE `user`.`id` = 6; 
    require_once '../../csdl/connectdb.php';
    if(count($_POST)>0) {
        $sql =  "update hoadon set soluong= '".$_POST['soluong']."',trangthai='".$_POST['trangthai'].
                "',idproduct='".$_POST['idproduct'] ."' where mahoadon= ".$_POST['mahoadon'];
        mysqli_query($conn, $sql);
        header("location: manager-bill.php");
        exit();
    }
    $sql= "select *  from hoadon where mahoadon =".$_GET['mahoadon'];
    $result = mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($result);
 ?>
<!Doctype html>
<html>
    <head>
        <title>Update bill</title>
        <meta charset="utf8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h3>Update info of bill</h3>
                        <p>Please edit and submit info of bill</p>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>"
                          method="POST">
                        <label>ID product</label>
                        <input type="text" name="idproduct" value="<?php echo $row['idproduct'];?>" class="form-control"
                               required="">
                        <label>Quantity</label>
                        <input type="text" name="soluong" value="<?php echo $row['soluong'];?>" class="form-control"
                               required="">
                        <label>State</label>
                        <input type="number" name="trangthai" value="<?php echo $row['trangthai'];?>" class="form-control"
                               required="">
                        
                        <input type="hidden" name="mahoadon" value="<?php echo $row['mahoadon'];?>">
                        <input type="submit" name="save"  class="btn btn-primary">
                        <a href="manager-bill.php" class="btn btn-default">
                            Cancel
                        </a>
                    </form>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    </body>
</html>