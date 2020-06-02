<?php
//UPDATE `user` SET `name` = 'Pham quang thinh2' WHERE `user`.`id` = 6; 
    require_once '../../csdl/connectdb.php';
    
    $data=$_GET['idinfo'];
    
    if(count($_POST)>0) {
        
    
        $sql =  "update infodetail set memory= '"
                .$_POST['memory']."',hedieuhanh= '".$_POST['hedieuhanh']."',chip= '".$_POST['chip'].
                "',cameratruoc= '".$_POST['cameratruoc']."',camerasau= '".$_POST['camerasau'].
                "',thuonghieu= '".$_POST['thuonghieu']."',ketnoi= '".$_POST['ketnoi'].
                "',manhinh= '".$_POST['manhinh']."',thietke= '".$_POST['thietke']."',thongtinpin= '".$_POST['thongtinpin'].
                 "',tienich= '".$_POST['tienich']."',thongtinkhac= '".$_POST['thongtinkhac'].
                "',image1= '".$_POST['image1']."',image2= '".$_POST['image2']."',image3= '".$_POST['image3'].
                "' where idinfo= '".$data."'";
        mysqli_query($conn, $sql);
        header("location: manager-infodetail.php");
        
    
        exit();
        
    }
    
    $sql= "select *  from infodetail where idinfo = '".$data."'";
    $result = mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($result);
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
                          method="POST">
                        
                        <div class="form-group">
                            <label>Memory </label>
                            <input type="text" name="memory" value="<?php echo $row['memory'];?>" 
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Operator </label>
                            <input type="text" name="hedieuhanh" value="<?php echo $row['hedieuhanh'];?>" 
                                   class="form-control"  required="">
                        </div>
                        <div class="form-group">
                            <label>Chip </label>
                            <input type="text" name="chip" value="<?php echo $row['chip'];?>" 
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Camera -front  </label>
                            <input type="text" name="cameratruoc" value="<?php echo $row['cameratruoc'];?>" 
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Camera - behind</label>
                            <input type="text" name="camerasau" value="<?php echo $row['camerasau'];?>"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Brand</label>
                            <input type="text" name="thuonghieu" value="<?php echo $row['thuonghieu'];?>"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Connector</label>
                            <input type="text" name="ketnoi" value="<?php echo $row['ketnoi'];?>"
                                   class="form-control" required="">
                        </div>
                        
                        <div class="form-group">
                            <label>Screen</label>
                            <input type="text" name="manhinh" value="<?php echo $row['manhinh'];?>"
                                   class="form-control" maxlength="500" required="">
                        </div>
                        <div class="form-group">
                            <label>Design</label>
                            <input type="text" name="thietke" value="<?php echo $row['thietke'];?>"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Battery</label>
                            <input type="text" name="thongtinpin" value="<?php echo $row['thongtinpin'];?>"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Utility</label>
                            <input type="text" name="tienich" value="<?php echo $row['tienich'];?>"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>More</label>
                            <input type="text" name="thongtinkhac" value="<?php echo $row['thongtinkhac'];?>"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Image 1</label>
                            <input type="text" name="image1" value="<?php echo $row['image1'];?>"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Image 2</label>
                            <input type="text" name="image2" value="<?php echo $row['image2'];?>"
                                   class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Image 3</label>
                            <input type="text" name="image3" value="<?php echo $row['image3'];?>"
                                   class="form-control" required="">
                        </div>
                        
                        
                        <input type="submit" name="save"  class="btn btn-primary">
                        <a href="manager-infodetail.php" class="btn btn-default">
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