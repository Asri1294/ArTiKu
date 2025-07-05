<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <h5>ArTiKu</h5>
                <p>Platform Baca artikel dan Pengetahuan </p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <div class="col-md-4 mb-4 mb-md-0">
                <h5>Navigasi</h5>
                <ul class="list-unstyled">
                    <li><a href="<?= site_url() ?>" class="text-white">Beranda</a></li>
                    <li><a href="<?= site_url('artikel') ?>" class="text-white">Artikel</a></li>
                    <li><a href="<?= site_url('kontak') ?>" class="text-white">Kontak</a></li>
                </ul>
            </div>
            
            <div class="col-md-4">
                <h5>Kontak</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-envelope me-2"></i> info@ArTiKu.com</li>
                    <li><i class="fas fa-phone me-2"></i> +62 123 4567 890</li>
                    <li><i class="fas fa-map-marker-alt me-2"></i> Jakarta, Indonesia</li>
                </ul>
            </div>
        </div>
        
        <div class="row mt-4 pt-4 border-top border-secondary">
            <div class="col-12 text-center">
                <p class="mb-0">&copy; <?= date('Y') ?> ArTiKu Own. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
// Fungsi konfirmasi hapus data 
function confirmDeleteForm(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data yang dihapus tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#4361ee',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
      e.target.submit();
        }
    });
    return false;
}

// Tampilkan SweetAlert jika ada flashdata
<?php if ($this->session->flashdata('success')): ?>
    Swal.fire({
        icon: 'success',
        title: '<?= $this->session->flashdata('success') ?>',
        showConfirmButton: false,
        timer: 2000
    });
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
    Swal.fire({
        icon: 'error',
        title: '<?= $this->session->flashdata('error') ?>',
        showConfirmButton: false,
        timer: 2000
    });
<?php endif; ?>
</script>
</body>
</html>