</section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0 || <small>Page rendered in {elapsed_time} seconds.</small> 
	  </div>
	  
	  <strong>Developed By: <a target="_new" href="https://jmprns.netlify.com">JMPRNS</a></strong>
     
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->



<!-- jQuery 3 -->
<script src="<?php echo asset_url(); ?>vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo asset_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo asset_url(); ?>vendor/slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo asset_url(); ?>vendor/fastclick/fastclick.js"></script>
<!-- DataTables -->
<script src="<?php echo asset_url(); ?>vendor/datatables.net-bs/js/jquery.dataTables.min.js"></script>
<script src="<?php echo asset_url(); ?>vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo asset_url(); ?>js/app.min.js"></script>

<script>
  $(function () {
    $('#dataTables').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->
</body>
</html>
