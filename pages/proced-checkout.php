<?php

ob_start();

$title = "Proced To Checkout";

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>


<h1 class="my-4">Proced To Checkout Page</h1>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">





                <form class="row g-3">
                    <div class="col-md-4">
                        <label for="validationServer01" class="form-label">First name</label>
                        <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">Last name</label>
                        <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServerUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationServer03" class="form-label">City</label>
                        <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationServer04" class="form-label">State</label>
                        <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                        <div id="validationServer04Feedback" class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationServer05" class="form-label">Zip</label>
                        <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                            <label class="form-check-label" for="invalidCheck3">
                                Agree to terms and conditions
                            </label>
                            <div id="invalidCheck3Feedback" class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-dark" type="submit">Submit form</button>
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
                <div class="p-2">24 000,00 DH</div>
            </h3>
            <hr>

            <ul class="list-group mb-2">
                <li class="list-group-item bg-transparent">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="images/produits/1.jpg" width="50" alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3 fw-bold">
                            Iphone 13 MAX PRO BLUE
                            <h6>
                                <div class="fw-bold">12 000,00 DH</div>
                                <small>
                                    <del class="fw-bold text-danger">13 500,00 DH</del>
                                </small>
                            </h6>
                        </div>
                    </div>
                </li>

                <li class="list-group-item bg-transparent">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="images/produits/2.jpg" width="50" alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3 fw-bold">
                            Iphone 13 MAX PRO GOLD
                            <h6>
                                <div class="fw-bold">12 000,00 DH</div>
                                <small>
                                    <del class="fw-bold text-danger">13 500,00 DH</del>
                                </small>
                            </h6>
                        </div>
                    </div>
                </li>
            </ul>









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
                <div class=" fw-bold">Free</div>
            </div>

            <a href="thank-u-page" class="btn btn-dark btn-md fw-bold mt-3">Confirme Your Order</a>
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