<?php  
header("Content-Type: application/json");
require 'database.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST["id"])&& isset($_POST["product_code"])&& isset($_POST["product_name"])&& isset($_POST["material"])&& isset($_POST["shape"])&& isset($_POST["guide"]) ){
		$id= $_POST["id"];
		$code= $_POST["product_code"];
		$name= $_POST["product_name"];
		$material= $_POST["material"];
		$shape= $_POST["shape"];
		$guide= $_POST["guide"];
		$sql= "UPDATE products SET product_name='".$name."',material='".$material."',shape='".$shape."',guide='".$guide."' WHERE id=".$id;
		$result = mysqli_query($conn, $sql);
		if($result){
			$data["result"]=true;
			$data["message"]="Add product successfully";
			// header("Location: index.php");
			// die();

		}else{
			$data["result"]=false;
			$data["message"]= "Can not add product.Error".mysqli_error($conn);
		}
	}else{
		$data["result"]=false;
		$data["message"]= "Invalid product information";
	}
	echo json_encode($data);	
}
?>