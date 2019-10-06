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
              <h3 class="box-title">Supplier Full List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="dataTables" class="table table-bordered table-striped">
                <thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Address</th>
						<th>Actions</th>
					</tr>
                </thead>
                <tbody>
					<?php $x = 1; ?>
					<?php foreach($suppliers as $supplier): ?>
						<tr>
							<td><?php echo $x++; ?></td>
							<td><?php echo $supplier['name']; ?></td>
							<td><?php echo $supplier['address']; ?></td>
							<td>
								<form method="POST" action="<?php base_url(); ?>supplier/delete/<?php echo $supplier['id']; ?>">
								<a href="<?php echo base_url(); ?>supplier/edit/<?php echo $supplier['id']; ?>" class="btn btn-flat btn-xs bg-orange"><i class="fa fa-pencil"> Edit</i></a>
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
              <h3 class="box-title">Add Supplier</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST" action="<?php echo base_url(); ?>supplier">

			  	<div class="form-group">
					<label for="">Supplier Name</label>
					<input type="text" name="name" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="">Supplier Address</label>
					<input type="text" name="address" class="form-control" required>
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
