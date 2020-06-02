<?php
    require_once '../../csdl/connectdb.php';
    
    if(isset($_POST['save'])) {
        $table = 'customer';
        $name=$_POST['name'];
        $birth=$_POST['birth'];
        $place=$_POST['place'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $employee=$_POST['idemployee'];

        $sql = "insert into $table (name,birth,place,mobile,email,idemployee) values"
                . "( '$name','$birth','$place','$mobile','$email','$employee')";
        if(mysqli_query($conn, $sql)) {
            header("location: manager-customer.php");
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
        <title>Create a new customer</title>
        <meta charset="utf8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h3>Create a new Customer</h3>
                    </div>
                    <p>Please fill on form and submit to add new record customer in to database </p>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                          method="POST">
                        <div class="form-group">
                            <label>Name of Customer </label>
                            <input type="text" name="name" value="Pham Van A" 
                                   class="form-control" maxlength="50" required="">
                        </div>
                        <div class="form-group">
                            <label>Birthday of Customer </label>
                            <input type="date" name="birth" value="2000/20/8" 
                                   class="form-control"  required="">
                        </div>
                        <div class="form-group">
                            <label>Place of Customer </label>
                            <input type="text" name="place" value="Thai Thuy -Thai Binh" 
                                   class="form-control" maxlength="100" required="">
                        </div>
                        <div class="form-group">
                            <label>Mobile of Customer </label>
                            <input type="text" name="mobile" value="022222222" 
                                   class="form-control" maxlength="11" required="">
                        </div>
                        <div class="form-group">
                            <label>Email of Customer </label>
                            <input type="text" name="email" value="PhamVanA@gmail.com" 
                                   class="form-control" maxlength="50" required="">
                        </div>
                        <!--
                        <div class="form-group">
                            <label>Cart of Customer </label>
                            <input type="text" name="cart" value="" 
                                   class="form-control" maxlength="50" required="">
                        </div>
                        -->
                        <div class="form-group">
                            <label>Employee </label>
                            <input type="text" name="idemployee" value="1" 
                                   class="form-control" required="">
                        </div>
                        
                        <input type="submit" name="save" class="btn btn-primary">
                        <a href="manager-customer.php" class="btn btn-default">Cancel</a>
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