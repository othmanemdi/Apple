<?php

ob_start();

$title = "Thank you for your purchase";

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>

<div class="container mt-5">


    <h1>Thank you</h1>

    <div class="alert alert-success mb-3 text-center">
        <h3>
            Thank you for your purchase
        </h3>

    </div>
    <div class=" text-center">
        <a href="shop" class="btn btn-lg btn-outline-dark fw-bold">Return to list of product</a>
    </div>

</div>
<!-- container -->
<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>