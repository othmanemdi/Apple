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
                <h1>Liste des commandes</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="dashboard">Tableau de bord</a></li>
                    <li class="breadcrumb-item active">Commandes</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Liste des commandes</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>

            </div>
        </div>
        <div class="card-body">

            <div class="responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>Num</th>
                            <th>Client</th>
                            <th>Date de commande</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>N°1</td>
                            <td>Youssra</td>
                            <td>08/10/2022</td>
                            <td>
                                <span class="right badge badge-warning">En cours</span>
                            </td>
                            <td>
                                <a href="" class="btn btn-dark btn-sm">Afficher</a>
                            </td>
                        </tr>

                        <tr>
                            <td>N°2</td>
                            <td>Hind</td>
                            <td>07/10/2022</td>
                            <td>
                                <span class="right badge badge-danger">En Attente</span>
                            </td>
                            <td>
                                <a href="" class="btn btn-dark btn-sm">Afficher</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->

    </div>
    <!-- /.card -->

</section>
<!-- /.content -->


<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>