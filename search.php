<?php

        require 'database.php';
        
        if (isset($_GET['search'])){
            $searchq = $_GET['search'];
            $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
            $sql = "SELECT  id, product_code, product_name, material, shape, guide, image FROM products WHERE product_name LIKE '%".$searchq."%'";
        }else{ 
            $sql = "SELECT  id, product_code, product_name, material, shape, guide, image FROM products";
        }
        $result = mysqli_query($conn, $sql);
        if(!$result){
        //Kiểm tra xem bị lỗi j
            die("Can't query data. Error occure.".mysqli_error($conn));
        }
        if (mysqli_num_rows($result) > 0) {
             echo "<div class='timkiem'style='padding :40px 40px 40px 40px'>";
             echo "<div class='row'>";
            $a=0;
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='col-lg-3 col-md-4 '>";
                echo "<a href='productdetail.php?id=".$row["id"]."'>";
                // echo "<div class='product-container thumbnail'>";
                // echo "<img class='img-responsive' src='".$row["image"]."'>";
                echo "<h3><center>".$row["product_name"]."</center></h3>";
                echo"<h5 class='text-center'><label class ='material'> ".$row["material"]." </label></h5>";
                echo '<center><a href="productdetail.php?id='.$row["id"].'">';
                // echo "</div>";
                echo "</a>";
                echo "</div>";
                $a=$a+1;
            }
            
             echo "</div>";  
             echo "</div>";
            
        }else{
                
                echo "No results to search";
                echo"Location: admin.php";
                
        }
        
            mysqli_close($conn);
            ?>
            