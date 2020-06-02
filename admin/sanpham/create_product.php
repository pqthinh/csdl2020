<?php

require_once '../../csdl/connectdb.php';
$table='products';
if(isset($_POST['save'])) {
    $idpro=$_POST['id'];
    $name=$_POST['name'];
    $brand=$_POST['brand'];
    $line= $_POST['idproductline'];
    $idinfo=$_POST['idinfo'];
    $operator=$_POST['operator'];
    $ram=$_POST['ram'];
    $chip=$_POST['chip'];
    $camera=$_POST['camera'];
    $battery=$_POST['battery'];
    $screen=$_POST['screen'];
    $img=$_FILES['image']['name'];
    $img = basename($img);
    $quantity=$_POST['quantity'];
    $buyprice=$_POST['buyprice'];
    $sellprice=$_POST['sellprice'];
    move_uploaded_file($_FILES['image']['tmp_name'], "../image/".$img);
    $sql="insert into $table (idproduct,nameproduct,idproductline,idinfo,brand,operator,ram,chip,camera,battery,screen,image,quantity,buyprice,sellprice) 
             values('$idpro','$name','$line','$idinfo','$brand','$operator','$ram','$chip','$camera','$battery','$screen','$img','$quantity','$buyprice','$sellprice')";

    if(mysqli_query($conn, $sql)) {
        header("location: manager-product.php");
        exit();
    } else {
        echo "Error creating product: " .$sql ."  ".mysqli_error($conn); 
    }
    mysqli_close($conn);
}
?>

<!Doctype html>
<html>
    <head>
        <title>Create a new product</title>
        <meta charset="utf8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h3>Creare a new Product</h3>
                    </div>
                    <p>Please fill on form and submit to add new record product in to database </p>
                    <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                          method="POST">
                        <div class="form-group">
                            <label>ID of Product </label>
                            <input type="text" name="id" value="A-Vsmart-Joy-34/64-1" 
                                   class="form-control" maxlength="50" required="">
                        </div>
                        <div class="form-group">
                            <label>Name of Product </label>
                            <input type="text" name="name" value="Vsmart Joy3" 
                                   class="form-control" maxlength="50" required="">
                        </div>
                        <div class="form-group">
                            <label>Product Line </label>
                            <input type="text" name="idproductline" value="sm-android" 
                                   class="form-control"  required="">
                        </div>
                        <div class="form-group">
                            <label>Brand of Product </label>
                            <input type="text" name="brand" value="Vsmart" 
                                   class="form-control" maxlength="100" required="">
                        </div>
                        <div class="form-group">
                            <label>ID product information  </label>
                            <input type="text" name="idinfo" value="A-Vsmart-Joy-34/64" 
                                   class="form-control" maxlength="50" required="">
                        </div>
                        <div class="form-group">
                            <label>Operator of product</label>
                            <input type="text" name="operator" value="Android 9.0"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Memory of product</label>
                            <input type="text" name="ram" value="4/64G"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Chip of product</label>
                            <input type="text" name="chip" value="Snapdragon 720G 8nm"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Information camera of product</label>
                            <input type="text" name="camera" value="Camera sau :16Mp Camera trươc : 5Mp"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Infor battery of product</label>
                            <input type="text" name="battery" value="5000mAp.h"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Information screen of product</label>
                            <input type="text" name="screen" value="5.9 inchs"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Image of product</label>
                            <input type="file" name="image" 
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Quantity of product</label>
                            <input type="text" name="quantity" value="1000"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Buy Price of product</label>
                            <input type="number" name="buyprice" value="2900000"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Sell price of product</label>
                            <input type="number" name="sellprice" value="3500000"
                                   class="form-control" required="">
                        </div>
                        <input type="submit" name="save" class="btn btn-primary">
                        <a href="manager-product.php" class="btn btn-default">Cancel</a>
                    </form>
                    
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    </body>
</html>
    