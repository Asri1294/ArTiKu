<div class="col-md-3 col-lg-2 bg-dark sidebar p-0" style="min-height: 100vh; position: sticky; top: 0; box-shadow: 0 0 15px rgba(0,0,0,0.1);">
    <div class="p-4 text-center border-bottom border-secondary">
        <div class="bg-primary p-3 rounded-circle d-inline-block mb-3">
            <i class="fas fa-user-shield fa-2x text-white"></i>
        </div>
        <h5 class="mb-0 text-white">Admin Panel</h5>
        <small class="text-light">
            <?= $this->session->userdata('username') ?>
        </small>
    </div>
    
    <div class="p-3">
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a class="nav-link text-light d-flex align-items-center <?= ($active == 'dashboard') ? 'active fw-bold' : '' ?>" 
                   href="<?= site_url('admin/dashboard') ?>">
                    <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link text-light d-flex align-items-center <?= ($active == 'artikel') ? 'active fw-bold' : '' ?>" 
                   href="<?= site_url('admin/artikel') ?>">
                    <i class="fas fa-newspaper me-2"></i> Artikel
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light d-flex align-items-center <?= ($active == 'feedback') ? 'active fw-bold' : '' ?>" 
                   href="<?= site_url('admin/feedback') ?>">
                    <i class="fas fa-comments me-2"></i> Feedback
                </a>
            </li>
            <li class="nav-item mt-4 pt-3 border-top border-secondary">
                <a class="nav-link text-light d-flex align-items-center" 
                   href="<?= site_url('auth/logout') ?>">
                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                </a>
            </li>
        </ul>
    </div>
</div>