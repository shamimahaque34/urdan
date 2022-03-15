<!-- CORE PLUGINS-->
<script src="{{ asset('/admin-assets') }}/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="{{ asset('/admin-assets') }}/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
<script src="{{ asset('/admin-assets') }}/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ asset('/admin-assets') }}/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
<script src="{{ asset('/admin-assets') }}/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS-->
<script src="{{ asset('/admin-assets') }}/assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
<script src="{{ asset('/admin-assets') }}/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
<script src="{{ asset('/admin-assets') }}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src="{{ asset('/admin-assets') }}/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
<!-- CORE SCRIPTS-->
<script src="{{ asset('/admin-assets') }}/assets/js/app.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script src="{{ asset('/admin-assets') }}/assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
<script src="{{ asset('/admin-assets') }}/assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- PAGE LEVEL PLUGINS-->
<script src="{{ asset('/admin-assets') }}/assets/vendors/summernote/dist/summernote.min.js" type="text/javascript"></script>
<script src="{{ asset('/admin-assets') }}/assets/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<!-- CORE SCRIPTS-->

<script type="text/javascript">
    $(function() {
        $('#example-table').DataTable({
            pageLength: 10,
            //"ajax": './assets/demo/data/table_data.json',
            /*"columns": [
                { "data": "name" },
                { "data": "office" },
                { "data": "extn" },
                { "data": "start_date" },
                { "data": "salary" }
            ]*/
        });
    })
</script>

<script type="text/javascript">
    $(function() {
        $('.summernote').summernote();

    });
</script>

@yield('admin-js')
