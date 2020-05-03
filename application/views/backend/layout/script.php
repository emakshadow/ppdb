<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url()?>assets/backend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url()?>assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url()?>assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/backend/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url()?>assets/backend/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url()?>assets/backend/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url()?>assets/backend/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url()?>assets/backend/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?php echo base_url()?>assets/backend/dist/js/pages/dashboard2.js"></script>
<!-- toastr alert -->
<script src="<?php echo base_url()?>assets/backend/plugins/toastr/toastr.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url()?>assets/backend/plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url()?>assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!--number only-->
<script type="text/javascript">
function number_only(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>

<!-- data tables -->
<script>
  $(function () {
    $("#tabel-responsif").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>