<?php $this->load->view('partials/head', ['title' => 'Dashboard Admin']); ?>

<body style="background-color:rgb(228, 228, 228);">
    <div class="d-flex">
        <?php $this->load->view('partials/side_nav', ['active' => 'dashboard']); ?>
        
        <div class="col-md-9 col-lg-10 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 fw-bold text-gray-800">Dashboard</h1>
                <div class="text-muted"><?= date('l, d F Y') ?></div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary-light p-3 rounded me-3">
                                    <i class="fas fa-newspaper fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="card-title text-muted mb-1">Total Artikel</h5>
                                    <h2 class="fw-bold mb-0"><?= $artikel_count ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary-light p-3 rounded me-3">
                                    <i class="fas fa-comments fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="card-title text-muted mb-1">Total Feedback</h5>
                                    <h2 class="fw-bold mb-0"><?= $feedback_count ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0">Artikel Terbaru</h5>
                </div>
                <div class="card-body">
                    <?php if (!empty($latest_artikel)): ?>
                        <div class="list-group list-group-flush">
                            <?php foreach ($latest_artikel as $artikel): ?>
                                <a href="<?= site_url('admin/artikel/edit/'.$artikel->id) ?>" 
                                   class="list-group-item list-group-item-action border-0 py-3">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h6 class="mb-1 fw-bold"><?= $artikel->judul ?></h6>
                                            <p class="mb-1 text-muted small">
                                                <?= character_limiter(strip_tags($artikel->konten), 120) ?>
                                            </p>
                                        </div>
                                        <div class="text-end">
                                            <small class="text-muted d-block">
                                                <?= date('d M Y', strtotime($artikel->created_at)) ?>
                                            </small>
                                            <span class="badge <?= $artikel->draft ? 'bg-warning' : 'bg-success' ?>">
                                                <?= $artikel->draft ? 'Draft' : 'Published' ?>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-5">
                            <div class="bg-primary-light p-4 rounded-circle d-inline-block mb-3">
                                <i class="fas fa-inbox fa-2x text-primary"></i>
                            </div>
                            <h5 class="text-muted">Belum ada artikel</h5>
                            <p class="text-muted">Mulai dengan membuat artikel baru</p>
                            <a href="<?= site_url('admin/artikel/create') ?>" class="btn btn-primary">
                                <i class="fas fa-plus me-2"></i>Tambah Artikel
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('partials/footer'); ?>
</body>
</html>