<!-- Modal Sukses -->
<div class="modal fade" id="modalBerhasil" tabindex="-1" aria-labelledby="modalBerhasilLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-success">
            <div class="text-white modal-header bg-success">
                <h5 class="modal-title" id="modalBerhasilLabel">Pengajuan Berhasil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Terima kasih, <strong><?php echo e(session('nama_lengkap')); ?></strong>!</p>
                <p>Pengajuan sertifikat Anda telah diterima.</p>
                <p><strong>Nomor Permohonan:</strong> <span class="text-success"><?php echo e(session('nomor_permohonan')); ?></span></p>
                <p>Silahkan cek status permohonan anda, di Tracking Status</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div> <?php /**PATH C:\laragon\www\website-monitoring-bpn\resources\views/components/modal-pengajuan-berhasil.blade.php ENDPATH**/ ?>