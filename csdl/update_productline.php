<?php
    require_once './connectdb.php';
    echo $_GET['idproductline']."<br>";
    if(isset($_POST['save'])) { 
        $sql =  "update productline set idproductline= '".$_POST['id']."',nameproductline='".$_POST['name'].
                "',intro='".$_POST['intro']."',image='" .$_POST['image']."' where idproductline= '".$_GET['idproductline']."'";
        mysqli_query($conn, $sql);
        
        
        header("location: manager-productline.php");
        exit();
    }
    $sql= "select *  from productline where idproductline ='".$_GET['idproductline']."'";
    $result = mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($result);
?>
<!Doctype html>
<html>
    <head>
        <title>Update product line</title>
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
                        <label>ID product line</label>
                        <input type="text" name="id" value="<?php echo $row['idproductline'];?>" class="form-control"
                               required="">
                        <label>Name product line</label>
                        <input type="text" name="name" value="<?php echo $row['nameproductline'];?>" class="form-control"
                               required="">
                        <label>Introduce</label>
                        <input type="text" name="intro" value="<?php echo $row['intro'];?>" class="form-control"
                               required="">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control"
                               required="">
                        
                        <input type="submit" name="save"  class="btn btn-primary">
                        
                        <a href="manager-productline.php" class="btn btn-default">
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