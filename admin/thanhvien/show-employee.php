<?php
    require_once '../../csdl/connectdb.php';
    
    $query= mysqli_query($conn, "select * from employee where idemployee=4");
    $row = mysqli_fetch_array($query);

?>

<div class="nhanvien">
    <div class="chitiet-nhanvien">
        <div class="content">
            <div class="zoom-small-image">
                <a href="../image/
                    <?php 
                        $file = $row['image'];
                        echo get_included_files($file);
                    ?>" 
                   width="300" height="300" class="cloud-zoom" id="zoom1" 
                   rel="adjustX: 10, adjustY: -4">
                    <img src="img/upload/<?php echo $row['image'];?>" width="250" height="250"
                         alt="" title="Optional title dislay">
                </a>
            </div>
            <div class="info">
                <label>Name</label>
                <p><?php echo $row['name'];?></p>
                <label>Birthday</label>
                <p><?php echo $row['birthday'];?></p>
                <label>Image</label>
                <p> <?php 
                        
                        $file = $row['image'];
                        if($file) {
                            header('Content-Type: image/jpg');
                            header('Content-Length: ' . filesize($file));
                            echo file_get_contents($file);
                        } else {
                            echo "Couldn't open file image";
                        }
                    ?>
                </p>
            </div>
        </div>
    </div>
</div>