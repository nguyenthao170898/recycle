<?php 
header("Content-Type: application/json");
require "database.php";
$sql = "SELECT id, product_code, product_name, material, shape, guide, image FROM products ";
$result = mysqli_query($conn, $sql);
if(!$result){
	$data["message"]= "Can't query data".mysqli_error($conn) ;
	$data["result"]= false;
}else{
	if (mysqli_num_rows($result) > 0) {
    // 2. Các dòng dữ liệu
		while($row = mysqli_fetch_assoc($result)) {
			$json[]= $row;
			
		}
		$data["products"]=$json;
		$data["result"]=true;
	}else{
		$data["message"]="0 product";
		$data["result"]= false;
	}
}
// var_dump($data);
mysqli_close($conn);
echo json_encode($data);
?>

