<header class="bg-primary shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-dark py-3">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center">
                <img src="<?= base_url('assets/images/ArTiKu_logo.png') ?>" alt="Logo" width="80px" height="70px;"
                     class="logo" />
                <span class="text-grey"></span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= current_url() == site_url() ? 'active' : '' ?>" 
                           href="<?= site_url() ?>">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('artikel') ?>">
                            Artikel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= current_url() == site_url('kontak') ? 'active' : '' ?>" 
                           href="<?= site_url('kontak') ?>">
                            Kontak
                        </a>
                    </li>
                    <?php if ($this->session->userdata('logged_in')): ?>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="<?= site_url('admin/dashboard') ?>">
                                <i class="fas fa-tachometer-alt me-1"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning" href="<?= site_url('auth/logout') ?>">
                                <i class="fas fa-sign-out-alt me-1"></i> Logout
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('login') ?>">
                                <i class="fas fa-sign-in-alt me-1"></i> Login
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
