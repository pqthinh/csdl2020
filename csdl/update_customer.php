<?php
//UPDATE `user` SET `name` = 'Pham quang thinh2' WHERE `user`.`id` = 6; 
    require_once './connectdb.php';
    if(count($_POST)>0) {
        $sql =  "update customer set name= '".$_POST['name']."',birth='".$_POST['birth'].
                "',place='".$_POST['place']."',mobile='".$_POST['mobile']."',email='".
                $_POST['email']."',idemployee='".$_POST['idemployee']."' where id= ".$_POST['id'];
        mysqli_query($conn, $sql);
        header("location: manager-customer.php");
        exit();
    }
    $sql= "select *  from customer where id=".$_GET['id'];
    $result = mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($result);
 ?>
<!Doctype html>
<html>
    <head>
        <title>Update employee</title>
        <meta charset="utf8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h3>Update info of employee</h3>
                        <p>Please edit and submit info of employee</p>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>"
                          method="POST">
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo $row['name'];?>" class="form-control"
                               maxlength="50" required="">
                        <label>Birth</label>
                        <input type="date" name="birth" value="<?php echo $row['birth'];?>" class="form-control"
                               required="">
                        <label>Place</label>
                        <input type="text" name="place" value="<?php echo $row['place'];?>" class="form-control"
                               required="">
                        <label>Mobile</label>
                        <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" class="form-control">
                        <label>Email</label>
                        <input type="text" name="email" value="<?php echo $row['email'];?>" class="form-control">
                        <label>ID employee</label>
                        <input type="text" name="idemployee" value="<?php echo $row['idemployee'];?>" class="form-control">
                        
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        <input type="submit" name="save"  class="btn btn-primary">
                        <a href="manager-customer.php" class="btn btn-default">
                            Cancel
                        </a>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    </body>
</html>