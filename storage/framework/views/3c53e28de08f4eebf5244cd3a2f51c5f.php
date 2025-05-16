<div class="modal fade" id="tambahDataPengguna" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="<?php echo e(route('data.pengguna.store')); ?>" method="POST" class="modal-content">
            <?php echo csrf_field(); ?>

            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataLabel">Tambah Pengguna</h5>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" class="form-control" required>
                        <option value="pegawai">Pegawai</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div><?php /**PATH C:\laragon\www\website-monitoring-bpn\resources\views/components/modal-tambah-data.blade.php ENDPATH**/ ?>