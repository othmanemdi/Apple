<?php

ob_start();

$title = "Cart";
// dd($_SESSION['cart_info']);

if (count($_SESSION['cart_info']) > 0) {
    $cart_info = $_SESSION['cart_info'];
} else {
    $_SESSION['color'] = "info";
    $_SESSION['message'] = "Votre panier est vide !!!";
    header('Location: shop');
    exit();
}

if (isset($_POST['delete_item'])) {
    $item = $_POST['item'];
    unset($_SESSION['cart_info'][$item]);
    $_SESSION['color'] = "success";
    $_SESSION['message'] = "Bien supprimer !!!";
    header('Location: cart');
    exit();
}


// dd($cart_info);

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>

<div class="container mt-5">


    <h1 class="my-4">Cart Page</h1>

    <div class="row">
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($cart_info as $key => $cart) :

                            $produit_id = $cart['produit_id'];
                            $produit_qt = $cart['produit_qt'];
                            $produit_info = $produits[$produit_id];
                            $price = $produit_info['price'];
                            $total_price = $price * $produit_qt;
                        ?>

                            <tr>
                                <td>
                                    <?= $key ?>
                                </td>
                                <td>
                                    <img src="<?= $produit_info['image'] ?>" width="40" alt="">
                                </td>
                                <th>
                                    <?= ucwords($produit_info['name'] . ' ' . $produit_info['color']) ?>
                                </th>
                                <td>


                                    <div class="input-group mb-3">
                                        <button class="btn btn-outline-dark fw-bold btn-sm" type="button" id="button-addon1">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <input name="qt" type="number" class="form-control text-center" value="<?= $produit_qt ?>">
                                        <button class="btn btn-outline-dark fw-bold btn-sm" type="button" id="button-addon1">
                                            <i class="fas fa-plus"></i>
                                        </button>

                                    </div>

                                </td>
                                <td>
                                    <div class="fw-bold">
                                        <?= _number_format($price) ?>
                                        DH</div>
                                    <small>
                                        <del class="fw-bold text-danger">
                                            <?= _number_format($produit_info['old_price']) ?>
                                            DH</del>
                                    </small>
                                </td>
                                <td>
                                    <div class="fw-bold">
                                        <?= _number_format($total_price) ?>
                                        DH</div>
                                </td>
                                <td>
                                    <form method="post">

                                        <input type="hidden" name="item" value="<?= $key ?>">

                                        <button name="delete_item" type="submit" class="btn btn-outline-danger fw-bold ">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        <?php endforeach  ?>
                    </tbody>
                </table>
            </div>
            <!-- table-responsive -->
        </div>
        <!-- col -->
        <div class="col">
            <div class="bg-light p-4">

                <h3 class="d-flex mb-3 fw-bold">
                    <div class="me-auto p-2">Total</div>
                    <div class="p-2">
                        <?= _number_format($total_cart_price) ?>
                        DH
                    </div>
                </h3>
                <hr>
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

                <a href="proced-checkout" class="btn btn-dark btn-md fw-bold mt-3">Proced To Checkout</a>
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