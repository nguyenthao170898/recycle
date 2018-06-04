<?php 
include 'header.php';
?>
<!-- Products -->
<h1>Table</h1>
<div class="wraper">
	<a href="#" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal" id="addlink"><i class="fa fa-plus"></i> Add</a>
	<br>
	<table class="table table-bordered table-striped" id="product-table">
		<thead>
			<tr>
				<th>Picture</th>
				<th>Code</th>
				<th>Name</th>
				<th>Material</th>
				<th>Shape</th>
				<th>Guide</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
					
		</tbody>
	</table>
</div>
<!-- Add Product -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><i class="fa fa-plus"></i> Add Recycle</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form id="add-product-form" method="GET" action="create.php">
					<div class="form-group">
						<label for="code">Product Code</label>
						<input type="text" class="form-control" name="product_code" id="code">
					</div>
					<div class="form-group">
						<label for="name">Product Name</label>
						<input type="text" class="form-control" name="product_name" id="name" required>
					</div>
					<div class="form-group">
						<label for="category">Material</label>
						<input type="text" name="material" id="material" class="form-control">
					</div>
					<div class="form-group">
						<label for="category">Shape</label>
						<input type="text" name="shape" id="shape" class="form-control">
					</div>
					<div class="form-group">
						<label for="description">Guide</label>
						<textarea class="form-control" name="guide" id="guide"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success" id="add-btn" style="width: 20%">Add</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- End Add Product -->
<!-- Update Product -->
<!-- Modal -->
<div id="update" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<form id="update-product-form" method="POST" action="<?php echo $_SERVER["PHP_SELF"]  ?>">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"><i class="fa fa-pencil"></i> Edit Recycle</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
				<input type="hidden" name="id" id="uid">
					<!-- Mã sản phẩm -->
					<div class="form-group">
						<label for="">Product Code</label>
						<input type="text" name="product_code" id="ucode" class="form-control" readonly>
					</div>
					<!-- Tên sản phẩm -->
					<div class="form-group">
						<label for="">Product Name</label>
						<input type="text" name="product_name" id="uname" class="form-control">
					</div>
					<!-- chất liệu sản phẩm -->
					<div class="form-group">
						<label for="category">Material</label>
						<input type="text" name="material" id="umaterial" class="form-control">
					</div>
					<!-- hình dáng sản phẩm -->
					<div class="form-group">
						<label for="category">shape</label>
						<input type="text" name="shape" id="ushape" class="form-control">
					</div>
					<!-- hướng dẫn -->
					<div class="form-group">
						<label for="">Guide</label>
						<textarea name="guide" id="uguide" class="form-control" rows="5"></textarea>
					</div>		
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success" id="usave-btn" style="width: 20%">Save</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>					
			</div>
		</form>
	</div>
</div>
<!-- End Update Product -->
<!-- Delete Product -->
<div id="delete" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<form id="delete-product-form" method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span>Delete</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<input type="hidden" name="id" id="did">
					<div class="form-group">
						<p>Are you sure?</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" id="dsave-btn" style="width: 20%">Yes</button>
					<button type="button" class="btn btn-info" data-dismiss="modal">No</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- End Delete Product -->
</div>
<?php
include 'footer.php';
?>
<script type="text/javascript" src="script.js"></script>



