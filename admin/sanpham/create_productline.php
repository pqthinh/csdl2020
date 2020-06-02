
<!Doctype html>
<html>
    <head>
        <title>Create a new employee</title>
        <meta charset="utf8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h3>Create a new product line</h3>
                    </div>
                    <p>Please fill on form and submit to add new record employee in to database </p>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                          method="POST" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label>ID  </label>
                            <input type="text" name="idproductline" value="sm-android" 
                                   class="form-control"  required="">
                        </div>
                        <div class="form-group">
                            <label>Name of product line </label>
                            <input type="name" name="nameproductline" value="Smart phone + Android" 
                                   class="form-control"  required="">
                        </div>
                        <div class="form-group">
                            <label>Introduce</label>
                            <input type="text" name="intro" value=" " 
                                   class="form-control" maxlength="500" required="">
                        </div>
                        <div class="form-group">
                            <label>Image </label>
                            <input type="file" name="image"
                                   class="form-control" required="">
                        </div>
                        <input type="submit" name="save" class="btn btn-primary">
                        <a href="manager-productline.php" class="btn btn-default">Cancel</a>
                    </form>
                    <?php
                        require_once '../../csdl/connectdb.php';
                        $db='productline';
                        //echo basename($_FILES['image']['name']);
                        if(isset($_POST['save'])) {
                            $id= $_POST['idproductline'];
                            $name=$_POST['nameproductline'];
                            $intro=$_POST['intro'];
                            
                            $image = $_FILES['image']['name'];
                            $image = basename($image);
                            move_uploaded_file($_FILES['image']['tmp_name'], "../image/".$image);
                            
                            $sql= "insert into $db  (idproductline,nameproductline,intro,image)
                                values('$id','$name','$intro','$image')";
                            
                            if(mysqli_query($conn, $sql)) {
                                header('location: manager-productline.php');
                                exit();
                            } else {
                                echo "Error: ".$sql." ".mysqli_error($conn);
                            }
                            mysqli_close($conn);
                        }
                    ?>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    </body>
</html>
    