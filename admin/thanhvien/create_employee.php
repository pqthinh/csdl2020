<?php
    require_once '../../csdl/connectdb.php';
    $db='employee';
    if(isset($_POST['save'])) {
        $name= $_POST['name-employee'];
        $birth=$_POST['birth-employee'];
        $place=$_POST['place-employee'];
        $mobile=$_POST['mobile-employee'];
        $email=$_POST['email-employee'];
        $pass='';
        $image=$_POST['image-employee'];
        $sql= "insert into $db  (name,birthday,place,mobile,email,image)
            values('$name','$birth','$place','$mobile','$email','$image')";
        if(mysqli_query($conn, $sql)) {
            header('location: manager-employee.php');
            exit();
        } else {
            echo "Error: ".$sql." ".mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>
<!Doctype html>
<html>
    <head>
        <title>Create a new employee</title>
        <meta charset="utf8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
        <script src="../btlcsdl-v1-php-menu/bootstrap3/js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h3>Creare a new Employee</h3>
                    </div>
                    <p>Please fill on form and submit to add new record employee in to database </p>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                          method="POST">
                        <div class="form-group">
                            <label>Name of Employee </label>
                            <input type="text" name="name-employee" value="Pham Van A" 
                                   class="form-control" maxlength="50" required="">
                        </div>
                        <div class="form-group">
                            <label>Birthday of Employee </label>
                            <input type="date" name="birth-employee" value="2000/20/8" 
                                   class="form-control"  required="">
                        </div>
                        <div class="form-group">
                            <label>Place of Employee </label>
                            <input type="text" name="place-employee" value="Thai Thuy -Thai Binh" 
                                   class="form-control" maxlength="100" required="">
                        </div>
                        <div class="form-group">
                            <label>Mobile of Employee </label>
                            <input type="text" name="mobile-employee" value="022222222" 
                                   class="form-control" maxlength="11" required="">
                        </div>
                        <div class="form-group">
                            <label>Email of Employee </label>
                            <input type="text" name="email-employee" value="PhamVanA@gmail.com" 
                                   class="form-control" maxlength="50" required="">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image-employee" 
                                   class="form-control" required="">
                        </div>
                        <input type="submit" name="save" class="btn btn-primary">
                        <a href="manager-employee.php" class="btn btn-default">Cancel</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>
    