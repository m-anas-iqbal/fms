
        <!-- footer content -->
        <footer >
          <div class="pull-right ">
          <span class="copyright_text">Copyright 2023 © <a href="https://iconicdev.co/"> IconicDev</a> All rights reserved.</span>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <div class="toast" role="alert" aria-live="polite" aria-atomic="true" data-delay="10000">
    <div role="alert" aria-live="assertive" aria-atomic="true" >
  <div class="toast-header">
   
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    <?php
    if(isset($_SESSION['msg'])){echo $_SESSION['msg']; unset($_SESSION['msg']);}
    ?>
  </div>
</div>
</div>
    <!-- jQuery -->
    <script src="assests/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assests/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="assests/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <!-- <script src="assests/vendors/nprogress/nprogress.js"></script> -->
    <!-- Chart.js -->
    <script src="assests/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="assests/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assests/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <!-- <script src="assests/vendors/iCheck/icheck.min.js"></script> -->
    <!-- Skycons -->
    <!-- <script src="assests/vendors/skycons/skycons.js"></script> -->
    <!-- Flot -->
    <script src="assests/vendors/Flot/jquery.flot.js"></script>
    <script src="assests/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="assests/vendors/Flot/jquery.flot.time.js"></script>
    <script src="assests/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="assests/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="assests/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="assests/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="assests/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="assests/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <!-- <script src="assests/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="assests/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="assests/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script> -->
    <!-- bootstrap-daterangepicker -->
    <!-- <script src="assests/vendors/moment/min/moment.min.js"></script> -->
    <script src="assests/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- iCheck -->
    <!-- <script src="assests/vendors/iCheck/icheck.min.js"></script> -->
    <!-- <script src="cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> -->
    <!-- Datatables -->
    <script src="assests/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assests/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="assests/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assests/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="assests/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assests/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assests/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assests/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="assests/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assests/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assests/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="assests/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="assests/vendors/jszip/dist/jszip.min.js"></script>
    <script src="assests/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="assests/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="assests/build/js/custom.min.js"></script>
    <!-- <script>
$(document).ready( function () {
    $('#datatable').DataTable();
} );
</script> -->
  </body>
</html>
