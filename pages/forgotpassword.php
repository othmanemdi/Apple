<?php

ob_start();

$title = "Register page";

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>

<div class="container mt-5">

    <div class="row justify-content-md-center ">
        <div class="col-6">

            <div class="bg-light p-5 rounded-pilla rounded-3">
                <h3 class="text-center mb-5">
                    MOT DE PASSE OUBLIÉ?
                </h3>

                <h5 class="text-center mb-5">
                    Veuillez entrer votre adresse email ci-dessous pour recevoir un lien de réinitialisation de mot de passe.
                </h5>



                <form method="post">

                    <div class="form-group mb-3">
                        <label class="form-label" for="email">Adresse mail:</label>

                        <input name="email" type="email" class="form-control" id="email" placeholder="Veuillez saisir votre adresse mail SVP !">

                    </div>

                    <div class="mt-4">

                        <button class="btn btn-dark" name="forgot_password_btn">
                            Réinitialiser mon mot de passe
                        </button>

                        <a href="login" class="btn btn-secondary">
                            Retour
                        </a>

                    </div>
                </form>


            </div>
        </div>

    </div>
</div>
<!-- container² -->



<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>