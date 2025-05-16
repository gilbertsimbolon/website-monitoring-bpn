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
                    <div class="p-0 card-body table-responsive" style="height: 800px;">
                            <table class="table table-head-fixed text-nowrap table-striped" style="height: 800px">
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
                                        <td>
                                            @if($item->sertifikat_asli)
                                                <a href="{{ route('pengajuan.download', ['field' => 'sertifikasi_asli', 'filename' => basename($item->sertifikat_asli)]) }}" download>Unduh</a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if($item->akta_jual_beli)
                                                <a href="{{ route('pengajuan.download', ['field' => 'akta_jual_beli', 'filename' => basename($item->akta_jual_beli)]) }}" download>Unduh</a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if($item->surat_waris)
                                                <a href="{{ route('pengajuan.download', ['field' => 'surat_waris', 'filename' => basename($item->surat_waris)]) }}" download>Unduh</a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if($item->girik)
                                                <a href="{{ route('pengajuan.download', ['field' => 'girik', 'filename' => basename($item->girik)]) }}" download>Unduh</a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if($item->keterangan)
                                                <a href="{{ route('pengajuan.download', ['field' => 'keterangan', 'filename' => basename($item->keterangan)]) }}" download>Unduh</a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if($item->sppt_pbb)
                                                <a href="{{ route('pengajuan.download', ['field' => 'sppt_pbb', 'filename' => basename($item->sppt_pbb)]) }}" download>Unduh</a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>

                                        <td>{{ $item->denah_lokasi }}</td>

                                        <td>{{ $item->npwp }}</td>

                                        <td>
                                            @if($item->surat_kuasa)
                                                <a href="{{ route('pengajuan.download', ['field' => 'surat_kuasa', 'filename' => basename($item->surat_kuasa)]) }}" download>Unduh</a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if($item->formulir_permohonan)
                                                <a href="{{ route('pengajuan.download', ['field' => 'formulir_permohonan', 'filename' => basename($item->formulir_permohonan)]) }}" download>Unduh</a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('pengajuan.updateStatus', $item->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <select name="status" onchange="this.form.submit()">
                                                    <option value="proses" {{ $item->status == 'proses' ? 'selected' : '' }}>Proses</option>
                                                    <option value="verifikasi" {{ $item->status == 'verifikasi' ? 'selected' : '' }}>Verifikasi</option>
                                                    <option value="selesai" {{ $item->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                                    <option value="ditolak" {{ $item->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                                </select>
                                            </form>
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
