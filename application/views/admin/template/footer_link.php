<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="<?= base_url() ?>assets/admin/libs/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/node-waves/waves.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

<!-- Required datatable js -->
<script src="<?= base_url() ?>assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?= base_url() ?>assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="<?= base_url() ?>assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="<?= base_url() ?>assets/admin/js/pages/datatables.init.js"></script>

<!-- App js -->
<script src="<?= base_url() ?>assets/admin/js/app.js"></script>

<script src="<?= base_url() ?>assets/admin/libs/parsleyjs/parsley.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/pages/form-validation.init.js"></script>

<script>
    CKEDITOR.replace('editor1', {
        height: 200,
        extraPlugins: 'colorbutton,colordialog',
        removeButtons: '',
        removeButtons: 'PasteFromWord'
    });

    window.setTimeout(function() {
        $(".alert").fadeTo(200, 0).slideUp(200, function() {
            $(this).remove();
        });
    }, 2000);
</script>