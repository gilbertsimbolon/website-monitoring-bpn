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
            <h1 class="text-center">Pengajuan Sertifikat</h1>
            <div class="col-12">
                <div class="card" style="border-radius: 20px">
                    <!-- /.card-header -->
                    <div class="p-0 card-body table-responsive" style="height: 710px;">
                            <table class="table table-head-fixed text-nowrap table-striped">
                                <thead class="bg-warning" style="border-top-left-radius: 10px; border-top-right-radius: 10px" >
                                    <tr>
                                        <th class="bg-success" style="border-top-left-radius: 10px">Nomor Permohonan</th>
                                        <th class="bg-success">Nama Lengkap</th>
                                        <th class="bg-success">Nomor Handphone</th>
                                        <th class="bg-success">NIK</th>
                                        <th class="bg-success">No KK</th>
                                        <th class="bg-success">Sertifikat Asli</th>
                                        <th class="bg-success">Akta Jual Beli</th>
                                        <th class="bg-success">Surat Waris</th>
                                        <th class="bg-success">Girik</th>
                                        <th class="bg-success">Keterangan</th>
                                        <th class="bg-success">SPPT PBB</th>
                                        <th class="bg-success">Denah Lokasi</th>
                                        <th class="bg-success">NPWP</th>
                                        <th class="bg-success">Surat Kuasa</th>
                                        <th class="bg-success">Formulir Permohonan</th>
                                        <th class="bg-success" style="width: 140px; border-top-right-radius: 10px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->nomor_permohonan }}</td>
                                        <td>{{ $item->nama_lengkap }}</td>
                                        <td>{{ $item->nomor_hp }}</td>
                                        <td>{{ $item->nik }}</td>
                                        <td>{{ $item->no_kk }}</td>
                                        <td>{{ $item->sertifikat_asli }}</td>
                                        <td>{{ $item->akta_jual_beli }}</td>
                                        <td>{{ $item->surat_waris }}</td>
                                        <td>{{ $item->girik }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td>{{ $item->sppt_pbb }}</td>
                                        <td>{{ $item->denah_lokasi }}</td>
                                        <td>{{ $item->npwp }}</td>
                                        <td>{{ $item->surat_kuasa }}</td>
                                        <td>{{ $item->formulir_permohonan }}</td>
                                        
                                        <td class="text-nowrap">
                                            <div class="gap-4" role="group">
                                                {{-- Edit --}}
                                                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                                    data-bs-target="#editModal-{{ $item->id }}" title="Edit" style="width: 70px">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                            
                                                {{-- Hapus --}}
                                                <form action="{{ route('data.pengguna.destroy', ['id' => $item->id]) }}" method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Hapus" style="width: 70px">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </div>                                        
                                            @include('components.modal-edit-data-pengguna')
                                        </td>                                                                     
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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