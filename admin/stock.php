<?php

ob_start();

$title = "Stock page";

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
                <h1>Liste de stock</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="dashboard">Tableau de bord</a></li>
                    <li class="breadcrumb-item active">Stock</li>
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
            <h3 class="card-title">Liste de stock</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>

            </div>
        </div>

        <div class="card-body">
            <a href="category_add" class="btn bg-maroon mb-3">Ajouter</a>
            <div class="responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>Img</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Old Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($produits as $key => $p) : ?>
                            <tr>
                                <td>

                                    <img src="<?= $p['image'] ?>" width="40" class="img-fluid" alt="">
                                </td>
                                <td>
                                    <?= ucwords($p['name'] . ' ' . $p['color']) ?>
                                </td>


                                <td>
                                    <?= _number_format($p['price']) ?>
                                </td>


                                <td>
                                    <?= _number_format($p['old_price']) ?>
                                </td>

                                <td>
                                    <a href="" class="btn btn-dark btn-sm">Afficher</a>
                                </td>
                            </tr>
                        <?php endforeach ?>


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