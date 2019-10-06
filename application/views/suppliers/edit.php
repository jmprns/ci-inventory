<div class="row">
<div class="col-lg-offset-4 col-lg-4">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Update Supplier</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST" action="<?php echo base_url(); ?>supplier/update/<?php echo $supplier['id']; ?>">

			  	<div class="form-group">
					<label for="">Supplier Name</label>
					<input type="text" name="name" class="form-control" value="<?php echo $supplier['name']; ?>" required>
				</div>

				<div class="form-group">
					<label for="">Supplier Address</label>
					<input type="text" name="address" class="form-control" value="<?php echo $supplier['address']; ?>" required>
				</div>

				<hr>

				<button type="submit" class="btn btn-block btn-flat bg-olive">Submit</button>

			  </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
	</div>
</div>
