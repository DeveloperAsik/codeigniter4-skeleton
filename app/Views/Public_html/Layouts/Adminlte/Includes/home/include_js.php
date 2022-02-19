<!-- jQuery -->
<script src="<?= base_url('/__assets/templates/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('/__assets/templates/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE -->
<script src="<?= base_url('/__assets/templates/adminlte/dist/js/adminlte.js'); ?>"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url('/__assets/templates/adminlte/plugins/chart.js/Chart.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('/__assets/templates/adminlte/dist/js/demo.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('/__assets/templates/adminlte/dist/js/pages/dashboard3.js'); ?>"></script>
<?php
if (isset($template_configs) && $template_configs['_global_js']) {
    $this->include($template_configs['_global_js']);
}
if (isset($template_configs) && $template_configs['_view_js']) {
    $this->include($template_configs['_view_js']);
}
?>