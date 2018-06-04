<?php
	if (isset($_POST["id"])) {
		require 'database.php';
		$id = $_POST["id"];
		$sql = "DELETE FROM products WHERE id = ".$id;
		$result = mysqli_query($conn,$sql);
		if ($result) {
			echo header("location: getProducts.php");
			die();
		}else{
			echo "Delete error: ".mysqli_erroc($conn);
		}
	}else{
		echo "No Product ID";
	}

 ?>	