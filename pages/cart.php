<?php

ob_start();

$title = "Cart";


$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>



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
                    <tr>
                        <td>
                            <img src="images/produits/1.jpg" width="40" alt="">
                        </td>
                        <th>
                            Iphone 13 Pro Max Blue
                        </th>
                        <td>
                            <input name="qt" type="number" class="form-control w-50" value="1">
                        </td>
                        <td>
                            <div class="fw-bold">12 000,00 DH</div>
                            <small>
                                <del class="fw-bold text-danger">13 500,00 DH</del>
                            </small>
                        </td>
                        <td>
                            <div class="fw-bold">12 000,00 DH</div>
                        </td>
                        <td>
                            <a href="" class="fw-bold text-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="images/produits/2.jpg" width="40" alt="">
                        </td>
                        <th>
                            Iphone 13 Pro Max Gold
                        </th>
                        <td>
                            <input name="qt" type="number" class="form-control w-50" value="1">
                        </td>
                        <td>
                            <div class="fw-bold">12 000,00 DH</div>
                            <small>
                                <del class="fw-bold text-danger">13 500,00 DH</del>
                            </small>
                        </td>
                        <td>
                            <div class="fw-bold">12 000,00 DH</div>
                        </td>
                        <td>
                            <a href="" class="fw-bold text-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
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
                <div class="p-2">24 000,00 DH</div>
            </h3>
            <hr>
            <div class="d-flex">
                <div class="me-auto ">Items:</div>
                <div class="">3</div>
            </div>

            <div class="d-flex">
                <div class="me-auto ">Discount:</div>
                <div class=" text-danger">-200,00 DH</div>
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


<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>