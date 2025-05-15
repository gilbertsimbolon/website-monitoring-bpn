<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Monitoring | BPN</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="d-flex justify-content-center align-items-center vh-100 bg-light">
            <div class="p-4 mx-auto shadow card"
                style="background-color: #ffe5e5; border-radius: 20px; width: 90%; max-width: 1000px;">
                <div class="flex-wrap row g-4 align-items-start">
                    <!-- Kiri: Logo dan Judul -->
                    <div class="col-md-6 d-flex align-items-center">
                        <img src="{{ asset('img/logo-bpn.png') }}" alt="Logo BPN" style="width: 100px; height: auto;" class="me-3">
                        <div>
                            <h2 class="mb-0 fw-bold text-uppercase" style="font-weight: bold">Website Monitoring</h2>
                            <h4 class="mb-0 fw-bold" style="font-weight: bold">Badan Pertanahan Nasional</h4>
                        </div>
                    </div>

                    <!-- Kanan: Fitur pencarian & pengajuan -->
                    <div class="col-md-6">
                        <div class="p-4 bg-white rounded shadow" style="border-radius: 20px;">
                            <form class="px-2 py-1 mb-3" style="border: 2px solid yellow; border-radius: 10px">
                                <label for="search" class="form-label">Tracking Status Pengajuan:</label>
                                <input type="text" id="search" class="form-control" placeholder="P-XXXXXXXXXXXXXXXXX">
                                <button type="submit" class="mt-2 w-100 btn btn-warning fw-bold">
                                    Tracking Proses
                                </button>
                            </form>

                            <!-- Tombol untuk membuka modal -->
                            <div class="px-2 py-1 mt-2" style="border: 2px solid green; border-radius: 10px">
                                <label>Ingin mengajukan sertifikat? Klik tombol di bawah ini:</label>
                                <button class="mt-2 btn btn-success w-100 fw-bold" data-bs-toggle="modal" data-bs-target="#modalPengajuan">
                                    Pengajuan Sertifikat
                                </button>
                                @include('components.modal-pengajuan-sertifikat')
                            </div>

                            <div class="px-2 py-1 mt-4" style="border: 2px solid gray; border-radius: 10px">
                                <label>Puas dengan layanan kami? Silakan isi feedback di bawah ini:</label>
                                <button class="mt-2 w-100 btn btn-secondary fw-bold">
                                    Penilaian Anda
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.modal-pengajuan-berhasil') 


    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('lte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ asset('lte/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('lte/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('lte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('lte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('lte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('lte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('lte/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('lte/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('lte/dist/js/pages/dashboard.js') }}"></script>
    @if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
                var modal = new bootstrap.Modal(document.getElementById('modalBerhasil'));
                modal.show();
            });
    </script>
    @endif
</body>

</html>
