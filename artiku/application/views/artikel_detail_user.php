<?php $this->load->view('partials/head', ['title' => $artikel->judul]); ?>

<body style="background-color:rgb(237, 238, 238);">
    <div class="container py-5">
        <h1 class="mb-3"><?= htmlspecialchars($artikel->judul) ?></h1>
        <p class="text-muted small mb-4"><?= date('d M Y', strtotime($artikel->created_at)) ?></p>

        <?php if ($artikel->gambar): ?>
            <img src="<?= base_url('uploads/'.$artikel->gambar) ?>"
                 class="img-fluid mb-4"
                 style="width:100%; max-height:400px; object-fit:cover;">
        <?php endif; ?>

        <div class="content mb-5">
            <?= $artikel->konten ?>
        </div>

        <a href="<?= site_url('artikel') ?>" class="btn btn-secondary">
            ← Kembali ke Daftar Artikel
        </a>
    </div>

    <?php $this->load->view('partials/footer'); ?>
</body>
</html>
