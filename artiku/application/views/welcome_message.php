<?php $this->load->view('partials/head', ['title' => 'ArTiKu']); ?> 
<?php $this->load->view('partials/header'); ?>

<main class="py-5">
    <div class="container">
        <!-- Hero -->
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="card border-0 shadow-sm p-5 mb-5 bg-light rounded-3">
                    <img src="<?= base_url('assets/images/news.jpg') ?>" class="card-img-top img-fluid" style="max-height: 200px; opacity: 0.7; object-fit: cover;" alt="Banner"> </br>
                    <h3 class="display-4 fw-bold text-primary mb-4">Selamat Datang di ArTiKu!</h3>
                        <p class="lead mb-4">Temukan berbagai artikel menarik dan pengetahuan di website kami.</p>
                        <div class="d-flex justify-content-center gap-3">
                          <a href="<?= site_url('artikel') ?>" class="btn btn-primary">
                             <i class="fas fa-book-open me-2"></i>Baca Artikel
                          </a>
                        </div>
                </div>
            </div>
        </div>

        <!-- 2 Card Feature Box -->
        <div class="row mt-5">
            <!-- Card Artikel -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle bg-primary text-white mx-auto mb-4">
                            <i class="fas fa-newspaper fa-2x"></i>
                        </div>
                        <h3 class="card-title h5">Artikel Terkini</h3>
                        <p class="card-text">Temukan berbagai artikel menarik dan informatif yang diperbarui secara berkala.</p>
                    </div>
                </div>
            </div>

            <!-- Card Feedback -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle bg-success text-white mx-auto mb-4">
                            <i class="fas fa-comments fa-2x"></i>
                        </div>
                        <h3 class="card-title h5">Feedback</h3>
                        <p class="card-text">Berikan masukan dan saran Anda untuk perbaikan platform kami.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cuplikan Artikel -->
        <!-- Cuplikan Artikel -->
        <h3 class="mt-5 mb-3"> Artikel Terbaru</h3>
        <div class="row">
            <?php if (!empty($artikels)) : ?>
                <?php foreach ($artikels as $row): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <?php if ($row->gambar): ?>
                                <img src="<?= base_url('uploads/'.$row->gambar) ?>"
                                    class="card-img-top"
                                    style="opacity:0.5; height:200px; object-fit:cover;">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5>
                                    <a href="<?= site_url('artikel/'.$row->id) ?>" class="text-decoration-none">
                                        <?= htmlspecialchars($row->judul) ?>
                                    </a>
                                </h5>
                                <p><?= character_limiter(strip_tags($row->konten), 100) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-muted">Belum ada artikel dipublikasikan.</p>
            <?php endif; ?>
        </div>


        <!-- Cuplikan Feedback -->
        <h3 class="mt-5 mb-3">Feedback Pengunjung</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <?php if (!empty($feedbacks)) : ?>
                            <div style="max-height: 250px; overflow-y: auto;" class="px-4 pb-4 text-start">
                                <?php foreach ($feedbacks as $fb): ?>
                                    <div class="border-bottom pb-3 mb-3">
                                        <h6 class="mb-1"><?= htmlspecialchars($fb->nama) ?>
                                            <small class="text-muted float-end"><?= date('d M Y H:i', strtotime($fb->created_at)) ?></small>
                                        </h6>
                                        <p class="mb-0"><?= htmlspecialchars($fb->pesan) ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php else: ?>
                            <p class="text-muted">Belum ada feedback masuk.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php $this->load->view('partials/footer'); ?>
