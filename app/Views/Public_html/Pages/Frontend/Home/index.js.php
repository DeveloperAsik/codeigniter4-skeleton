<!-- JQVMap -->
<script src="<?= base_url('/__assets/templates/adminlte/plugins/jqvmap/jquery.vmap.min.js')?>"></script>
<script src="<?= base_url('/__assets/templates/adminlte/plugins/jqvmap/maps/jquery.vmap.world.js')?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('/__assets/templates/adminlte/plugins/chart.js/Chart.min.js')?>"></script>
<!-- Sparkline -->
<script src="<?= base_url('/__assets/templates/adminlte/plugins/sparklines/sparkline.js')?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('/__assets/templates/adminlte/plugins/jquery-knob/jquery.knob.min.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('/__assets/templates/adminlte/dist/js/pages/dashboard.js')?>"></script>
<script>
    var IndexJS = function () {
        return {
            //main function to initiate the module
            init: function () {
                fnAlertStr('IndexJS successfully load', 'success', {timeOut: 2000});
            }
        };
    }();
    jQuery(document).ready(function () {
        IndexJS.init();
    });
</script>
