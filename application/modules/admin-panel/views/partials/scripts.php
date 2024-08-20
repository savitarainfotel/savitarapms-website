<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?= form_hidden('csrf_hash', $this->security->get_csrf_hash()); ?>
<?= form_hidden('base_url', base_url(admin())); ?>
<?= form_hidden('show_toast', $this->session->show_toast); ?>

<!-- jQuery -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<?= script('assets/admin-panel/js/adminlte.min.js'.ASSET_VERSION); ?>

<?php if(!empty($datetimepicker)): ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
<?php endif ?>
<?php if(!empty($validate)): ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
<?php endif ?>

<?php if(!empty($datatables)): ?>
    <?= form_hidden('dataTableUrl', base_url($datatable)); ?>

    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>    
    <script src="//cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.5.3/js/buttons.colVis.min.js"></script>
<?php endif ?>

<?php if(!empty($select2)): ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<?php endif ?>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/node-snackbar@latest/src/js/snackbar.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if(!empty($ckeditor)): ?>
<?= script('assets/admin-panel/plugins/ckeditor/ckeditor.js'.ASSET_VERSION); ?>
<script>
    const editor = CKEDITOR.replace('editor');

    // Add an input event listener to the CKEditor instance
    editor.on('change', function() {
        editor.updateElement();
    });
</script>
<?php endif ?>

<!-- Custom -->
<?= script('assets/admin-panel/js/script.js'.ASSET_VERSION); ?>