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

    <div class="bg-white p-3 mb-3 shadow-sm" style="border-left: solid 5px #bd2130 ;">
        <h5>I am a danger callout!</h5>
        <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire
            soul,
            like these sweet mornings of spring which I enjoy with my whole heart.</p>
    </div>


    <div class="callout callout-danger">
        <h5>I am a danger callout!</h5>
        <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire
            soul,
            like these sweet mornings of spring which I enjoy with my whole heart.</p>
    </div>

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

    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-maroon"><i class="far fa-envelope"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Messages</span>
                    <span class="info-box-number">1,410</span>
                </div>

            </div>

        </div>

        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Bookmarks</span>
                    <span class="info-box-number">410</span>
                </div>

            </div>

        </div>

        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Uploads</span>
                    <span class="info-box-number">13,648</span>
                </div>

            </div>

        </div>

        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">93,139</span>
                </div>

            </div>

        </div>

    </div>

</section>
<!-- /.content -->


<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>