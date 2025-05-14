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
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
    <script src="{{ asset('js/date-time.js') }}"></script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin.header')

        @include('admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper card">
            <h1 class="text-center">Data Pengguna</h1>
            <div class="mb-1 d-flex justify-content-end" style="padding-right: 6px;">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahDataPengguna" style="border-radius: 20px">
                    Tambah Data 
                </button>
                @include('components.modal-tambah-data')
            </div>
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="p-0 card-body table-responsive" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap table-striped">
                                <thead class="bg-warning">
                                    <tr>
                                        <th class="bg-warning">Nama</th>
                                        <th class="bg-warning">Email</th>
                                        <th class="bg-warning">Password</th>
                                        <th class="bg-warning">Role</th>
                                        <th class="bg-warning">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>******************</td>
                                        <td>{{ $item->role }}</td>
                                        {{-- <td>dd($item->role)</td> --}}
                                        {{-- <td>
                                            <form action="{{ route('data-pengguna.update', $item->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="text" name="name" value="{{ $item->name }}">
                                                <input type="email" name="email" value="{{ $item->email }}">
                                                <button type="submit">Update</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('data-pengguna.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Hapus</button>
                                            </form>
                                        </td> --}}
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-wrapper -->
            
            @include('admin.footer')
        </div>
        <!-- ./wrapper -->
        
    <!-- JQUERY (Pindahkan ke paling atas dari semua JS) -->
    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
    
    <!-- DataTables + Export Script -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    
    <!-- Bootstrap JS (setelah jQuery & DataTables) -->
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AdminLTE -->
    <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
