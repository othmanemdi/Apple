<?php


if (isset($_GET['page']) && preg_match("/^[a-zA-Z0-9_-]*$/", $_GET['page'])) {
    $page = htmlspecialchars(trim($_GET['page']));
} else {
    $page = "welcome";
}


$page_file = $page . ".php";
$pages = scandir('pages/');

require_once 'database/db.php';
require_once 'Helpers/functions.php';

if (in_array($page_file, $pages)) {
    require_once 'pages/' . $page_file;
} else {
    require_once 'pages/404.php';
}
echo $content_php ?? "";

?>


<!doctype html>
<html lang="en">

<head>
    <?php require_once "pages/body/head.php"; ?>

    <?= $content_css ?? "" ?>
</head>

<body class="bg-site">
    <header>
        <?php require_once "pages/body/nav.php"; ?>
    </header>
    <main>
        <div class="container mt-5">
            <?php if (isset($_SESSION['color']) && isset($_SESSION['message'])) : ?>
                <div class="alert alert-<?= $_SESSION['color'] ?>">
                    <?= $_SESSION['message'] ?>
                </div>
            <?php
                unset($_SESSION['color']);
                unset($_SESSION['message']);
            endif ?>

            <?= $content_html ?? ""  ?>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <?php require_once "pages/body/script.php"; ?>
    <?= $content_js ?? "" ?>
</body>

</html>