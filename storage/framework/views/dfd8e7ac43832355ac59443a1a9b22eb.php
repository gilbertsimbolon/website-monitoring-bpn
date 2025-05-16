<!-- Modal Edit -->
<div class="modal fade" id="editModal-<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="editModalLabel-<?php echo e($item->id); ?>"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="<?php echo e(route('data.pengguna.update', $item->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel-<?php echo e($item->id); ?>">Edit Pengguna</h5>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" value="<?php echo e($item->name); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo e($item->email); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <select name="role" class="form-control" required>
                            <option value="Pegawai" <?php echo e($item->role === 'Pegawai' ? 'selected' : ''); ?>>Pegawai</option>
                            <option value="Admin" <?php echo e($item->role === 'Admin' ? 'selected' : ''); ?>>Admin</option>
                        </select>                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\website-monitoring-bpn\resources\views/components/modal-edit-data-pengguna.blade.php ENDPATH**/ ?>