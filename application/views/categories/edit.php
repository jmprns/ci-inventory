<div class="col-lg-offset-4 col-lg-4">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Update Category</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<form method="POST" action="<?php echo base_url(); ?>category/update/<?php echo $category['id']; ?>">

			<div class="form-group">
				<label for="">Category Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo $category['name']; ?>" required>
			</div>

			<hr>

			<button type="submit" class="btn btn-block btn-flat bg-olive">Submit</button>

			</form>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
</div>
