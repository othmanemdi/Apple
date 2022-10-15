<?php

if (isset($_GET['page']) && preg_match("/^[a-zA-Z0-9_-]*$/", $_GET['page'])) {
    $page = htmlspecialchars(trim($_GET['page']));
} else {
    $page = "welcome";
}

$page_file = $page . ".php";

require_once 'Helpers/functions.php';
require_once 'database/db.php';

$admine_pages = scandir('admin/');
$website_pages = scandir('pages/');
$template = 'website';

if (in_array($page_file, $website_pages)) {
    require_once 'pages/' . $page_file;
} else if (in_array($page_file, $admine_pages)) {
    require_once 'admin/' . $page_file;
    $template = 'admin';
} else {
    require_once 'pages/404.php';
}


echo $content_php ?? "";

?>
<?php if ($template === 'website') : ?>
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
            <?php if (isset($_SESSION['color']) && isset($_SESSION['message'])) : ?>
                <div class="container mt-3">
                    <div class="alert alert-<?= $_SESSION['color'] ?>">
                        <?= $_SESSION['message'] ?>
                    </div>
                </div>
                <!-- container -->
            <?php
                unset($_SESSION['color']);
                unset($_SESSION['message']);
            endif ?>

            <?= $content_html ?? ""  ?>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <?php require_once "pages/body/script.php"; ?>
        <?= $content_js ?? "" ?>
    </body>

    </html>

<?php elseif ($template === 'admin') : ?>
    <!-- Admin LTE -->

    <!DOCTYPE html>
    <html lang="en">
    <?php require_once "admin/body/head.php"; ?>

    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            <?php require_once "admin/body/nav.php"; ?>

            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <?php require_once "admin/body/sidebar.php"; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <?= $content_html ?? ""  ?>
            </div>
            <!-- /.content-wrapper -->

            <?php require_once "admin/body/footer.php"; ?>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <?php require_once "admin/body/script.php"; ?>

    </body>

    </html>


<?php endif ?>