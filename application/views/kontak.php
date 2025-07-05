<?php $this->load->view('partials/head', ['title' => 'Hubungi Kami']); ?>
<?php $this->load->view('partials/header'); ?>

<main class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white border-0 pt-4">
                        <h3 class="text-center text-primary">Hubungi Kami</h3>
                        <p class="text-center text-muted">Kami senang mendengar masukan dan tanggapan dari Anda. Silakan isi form di bawah ini.</p>
                    </div>
                    
                    <div class="card-body p-4">
                        <?= form_open('kontak/send', ['class' => 'needs-validation', 'novalidate' => '']) ?>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : '' ?>" 
                                       id="nama" name="nama" value="<?= set_value('nama') ?>" required>
                                <div class="invalid-feedback">
                                    <?= form_error('nama') ? form_error('nama') : 'Nama lengkap wajib diisi' ?>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control <?= (form_error('email')) ? 'is-invalid' : '' ?>" 
                                       id="email" name="email" value="<?= set_value('email') ?>" required>
                                <div class="invalid-feedback">
                                    <?= form_error('email') ? form_error('email') : 'Email wajib diisi' ?>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label for="pesan" class="form-label">Pesan</label>
                                <textarea class="form-control <?= (form_error('pesan')) ? 'is-invalid' : '' ?>" 
                                          id="pesan" name="pesan" rows="5" required><?= set_value('pesan') ?></textarea>
                                <div class="invalid-feedback">
                                    <?= form_error('pesan') ? form_error('pesan') : 'Pesan wajib diisi' ?>
                                </div>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                </button>
                            </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('partials/footer'); ?>