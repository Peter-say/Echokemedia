    {{-- <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ $admin_assets}}/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="{{ $admin_assets}}/bootstrap/js/popper.min.js"></script>
    <script src="{{ $admin_assets}}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ $admin_assets}}/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ $admin_assets}}/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="plugins/apex/apexcharts.min.js"></script>
    <script src="assets/js/dashboard/dash_1.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS --> --}}


             <!-- Bootstrap core JavaScript -->
             <script src="{{ $admin_assets}}/vendor/jquery/jquery.min.js"></script>
             <script src="{{ $admin_assets}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
             <!-- Additional Scripts -->
             <script src="{{ $admin_assets}}/asap/js/custom.js"></script>
             <script src="{{ $admin_assets}}/asap/js/owl.js"></script>
             <script src="{{ $admin_assets}}/asap/js/slick.js"></script>
             <script src="{{ $admin_assets}}/asap/js/isotope.js"></script>
             <script src="{{ $admin_assets}}/asap/js/accordions.js"></script>
    
             <script language="text/Javascript">
                 cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
                 function clearField(t) { //declaring the array outside of the
                     if (!cleared[t.id]) { // function makes it static and global
                         cleared[t.id] = 1; // you could use true and false, but that's more typing
                         t.value = ''; // with more chance of typos
                         t.style.color = '#fff';
                     }
                 }
             </script>