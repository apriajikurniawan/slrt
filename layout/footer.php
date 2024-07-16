
<br>
<br>
<br>

  <div class="footer text-center mb-5" align="center" style="position: relative; top:-20px; margin-bottom:70px;">
        <div class="span">
            <span class="text-dark" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><b>Dinas Sosial Kota Tanjungbalai</b></span> <br>
            <span class="text-dark" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Sistem Layanan Dan Rujukan Terpadu</span> <br>
            <span class="text-dark" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">&copy; All Right Reserved <?= date('Y') ?></span>
        </div>
    </div>
</section>
                 

          <script>
                    /*=============== SHOW MENU ===============*/
                const navMenu = document.getElementById('nav-menu'),
                    navToggle = document.getElementById('nav-toggle'),
                    navClose = document.getElementById('nav-close')

                /* Menu show */
                navToggle.addEventListener('click', () =>{
                navMenu.classList.add('show-menu')
                })

                /* Menu hidden */
                navClose.addEventListener('click', () =>{
                navMenu.classList.remove('show-menu')
                })


                                
                /*=============== MENU TOGGLE ===============*/
                const login = document.getElementById('login'),
                    loginBtn = document.getElementById('login-btn'),
                    loginClose = document.getElementById('login-close')

                /* Login show */
                loginBtn.addEventListener('click', () =>{
                login.classList.add('show-login')
                })

                /* Login hidden */
                loginClose.addEventListener('click', () =>{
                login.classList.remove('show-login')
                })

                 </script>








<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="assets5/assets5/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="assets5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets5/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets5/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="assets5/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="assets5/plugins/raphael/raphael.min.js"></script>
<script src="assets5/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets5/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="assets5/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="assets5/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets5/dist/js/pages/dashboard2.js"></script>

<script src="assets5/https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="assets5/assets/js/main.js"></script>

    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets5/plugins/jquery/jquery.min.js"></script>
<script src="assets5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets5/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets5/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets5/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets5/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets5/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets5/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets5/plugins/jszip/jszip.min.js"></script>
<script src="assets5/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets5/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets5/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets5/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets5/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="assets5/dist/js/adminlte.min.js"></script>
<script src="assets5/dist/js/demo.js"></script>
<script>
  
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "paging": false, "autoWidth": false,  "searching": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


</body>
</html>
