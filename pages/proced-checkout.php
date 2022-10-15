<?php

ob_start();

$title = "Proced To Checkout";


if (isset($_SESSION['cart_info'])) {
    $cart_info = $_SESSION['cart_info'];
} else {
    $_SESSION['color'] = "info";
    $_SESSION['message'] = "Votre panier est vide !!!";
    header('Location: shop');
    exit();
}

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>

<div class="container mt-5">

    <h1 class="my-4">Proced To Checkout Page</h1>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">





                    <form class="row g-3">
                        <div class="col-md-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name:" required>

                        </div>

                        <div class="col-md-4">
                            <label for="phone" class="form-label">Phone:</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone:" required>
                        </div>

                        <div class="col-md-4">
                            <label for="ciy" class="form-label">City:</label>
                            <input type="text" class="form-control" id="ciy" name="ciy" placeholder="City:" required>
                        </div>

                        <div class="col-md-12">
                            <label for="adresse" class="form-label">Adresse:</label>

                            <textarea class="form-control" name="adresse" id="adresse" cols="30" rows="10" placeholder="Your adresse please:"></textarea>
                        </div>

                    </form>





                </div>
            </div>
            <!-- card -->
        </div>
        <!-- col -->
        <div class="col">
            <div class="bg-light p-4">



                <h3 class="d-flex mb-3 fw-bold">
                    <div class="me-auto p-2">Total</div>
                    <div class="p-2"><?= _number_format($total_cart_price) ?> DH</div>
                </h3>
                <hr>

                <ul class="list-group mb-2">

                    <?php

                    foreach ($cart_info as $key => $cart) :

                        $produit_id = $cart['produit_id'];
                        $produit_qt = $cart['produit_qt'];
                        $produit_info = $produits[$produit_id];
                        $price = $produit_info['price'];
                        $total_price = $price * $produit_qt;
                    ?>

                        <li class="list-group-item bg-transparent">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="<?= $produit_info['image'] ?>" width="50" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3 fw-bold">
                                    <?= ucwords($produit_info['name'] . ' ' . $produit_info['color']) ?>
                                    <h6>
                                        <div class="fw-bold"> <?= _number_format($price) ?> DH</div>
                                        <small>
                                            <del class="fw-bold text-danger"><?= _number_format($produit_info['old_price']) ?> DH</del>
                                        </small>
                                    </h6>
                                </div>
                            </div>
                        </li>

                    <?php endforeach  ?>


                </ul>








                <div class="d-flex">
                    <div class="me-auto ">Items:</div>
                    <div class="fw-bold"><?= $total_cart_quantity ?></div>
                </div>

                <div class="d-flex">
                    <div class="me-auto ">Discount:</div>
                    <div class="fw-bold text-danger">0,00 DH</div>
                </div>

                <div class="d-flex">
                    <div class="me-auto ">Shipping Cost:</div>
                    <div class="fw-bold">Free</div>
                </div>

                <a href="thank-u-page" class="btn btn-dark btn-md fw-bold mt-3">Confirme Your Order</a>
            </div>
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