<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Monitoring | BPN</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('lte/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('lte/dist/css/adminlte.min.css')); ?>">
    <script src="<?php echo e(asset('js/date-time.js')); ?>"></script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php echo $__env->make('admin.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo $__env->make('admin.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper card">
            <h1 class="text-center">Data Pengguna</h1>
            <div class="mb-1 d-flex justify-content-end" style="padding-right: 6px;">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahDataPengguna" style="border-radius: 20px">
                    Tambah Data
                </button>
                <?php echo $__env->make('components.modal-tambah-data', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
            <div class="col-12">
                <div class="card" style="border-radius: 20px">
                    <!-- /.card-header -->
                    <div class="p-0 card-body table-responsive" style="height: 680px;">
                            <table class="table table-head-fixed text-nowrap table-striped">
                                <thead class="bg-warning" style="border-top-left-radius: 10px; border-top-right-radius: 10px" >
                                    <tr>
                                        <th class="bg-warning" style="border-top-left-radius: 10px">Nama</th>
                                        <th class="bg-warning">Email</th>
                                        <th class="bg-warning">Password</th>
                                        <th class="bg-warning">Role</th>
                                        <th class="bg-warning" style="width: 140px; border-top-right-radius: 10px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                        <td>******************</td>
                                        <td><?php echo e($item->role); ?></td>
                                        
                                        <td class="text-nowrap">
                                            <div class="gap-4" role="group">
                                                
                                                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                                    data-bs-target="#editModal-<?php echo e($item->id); ?>" title="Edit" style="width: 70px">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                            
                                                
                                                <form action="<?php echo e(route('data.pengguna.destroy', ['id' => $item->id])); ?>" method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Hapus" style="width: 70px">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </div>                                        
                                            <?php echo $__env->make('components.modal-edit-data-pengguna', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                        </td>                                                                     
                                    </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-wrapper -->

            <?php echo $__env->make('admin.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
        <!-- ./wrapper -->

    <!-- JQUERY (Pindahkan ke paling atas dari semua JS) -->
    <script src="<?php echo e(asset('lte/plugins/jquery/jquery.min.js')); ?>"></script>

    <!-- DataTables + Export Script -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>

    <!-- Bootstrap JS (setelah jQuery & DataTables) -->
    <script src="<?php echo e(asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AdminLTE -->
    <script src="<?php echo e(asset('lte/dist/js/adminlte.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\laragon\www\website-monitoring-bpn\resources\views/main/data-pengguna.blade.php ENDPATH**/ ?>