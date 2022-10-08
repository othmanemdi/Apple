<?php

ob_start();

$title = "Product Details";


if (!isset($_GET["id"])) {
    $_SESSION['color'] = "danger";
    $_SESSION['message'] = "Id Introuvable";
    header('Location: shop');
    exit();
}

$produit_id = (int)$_GET["id"];

if ($produit_id <= 0) {
    $_SESSION['color'] = "danger";
    $_SESSION['message'] = "Id Incorrecte";
    header('Location: shop');
    exit();
}

if ($produit_id > count($produits)) {
    $_SESSION['color'] = "danger";
    $_SESSION['message'] = "Produits Introuvable";
    header('Location: shop');
    exit();
}

$p = $produits[$produit_id];

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>

<h1 class="my-4">Product Details Page </h1>

<div class="row">
    <div class="col-md-6">
        <img src="images/produits/<?= $produit_id ?>.jpg" class="img-fluid" alt="">
    </div>
    <!-- col -->
    <div class="col-md-6">
        <h2><?= $p['name'] . ' ' . $p['color'] ?></h2>
        <div class="text-warning mb-2">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod eos tenetur nam magnam corporis
            ratione voluptate eum, consequuntur impedit. Ab in numquam dolorum suscipit totam facilis unde
            minus nobis molestiae?
        </p>

        <form method="post">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="color" class="form-label">Colors</label>
                        <select class="form-select" aria-label="List Of Colors:">
                            <option selected>Red</option>
                            <option value="1">Black</option>
                            <option value="2">Blue</option>
                            <option value="3">Pink</option>
                        </select>
                    </div>
                </div>
                <!-- col -->

                <div class="col">
                    <div class="mb-3">
                        <label for="color" class="form-label">Storage:</label>
                        <select class="form-select" aria-label="List Of Storage:">
                            <option selected>250 Go</option>
                            <option value="1">512 Go</option>
                            <option value="2">1 024 Go</option>
                        </select>
                    </div>
                </div>
                <!-- col -->
            </div>
            <!-- row -->


            <h3>
                <span class="fw-bold"><?= $p['price'] ?> DH</span>
                <small>
                    <del class="fw-bold text-danger"><?= $p['old_price'] ?> DH</del>
                </small>
            </h3>

            <a href="cart" class="btn btn-dark btn-lg mt-2">
                <i class="fas fa-shopping-cart"></i>
                Add to cart
            </a>
        </form>

    </div>
    <!-- col -->
</div>
<!-- row -->
<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>