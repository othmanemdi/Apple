<?php

ob_start();

$title = "Shop";


// $check_pages = ['shop', 'product-details'];
// if (in_array($page, $check_pages)) {
//     echo "Active";
// } else {
//     echo "Pas Active";
// }

// echo in_array($page,['shop', 'product-details]) ? 'active' : '';

// exit();

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>


<div class="container mt-5">



    <h1 class="my-4">Shop Page</h1>


    <div class="row">
        <div class="col-md-3">
            <h3>Catégories</h3>

            <ul class="list-group list-group-flush mb-3">

                <?php foreach ($categories as $key => $c) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <a href="" class="fw-bold text-dark">
                                <?= ucwords($c) ?>
                            </a>
                        </div>
                        <small>
                            (<?= $key * 14 ?>)
                        </small>
                    </li>
                <?php endforeach  ?>


            </ul>
            <h3>Couleurs</h3>
            <ul class="list-group list-group-flush mb-3">

                <?php foreach ($colors as $key => $c) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <a href="" class="fw-bold text-dark">
                                <i class="fa-solid fa-circle fa-2xs" style="color: <?= $c ?>"></i>
                                <?= ucwords($c) ?>
                            </a>
                        </div>
                        <small>
                            (<?= $key * 24 ?>)
                        </small>
                    </li>
                <?php endforeach  ?>


            </ul>
        </div>
        <!-- col -->
        <div class="col-md-9">

            <div class="row">
                <?php foreach ($produits as $key => $p) : ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card shadow-sm">
                            <a href="product-details&id=<?= $key ?>">
                                <img src="images/produits/<?= $key ?>.jpg" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><?= $p['name'] . ' ' . $p['color'] ?></h5>
                                <h5>
                                    <div class="fw-bold"><?= $p['price'] ?> DH</div>
                                    <small>
                                        <del class="fw-bold text-danger"><?= $p['old_price'] ?>DH</del>
                                    </small>
                                </h5>
                                <a href="cart" class="btn btn-dark">
                                    <i class="fas fa-shopping-cart"></i>
                                    Add to cart
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                <?php endforeach ?>
            </div>
            <!-- row -->

        </div>
        <!-- col -->
    </div>
    <!-- row -->


</div>
<!-- container -->
<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>