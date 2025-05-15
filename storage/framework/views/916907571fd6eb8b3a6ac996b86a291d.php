<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="<?php echo e(route('admin.index')); ?>" method="POST" class="modal-content">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>

            <div class="modal-header">
                <h5 class="modal-title" id="editProfileLabel">Edit Profil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" value="<?php echo e(auth()->user()->name); ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo e(auth()->user()->email); ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password Baru</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label >Role</label>
                    <div class="form-control bg-light"><?php echo e(auth()->user()->role); ?></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>  <?php /**PATH C:\laragon\www\website-monitoring-bpn\resources\views/components/modal-edit-user.blade.php ENDPATH**/ ?>