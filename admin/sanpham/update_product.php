<?php
//UPDATE `user` SET `name` = 'Pham quang thinh2' WHERE `user`.`id` = 6; 
    require_once '../../csdl/connectdb.php';
    $img='';
    if(count($_POST)>0) {
        $img=$_FILES['image']['name'];
        if($img) {
            $img = basename($img);
            move_uploaded_file($_FILES['image']['tmp_name'], "../image/".$img);
        } else if ($img==null) $img = $image;
        $sql =  "update products set image= '"
                .$img."',ram= '".$_POST['ram']."',chip= '".$_POST['chip'].
                "',camera= '".$_POST['camera']."',screen= '".$_POST['screen'].
                "',quantity= '".$_POST['quantity']."',buyprice= '".$_POST['buyprice'].
                "',sellprice= '".$_POST['sellprice']."',brand= '".$_POST['brand']."',operator= '".$_POST['operator'].
                 "',idproductline= '".$_POST['idproductline'].
                "' where idproduct= '".$_POST['idproduct']."'";
        mysqli_query($conn, $sql);
        header("location: manager-product.php");
        exit();
    }
    $sql= "select *  from products where idproduct= '".$_GET['idproduct']."'";
    $result = mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($result);
    $image = $row['image'];
 ?>
<!Doctype html>
<html>
    <head>
        <title>Update a product</title>
        <meta charset="utf8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h3>Update info of product</h3>
                        <p>Please edit and submit info of product</p>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>"
                          method="POST" enctype="multipart/form-data">
                        <label>Brand of product </label>
                        <input type="text" name="brand" value="<?php echo $row['brand'];?>" class="form-control">
                        <label>product line of product </label>
                        <input type="text" name="idproductline" value="<?php echo $row['idproductline'];?>" class="form-control">
                        <label>Memory of product</label>
                        <input type="text" name="ram" value="<?php echo $row['ram'];?>" class="form-control"
                               maxlength="50" required="">
                        <label>Chip of product</label>
                        <input type="text" name="chip" value="<?php echo $row['chip'];?>" class="form-control"
                               required="">
                        <label>Operator of product</label>
                        <input type="text" name="operator" value="<?php echo $row['operator'];?>" class="form-control"
                               required="">
                        
                        <label>Screen</label>
                        <input type="text" name="screen" value="<?php echo $row['screen'];?>" required="" class="form-control"/>
                        <label>Camera </label>
                        <input type="text" name="camera" value="<?php echo $row['camera'];?>" class="form-control">
                        <label>Image</label>
                        <input type="file" name="image" style=" width: 200px;height: 250px;box-sizing: border-box;color: #fff;background: url('http://localhost/csdl-phpv3/image/<?php echo $row['image']; if(isset($_POST['save'])) { echo basename($_FILES['image']['name']);}  //if(is_uploaded_file($_FILES['image']['tmp_name'])) { echo readfile($_FILES['image']['tmp_name']);}  //else echo $row['image']; ?>')  no-repeat;background-size: contain;" class="form-control" >
<!--                        <input type="file" name="image" style=" width: 200px;height: 250px;box-sizing: border-box;color: #fff;background: url('http://localhost/csdl-phpv3/image/<?php //if(!is_uploaded_file($_FILES['image']['tmp_name'])) { echo basename($_FILES['image']['tmp_name']);}  else echo basename($_FILES['image']['name']); ?>')  no-repeat;background-size: contain;" class="form-control" >
                        <input type="file" name="image" style=" width: 200px;height: 250px;box-sizing: border-box;color: #fff;background: url('http://localhost/csdl-phpv3/image/<?php //echo basename($_FILES['image']['name']); ?>')  no-repeat;background-size: contain;" class="form-control" >-->
                      
                        <label>Buy price</label>
                        <input type="number" name="buyprice" value="<?php echo $row['buyprice'];?>" class="form-control">
                        <label>Sell price </label>
                        <input type="number" name="sellprice" value="<?php echo $row['sellprice'];?>" class="form-control">
                        <label>Quantity</label>
                        <input type="number" name="quantity" value="<?php echo $row['quantity'];?>" class="form-control">
                        
                        <input type="hidden" name="idproduct" value="<?php echo $row['idproduct'];?>">
                        <input type="submit" name="save"  class="btn btn-primary">
                        <a href="manager-product.php" class="btn btn-default">
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