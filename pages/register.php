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
                <h3 class="text-center mb-4">
                    CRÉER UN NOUVEAU COMPTE CLIENT
                </h3>

                <h5 class="text-center">
                    Informations personnelles
                </h5>

                <form method="post">

                    <div class="mb-3">

                        <label class="form-label" for="prenom">
                            Prénom:
                            (<span class="text-danger">*</span>)
                        </label>

                        <input name="prenom" type="text" class="form-control
                     " id="prenom" placeholder="Veuillez saisir votre prénom SVP !">

                    </div>


                    <div class="mb-3">
                        <label class="form-label" for="nom">Nom:</label>

                        <input name="nom" type="text" class="form-control" id="nom" placeholder="Veuillez saisir votre nom SVP !">


                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="email">Adresse mail:</label>

                        <input name="email" type="email" class="form-control" id="email" placeholder="Veuillez saisir votre adresse mail SVP !">

                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="password">Mot de passe:</label>

                        <input name="password" type="password" class="form-control" id="password" name="password" placeholder="Veuillez saisir votre Mot de passe SVP !">

                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="password_confirm">Confirmer le mot de passe:</label>

                        <input name="password_confirm" type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Veuillez confirmer le mot de passe SVP !">


                    </div>


                    <div class="mt-4">

                        <button class="btn btn-dark" name="register_btn">
                            Créer un compte
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