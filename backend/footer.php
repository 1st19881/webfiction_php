</div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019 </strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->


<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>


<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Select2 -->

<!-- AdminLTE App -->
<script src="../node_modules/admin-lte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="assets/dist/js/demo.js"></script> -->


<!-- <script>
  $(document).ready(function () {
    //$('.sidebar-menu').tree();
    //$('.select2').select2();
    //Initialize Select2 Elements
    $('.select2').select2({
      theme: 'bootstrap4'
    })
  })
</script> -->




<script>
  $(function () {
    $('#example1').DataTable({
      // "paging": true,
      // "lengthChange": true,
      // "searching": true,
      // "ordering": true,
      // "info": true,
      // "autoWidth": true,
      "oLanguage": {
            "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
            "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
            "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
            "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
            "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
            "sSearch": "ค้นหา :",
            "oPaginate": {
                "sFirst": "เริ่มต้น",
                "sPrevious": "ก่อนหน้า",
                "sNext": "ถัดไป",
                "sLast": "สุดท้าย"
            }

        }
      
    });
  });
</script>



