<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= esc($title_for_layout) ?></title>
        <?= $this->include('Public_html/Layouts/Adminlte/Includes/home/include_meta') ?>
        <?= $this->include('Public_html/Layouts/Adminlte/Includes/home/include_css') ?>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <?= $this->include('Public_html/Layouts/Adminlte/Includes/home/navbar') ?>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <?= $this->include('Public_html/Layouts/Adminlte/Includes/home/sidebar') ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <?= $this->include('Public_html/Layouts/Adminlte/Includes/home/content_header') ?>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <?= $this->include('Public_html/Components/content') ?>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <?= $this->include('Public_html/Layouts/Adminlte/Includes/home/content_header') ?>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <?= $this->include('Public_html/Layouts/Adminlte/Includes/home/include_js') ?>
    </body>
</html>
