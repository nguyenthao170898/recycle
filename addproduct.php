<?php 
header("Content-Type: application/json");
require "database.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["product_code"])&& isset($_POST["product_name"])&& isset($_POST["material"])&& isset($_POST["shape"])&& isset($_POST["guide"]) ){

       
        //$id = $_POST["id"];
        $code = $_POST["product_code"];
        $name = $_POST["product_name"];
        $material = $_POST["material"];
        $shape = $_POST["shape"];
        $guide = $_POST["guide"];

        $sql = "INSERT INTO products(product_code, product_name, material, shape, guide) VALUES('".$code."','".$name."','".$material."' ,'".$shape."','".$guide."')";

        $result = mysqli_query($conn, $sql);
        if($result){
            $data["result"] = true;
            $data["message"] =  "Add product successfully";
            // echo header("location: index.php");
            // die();
        }else{
            $data["result"] = false;
            $data["message"] =  "Can not add product. Error: ".mysqli_error($conn);
        }
    }else{
        $data["result"] = false;
        $data["message"] = "Invalid product information";
    }
    echo json_encode($data);
}
?>

