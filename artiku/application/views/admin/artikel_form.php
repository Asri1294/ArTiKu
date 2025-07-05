<?php $this->load->view('partials/head', ['title' => isset($artikel) ? 'Edit Artikel' : 'Tambah Artikel']); ?>

<body style="background-color: rgb(228, 228, 228);">
    <div class="d-flex">
        <?php $this->load->view('partials/side_nav', ['active' => 'artikel']); ?>
        
        <div class="col-md-9 col-lg-10 main-content p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold"><?= isset($artikel) ? 'Edit Artikel' : 'Tambah Artikel Baru' ?></h2>
                <a href="<?= site_url('admin/artikel') ?>" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Kembali
                </a>
            </div>
            
            <div class="card shadow-sm">
                <div class="card-body">
                    <?= form_open(
                        isset($artikel) ? site_url('admin/update/'.$artikel->id) : site_url('admin/store'),
                        ['class' => 'needs-validation', 'novalidate' => '', 'method' => 'POST']
                    ) ?>

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Artikel</label>
                            <input type="text" class="form-control <?= (form_error('judul')) ? 'is-invalid' : '' ?>" 
                                   id="judul" name="judul" 
                                   value="<?= set_value('judul', isset($artikel) ? $artikel->judul : '') ?>" required>
                            <div class="invalid-feedback">
                                <?= form_error('judul') ? form_error('judul') : 'Judul artikel wajib diisi' ?>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="konten" class="form-label">Konten Artikel</label>
                            <textarea class="form-control" id="konten" name="konten" rows="10" required><?= set_value('konten', isset($artikel) ? $artikel->konten : '') ?></textarea>
                            <div class="invalid-feedback">
                                Konten artikel wajib diisi!
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" 
                                       id="draft" name="draft" value="1" 
                                       <?= set_checkbox('draft', '1', (isset($artikel) && $artikel->draft == 1) ? TRUE : FALSE) ?>>
                                <label class="form-check-label" for="draft">Simpan sebagai draft</label>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-end gap-2">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Simpan Artikel
                            </button>
                        </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('partials/footer'); ?>
</body>
</html>