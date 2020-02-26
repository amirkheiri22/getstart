<script type="text/javascript" src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/knob/jquery.knob.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/fastclick/fastclick.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/dist/js/adminlte.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/dist/js/pages/dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/dist/js/demo.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/dist/js/advanced_and_extended.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/dist/js/wysihtml-toolbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/dist/js/tinyMCE/tinyMCE.min.js')}}" referrerpolicy="origin"></script>
<script type="text/javascript" src="{{asset('assets/dist/js/tinyMCE/langs/fa_IR.js')}}" referrerpolicy="origin"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#example1").DataTable({
            "language": {
                "paginate": {
                    "next": "بعدی",
                    "previous" : "قبلی"
                }
            },
            "info" : false,
        });
        $('#example2').DataTable({
            "language": {
                "paginate": {
                    "next": "بعدی",
                    "previous" : "قبلی"
                }
            },
            "info" : false,
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "autoWidth": false
        });
    });
</script>
<script type="text/javascript">
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script type="text/javascript">
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        ClassicEditor
            .create(document.querySelector('#editor1'))
            .then(function (editor) {
                // The editor instance
            })
            .catch(function (error) {
                console.error(error)
            })

        // bootstrap WYSIHTML5 - text editor

        $('.textarea').wysihtml5({
            toolbar: { fa: true }
        })
    })
</script>
<script>
    tinymce.init({
        selector: '.mytextarea',
        language:'fa_IR',
        plugins: "autolink",
    });
</script>
