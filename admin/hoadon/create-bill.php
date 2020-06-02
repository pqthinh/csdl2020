<?php
    require_once '../../csdl/connectdb.php';
    
    if(isset($_POST['save'])) {
        $table = 'hoadon';
        $customer=$_POST['idcustomer'];
        $product=$_POST['idproduct'];
        
        $quantity=$_POST['soluong'];
        $state=$_POST['trangthai'];

        $sql = "insert into $table (idcustomer,idproduct,ngayban,soluong,trangthai) values"
                . "( '$customer','$product','CURRENT_TIMESTAMP','$quantity','$state')";
        if(mysqli_query($conn, $sql)) {
            header("location: manager-bill.php");
            exit();
        } else {
            echo "Error : " .$sql." ".mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    ?>

<!Doctype html>
<html>
    <head>
        <title>Create a new bill</title>
        <meta charset="utf8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h3>Create a new bill</h3>
                    </div>
                    <p>Please fill on form and submit to add new record bill in to database </p>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                          method="POST">
                        <div class="form-group">
                            <label>ID of customer </label>
                            <input type="text" name="idcustomer" value="1" 
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>ID of product </label>
                            <input type="text" name="idproduct" value="A-Vsmart-Joy-34/64" 
                                   class="form-control"  required="">
                        </div>
                        
                        <div class="form-group">
                            <label>Quantity  </label>
                            <input type="number" name="soluong" value="2" 
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>State of bill </label>
                            <input type="number" name="trangthai" value="0" 
                                   class="form-control" required="">
                        </div>
                        
                        
                        <input type="submit" name="save" class="btn btn-primary">
                        <a href="manager-bill.php" class="btn btn-default">Cancel</a>
                    </form>
                    
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    </body>
</html>
    
    </head>
</html>