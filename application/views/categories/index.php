<?php if($this->session->flashdata('success')): ?>
	<div class="alert alert-success alert-dismissible">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
		Category has been successfully added.
    </div>
<?php endif; ?>
<div class="row">

	<div class="col-lg-9">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Category Full List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="dataTables" class="table table-bordered table-striped">
                <thead>
					<tr>
						<th>#</th>
						<th>Category Name</th>
						<th>Actions</th>
					</tr>
                </thead>
                <tbody>
					<?php $x = 1; ?>
					<?php foreach($categories as $category): ?>
						<tr>
							<td><?php echo $x++; ?></td>
							<td><?php echo $category['name']; ?></td>
							<td>
								<button class="btn btn-flat btn-xs bg-olive"><i class="fa fa-pencil"></i></button>
							</td>
						</tr>
					<?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
	</div>

	<div class="col-lg-3">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Add Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST" action="<?php echo base_url(); ?>category">

			  	<div class="form-group">
					<label for="">Category Name</label>
					<input type="text" name="name" class="form-control" required>
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
