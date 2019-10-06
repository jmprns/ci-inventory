<?php if($this->session->flashdata('success')): ?>
	<div class="alert alert-success alert-dismissible">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
		<?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>


<?php if($this->session->flashdata('error')): ?>
	<div class="alert alert-danger alert-dismissible">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Ooooops!</h4>
		<?php echo $this->session->flashdata('error'); ?>
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
								<form method="POST" action="<?php base_url(); ?>category/delete/<?php echo $category['id']; ?>">
								<a href="<?php echo base_url(); ?>category/edit/<?php echo $category['id']; ?>" class="btn btn-flat btn-xs bg-orange"><i class="fa fa-pencil"> Edit</i></a>
								<button type="submit" class="btn btn-flat btn-xs bg-navy"><i class="fa fa-trash"> Delete</i></button>
								</form>
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
