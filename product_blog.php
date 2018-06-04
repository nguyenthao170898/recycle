<div class="row">

            <?php 
            require "database.php";
            $sql = "SELECT id, product_code, product_name, material, shape, guide, image FROM products ";
            $result = mysqli_query($conn, $sql);
            if(!$result){
                        die( "Can't query data".mysqli_error($conn) );
                        }
                    if (mysqli_num_rows($result) > 0) {
                        // 2. Các dòng dữ liệu
                        while($row = mysqli_fetch_assoc($result)) {
                        echo'<div class="col-md-7">';
                        echo'<a href="product_blog.php?id='.$row["id"].'">';
                        echo'<img class="img-fluid rounded mb-3 mb-md-0" src="'.$row["image"].'" alt="">';
                        echo'</a>';
                        echo'</div>';
                        echo'<div class="col-md-5">';
                        echo'<h3>'.$row["product_name"].'</h3>';
                        echo'<p>'.$row["guide"].'</p>';
                        echo'</div>';
                        
                        echo'<hr>';
             }
                    } else {
                    echo "0 results";
                    }
                    mysqli_close($conn);
                   
                    ?>
                    <!-- Mã HTML -->
       </div> 