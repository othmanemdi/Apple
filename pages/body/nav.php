<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="welcome"><i class="fab fa-apple"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link <?= $page == 'welcome' ? 'active' : '' ?>" href="welcome">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= in_array($page, ['shop', 'product-details']) ? 'active' : '' ?>" href="shop">Shop</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= in_array($page, ['cart', 'proced-checkout', 'thank-u-page']) ? 'active' : '' ?>" href="cart">Cart</a>
                </li>

            </ul>

        </div>
    </div>
</nav>