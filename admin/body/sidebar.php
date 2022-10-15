<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="welcome" class="brand-link ml-3    ">
        <span class="brand-text font-weight-light">
            <i class="fab fa-apple"></i>
            Apple
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="admin/Adminlte/dist/img/user8-128x128.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="profile" class="d-block">Othmane MDI</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="dashboard" class="nav-link <?= $page === 'dashboard' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Tableau de bord
                        </p>
                    </a>
                </li>
                <li class="nav-header">Gestion de stock</li>

                <li class="nav-item">
                    <a href="commandes" class="nav-link <?= $page === 'commandes' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Commandes
                            <span class="right badge badge-warning">(5)</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="produits" class="nav-link <?= $page === 'produits' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Produits
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="categories" class="nav-link <?= $page === 'categories' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Catégories
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="couleurs" class="nav-link <?= $page === 'couleurs' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Couleurs
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="coupons" class="nav-link <?= $page === 'coupons' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Coupons
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="stock" class="nav-link <?= $page === 'stock' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Stock
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="clients" class="nav-link <?= $page === 'clients' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Clients
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="fournisseurs" class="nav-link <?= $page === 'fournisseurs' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Fournisseurs
                        </p>
                    </a>
                </li>

                <li class="nav-header">Comptabilité</li>

                <li class="nav-item">
                    <a href="logout" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>


                <!-- <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-chart-pie"></i>
                          <p>
                              Charts
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="../charts/chartjs.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>ChartJS</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="../charts/flot.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Flot</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="../charts/inline.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Inline</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="../charts/uplot.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>uPlot</p>
                              </a>
                          </li>
                      </ul>
                  </li> -->



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>