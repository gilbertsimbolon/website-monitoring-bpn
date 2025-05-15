<!-- Modal -->
<div class="modal fade" id="modalPengajuan" tabindex="-1" aria-labelledby="modalPengajuanLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" style="width: 90%">
        <div class="modal-content">
            <form action="{{ route('pengajuan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text-white modal-header bg-success">
                    <h5 class="modal-title fw-bold" id="modalPengajuanLabel">Formulir Pengajuan Sertifikat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <!-- Kolom 1: Identitas Diri -->
                        <div class="col-md-4 border-end">
                            <h6 class="mb-3 fw-bold">Identitas Diri</h6>
                
                            <div class="mb-2">
                                <label class="form-label">Nama Lengkap (wajib diisi)</label>
                                <input type="text" name="nama_lengkap" class="form-control" required>
                            </div>
                
                            <div class="mb-2">
                                <label class="form-label">Nomor HP (wajib diisi)</label>
                                <input type="text" name="nomor_hp" class="form-control" required>
                            </div>
                
                            <div class="mb-2">
                                <label class="form-label">NIK (wajib_diisi)</label>
                                <input type="text" name="nik" class="form-control" required>
                            </div>
                
                            <div class="mb-2">
                                <label class="form-label">No KK (wajib diisi)</label>
                                <input type="text" name="no_kk" class="form-control" required>
                            </div>
                
                            <div class="mb-2">
                                <label class="form-label">NPWP</label>
                                <input type="text" name="npwp" class="form-control">
                            </div>
                        </div>
                
                        <!-- Kolom 2: Bukti Kepemilikan Tanah -->
                        <div class="col-md-4 border-end">
                            <h6 class="mb-3 fw-bold">Bukti Kepemilikan Tanah</h6>
                
                            <div class="mb-2">
                                <label class="form-label">Sertifikasi Asli</label>
                                <input type="file" name="sertifikasi_asli" class="form-control">
                            </div>
                
                            <div class="mb-2">
                                <label class="form-label">Akta Jual Beli</label>
                                <input type="file" name="akta_jual_beli" class="form-control">
                            </div>
                
                            <div class="mb-2">
                                <label class="form-label">Surat Waris</label>
                                <input type="file" name="surat_waris" class="form-control">
                            </div>
                
                            <div class="mb-2">
                                <label class="form-label">Girik</label>
                                <input type="file" name="girik" class="form-control">
                            </div>
                
                            <div class="mb-2">
                                <label class="form-label">Denah Lokasi</label>
                                <input type="text" name="denah_lokasi" class="form-control" required>
                            </div>
                        </div>
                
                        <!-- Kolom 3: Dokumen Lain -->
                        <div class="col-md-4">
                            <h6 class="mb-3 fw-bold">Dokumen Lain</h6>
                
                            <div class="mb-2">
                                <label class="form-label">SPPT PBB</label>
                                <input type="file" name="sppt_pbb" class="form-control">
                            </div>
                
                            <div class="mb-2">
                                <label class="form-label">Surat Kuasa</label>
                                <input type="file" name="surat_kuasa" class="form-control">
                            </div>
                
                            <div class="mb-2">
                                <label class="form-label">Formulir Permohonan (wajib diisi)</label>
                                <input type="file" name="formulir_permohonan" class="form-control" required>
                            </div>
                
                            <div class="mb-2">
                                <label class="form-label">Keterangan dari Lurah/Camat/Kepala Desa</label>
                                <input type="file" name="keterangan" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>                

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Ajukan Sertifikat</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>