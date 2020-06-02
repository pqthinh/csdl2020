<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./sanpham/css-sanpham/css-qlsp.css"/>
    </head>
    <body>
        
    
        <?php 
        // PHẦN XỬ LÝ PHP
        // BƯỚC 1: KẾT NỐI CSDL
        require '../csdl/connectdb.php';
 
        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $result = mysqli_query($conn, 'select * from products');
        //$row = mysqli_fetch_array($result);
        $total_records = mysqli_num_rows($result);
 
        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 6;
        
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);
 
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = 1;
        }
        else if ($current_page < 1){
            $current_page = $total_page;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;
 
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH SẢN PHẨM
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        $result = mysqli_query($conn, "SELECT * FROM products LIMIT $start, $limit");
 
        ?>
        <div class="sp">
             <div class="container_sp" style="//grid-template-columns: repeat(3,1fr);width: 800px;">
            
            
            <?php 
            // PHẦN HIỂN THỊ TIN TỨC
            // BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC
            while ($row = mysqli_fetch_array($result)){
                ?>
                <div class="sanpham_sp">
			<div class="img_sp">
                             <a href="./sanpham/show-product.php?id=<?php echo $row['idproduct'];?>">
                                 <img src="../image/<?php echo $row['image']?>" alt="<?php echo $row['nameproduct'];?>" title="<?php echo $row['nameproduct'];?>">
				</a>
			</div>
			<div class="content_sp">
				<h4><?php echo $row['nameproduct']."  ".$row['ram']; ?></h4>
                                <?php 
                                    $sql2 = "select * from `sanphamkhuyenmai` 
where `sanphamkhuyenmai`.`idproduct`='".$row['idproduct']."' and DATE_ADD(`sanphamkhuyenmai`.`ngay_batdau`,INTERVAL `sanphamkhuyenmai`.`songay_hethan` DAY)> CURRENT_TIME";
                                    $result2 = mysqli_query($conn, $sql2);
                                    $out='';
                                    if(mysqli_num_rows($result2)==1) 
                                    {   
                                        $out= 'dis';
                                        $row2 = mysqli_fetch_array($result2);
                                ?>
				<p id="<?php echo $out;?>">
                                    <strike><?php echo $row['sellprice']." vnd"; ?> </strike>
                                   
                                    <span>&nbsp&nbsp Giam: <?php echo $row2['giamgia'].' vnđ <br>';
                                        echo ($row['sellprice']-$row2['giamgia'])." vnd<br>";
                                    } else {?></span>
                                     
				</p>
                                    <p><?php echo "Giá ht: ".$row['sellprice']." vnd"; }?></p>
                                <p>Số lượng:&nbsp<?php echo $row['quantity'] ?></p>
			</div>
                    </div>
            <?php }
            ?>
                 </div>
        </div>
        <div class="pagination">
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="temp-quantri.php?page='.($current_page-1).'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            if($current_page+4>$total_page) {
                for ($i = $current_page; $i <= $total_page; $i++){
                    if ($i == $current_page){
                        echo '<span>'.$i.'</span> | ';
                    }
                    else{
                        echo '<a href="temp-quantri.php?page='.$i.'">'.$i.'</a> | ';
                    }
                }
            }else
            for ($i = $current_page; $i <= $current_page+3&&$current_page<=7; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="temp-quantri.php?page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="temp-quantri.php?page='.($current_page+1).'">Next</a> | ';
            }
           ?>
        </div>
</body>
</html>