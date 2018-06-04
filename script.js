console.log('connected');
$(document).ready(function(){
	getProducts();
	$('#product-table').DataTable({
		responsive: true,
		autoWidth: false,
		searching:false,
		paging:false,
	});
	//
	$("#add-btn").click(function(event){
		event.preventDefault();
		//var formData = $("#add-product-form").serialize();
		//console.log(formData);
		var productform = document.querySelector("#add-product-form");
		$.ajax({
			method:"POST",
			dataType: 'json',
			url: 'addproduct.php',
			//thay doi de upload file
			processData: false,
  			contentType: false,
			data: new FormData(productform),
		}).done(function(data){
			if(data.result){
				//Thông báo thành công (tùy chọn
				//Tải lại dữ liệu cho bảng sản phẩm
				getProducts();
				//TODO xóa trống form thêm mới
				$("#myModal").modal("hide");
			}else{
				//Thông báo k thành công
				console.log("Fail: "+data.message);
			}
		}).fail(function(jqXHR, textStatus, errorThrown){
			console.log("Fail: "+jqXHR.responseText);
		})
	})
	//Delete product
	$("tbody").on("click",".delete",function(){
		$("#delete").modal();
		var id = $(this).parents("tr").attr("id");
		$("#did").val(id);
		$("#delete").modal();
	})

	$("#dsave-btn").click(function(event){
		event.preventDefault();
		//var formData = $("#add-product-form").serialize();
		//console.log(formData);
		var productform = document.querySelector("#delete-product-form");
		$.ajax({
			method:"POST",
			dataType: 'json',
			url: 'deleteproduct.php',
			//thay doi de upload file
			processData: false,
  			contentType: false,
			data: new FormData(productform),
		}).done(function(data){
			if(data.result){
				//Thông báo thành công (tùy chọn
				//Tải lại dữ liệu cho bảng sản phẩm
				getProducts();
				//TODO xóa trống form thêm mới
				$("#delete").modal("hide");
			}else{
				//Thông báo k thành công
				console.log("Fail: "+data.message);
			}
		}).fail(function(jqXHR, textStatus, errorThrown){
			console.log("Fail: "+jqXHR.responseText);
		})
	})


	//Update product
	$("tbody").on("click",".edit",function(){
		var id = $(this).parents("tr").attr("id");
		var code = $(this).parents("tr").find(".code").text();
		var name = $(this).parents("tr").find(".name").text();
		var material = $(this).parents("tr").find(".material").text();
		var shape = $(this).parents("tr").find(".shape").text();
		var guide = $(this).parents("tr").find(".guide").text();
		// hiện data lên
		$("#uid").val(id);
		$("#ucode").val(code);
		$("#uname").val(name);
		$("#umaterial").val(material);
		$("#ushape").val(shape);
		$("#uguide").val(guide);
		$("#update").modal();
		$("#popup").modal();
	})
	// xử lý khi submit form cập nhật
	$("#update").submit(function(event){
		var formData = $("#update-product-form").serialize();
		$.ajax({
			method : "POST",
			url: "update.php",
			// dataType:'json',
			data: formData,
		}).done(function(data){
			console.log(data);
			//Doc lại danh sách sản phẩm
			//Đóng modal
			$('#update').modal('toggle');
			//Xóa trống input
			getProducts();

		}).fail(function(jqXHR, statusText, errorThrown){
			console.log("Fail :"+jqXHR.responseText);
			console.log(errorThrown);
		})
	})
}) //End document ready

function getProducts(){
	$.ajax({
		url: 'getProducts.php',
		method: 'POST',
		dataType: 'json',
		// data: 
	}).done(function(data){
		console.log(data);
		if(data.result){
			var rows = "";
			$.each(data.products, function(index, product){
				// console.log(index+" - "+product.product_name);
				rows += "<tr id='"+product.id+"'>";
				rows += "<td class='image'><img class='product-thumbnail' height='70px' src='"+product.image+"'></td>";
				rows += "<td class='code'>"+product.product_code+"</td>";
				rows += "<td class='name'>"+product.product_name+"</td>";
				rows += "<td class='material'>"+product.material+"</td>";
				rows += "<td class='shape'>"+product.shape+"</td>";
				rows += "<td class='guide' >"+product.guide+"";
				rows += "</td>";
				rows += "<td>";
				rows += "<button class='btn btn-primary edit'><i class='fa fa-pencil'></i></button> ";
				rows += "<button class='btn btn-danger delete'><i class='fa fa-trash'></i></button>";
				rows += "</td>";
				rows += "</tr>";
			})
			$("tbody").html(rows);
		}
	}).fail(function(jqXHR, statusText, errorThrown){
		console.log("Fail:"+ jqXHR.responseText);
		console.log(errorThrown);
	}).always(function(){

	})
}





//jqXHR truy cập jquery Ajax