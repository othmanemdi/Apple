<?php

ob_start();

$title = "404 page";

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tableau de bord</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Tableau de bord</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-3">
            <div class="card">

                <div class="card-body">
                    <h4>Revenue</h4>
                    <h5>$3 000 000.00</h5>
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->
        </div>
        <!-- col -->

        <div class="col-md-3">
            <div class="card">

                <div class="card-body">
                    <h4>Commandes</h4>
                    <h5>89 151</h5>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- col -->

        <div class="col-md-3">
            <div class="card">

                <div class="card-body">
                    <h4>Produits</h4>
                    <h5>8 151</h5>
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->
        </div>
        <!-- col -->

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4>Clients</h4>
                    <h5>151</h5>
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->
        </div>
        <!-- col -->
    </div>
    <!-- row -->

</section>
<!-- /.content -->


<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>