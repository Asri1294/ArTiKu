<?php $this->load->view('partials/head', ['title' => 'Feedback Pengguna']); ?>

<body style="background-color:rgb(223, 223, 223);">
    <div class="d-flex">
        <?php $this->load->view('partials/side_nav', ['active' => 'feedback']); ?>
        
        <div class="col-md-9 col-lg-10 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 fw-bold text-gray-800">Feedback Pengguna</h1>
            </div>
            
            <?php if (!empty($feedbacks)): ?>
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body p-0">
                        <div class="table-responsive" style="max-height: 500px; overflow-y: auto;">
                            <table class="table table-hover align-middle">
                                <thead class="table-light sticky-top">
                                    <tr>
                                        <th class="bg-light">ID</th>
                                        <th class="bg-light">Nama</th>
                                        <th class="bg-light">Email</th>
                                        <th class="bg-light">Pesan</th>
                                        <th class="bg-light">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($feedbacks as $feedback): ?>
                                        <tr>
                                            <td><?= $feedback->id ?></td>
                                            <td class="fw-medium"><?= $feedback->nama ?></td>
                                            <td><?= $feedback->email ?></td>
                                            <td><?= character_limiter($feedback->pesan, 60) ?></td>
                                            <td class="text-muted small">
                                                <?= date('d M Y', strtotime($feedback->created_at)) ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body text-center py-5">
                        <div class="bg-primary-light p-4 rounded-circle d-inline-block mb-3">
                            <i class="fas fa-comments fa-2x text-primary"></i>
                        </div>
                        <h5 class="text-muted">Belum ada feedback</h5>
                        <p class="text-muted">Pengguna belum mengirimkan feedback</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php $this->load->view('partials/footer'); ?>
</body>
</html>