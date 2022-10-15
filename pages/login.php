<?php

ob_start();

$title = "Login page";



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
                    SE CONNECTER
                </h3>


                <h5 class="text-center">
                    Clients enregistrés
                </h5>
                <p class="text-center">
                    Si vous avez un compte, connectez-vous avec votre adresse email.
                </p>


                <form method="post">

                    <div class="form-group mb-3">
                        <label class="form-label" for="email">Adresse mail:</label>

                        <input name="email" type="email" class="form-control" id="email" placeholder="Veuillez saisir votre adresse mail SVP !">


                    </div>


                    <div class="form-group mb-3">
                        <label class="form-label" for="password">Mot de passe:</label>

                        <input name="password" type="password" class="form-control" id="password" name="password" placeholder="Veuillez saisir votre Mot de passe SVP !">

                    </div>


                    <div class="d-flex mb-3">
                        <div class="me-auto p-2">
                            <a href="dashboard" class="btn btn-dark" name="login">
                                Connexion
                            </a>
                        </div>
                        <div class="p-2">
                            <a href="forgotpassword" class="text-dark">
                                Mot de passe oublier:
                            </a>
                        </div>
                    </div>

                </form>


                <h5 class="text-center mt-4">Nouveaux clients</h5>


                <hr>

                <p class="text-center">
                    La création d’un compte a de nombreux avantages : consultation rapide, sauvegarder plusieurs adresses, suivre les commandes, et bien plus encore.
                </p>

                <div class="d-flex justify-content-center">
                    <a href="register" class="btn btn-dark text-white mt-4 text-center">Créer un compte</a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- container -->



<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>