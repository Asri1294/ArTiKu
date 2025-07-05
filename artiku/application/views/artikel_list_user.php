<?php $this->load->view('partials/head', ['title' => 'Artikel']); ?>

<body style="background-color:rgb(223, 223, 223);">
    <div class="container py-5">
        <h1 class="mb-4">Daftar Artikel</h1>

        <?php if (!empty($artikels)) : ?>
            <div class="row">
                <?php foreach ($artikels as $artikel) : ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <?php if ($artikel->gambar): ?>
                                <img src="<?= base_url('uploads/'.$artikel->gambar) ?>" 
                                     class="card-img-top"
                                     style="opacity:0.5; height:200px; object-fit:cover;">
                            <?php endif; ?>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?= htmlspecialchars($artikel->judul) ?></h5>
                                <p class="card-text text-muted mb-4">
                                    <?= character_limiter(strip_tags($artikel->konten), 100) ?>
                                </p>
                                <a href="<?= site_url('artikel/' . $artikel->id) ?>" class="mt-auto btn btn-primary">
                                    Baca Selengkapnya
                                </a>
                            </div>
                            <div class="card-footer text-muted small">
                                <?= date('d M Y', strtotime($artikel->created_at)) ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <div class="text-center py-5">
                <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">Belum ada artikel yang dipublikasikan</h5>
            </div>
        <?php endif; ?>

        <a href="<?= site_url('/') ?>" class="btn btn-link mt-4">
            ← Kembali ke Beranda
        </a>
    </div>

    <?php $this->load->view('partials/footer'); ?>
</body>
</html>
