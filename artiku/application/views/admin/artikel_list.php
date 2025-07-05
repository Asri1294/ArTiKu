<?php $this->load->view('partials/head', ['title' => 'Kelola Artikel']); ?>

<body style="background-color: rgb(228, 228, 228);">
    <div class="d-flex">
        <?php $this->load->view('partials/side_nav', ['active' => 'artikel']); ?>
        
        <div class="col-md-9 col-lg-10 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 fw-bold text-gray-800">Kelola Artikel</h1>
                <a href="<?= site_url('admin/artikel/create') ?>" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Tambah Artikel
                </a>
            </div>
            
            <?php if (!empty($artikels)): ?>
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive" style="max-height: 500px; overflow-y: auto;">
                            <table class="table table-hover align-middle">
                                <thead class="table-light sticky-top">
                                    <tr>
                                        <th class="bg-light">ID</th>
                                        <th class="bg-light">Judul</th>
                                        <th class="bg-light">Status</th>
                                        <th class="bg-light">Tanggal</th>
                                        <th class="bg-light">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($artikels as $artikel): ?>
                                        <tr>
                                            <td><?= $artikel->id ?></td>
                                            <td class="fw-medium"><?= $artikel->judul ?></td>
                                            <td>
                                                <span class="badge <?= $artikel->draft ? 'bg-warning' : 'bg-success' ?>">
                                                    <?= $artikel->draft ? 'Draft' : 'Published' ?>
                                                </span>
                                            </td>
                                            <td class="text-muted small">
                                                <?= date('d M Y', strtotime($artikel->created_at)) ?>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="<?= site_url('admin/update/'.$artikel->id) ?>"
                                                        class="btn btn-sm btn-outline-primary">
                                                         <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form method="POST"
                                                        action="<?= site_url('admin/artikel/delete/'.$artikel->id) ?>"
                                                        onsubmit="return confirmDeleteForm(event)">
                                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center py-5">
                        <div class="bg-primary-light p-4 rounded-circle d-inline-block mb-3">
                            <i class="fas fa-inbox fa-2x text-primary"></i>
                        </div>
                        <h5 class="text-muted">Belum ada artikel</h5>
                        <p class="text-muted">Mulai dengan membuat artikel baru</p>
                        <a href="<?= site_url('admin/artikel/create') ?>" class="btn btn-primary mt-2">
                            <i class="fas fa-plus me-2"></i>Tambah Artikel
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php $this->load->view('partials/footer'); ?>
</body>
</html>