@extends('templates.main')

@section('title', 'Administrasi Kegiatan')
@section('content')
<div class="row mb-3">
    <div class="col-12 text-center mb-4">
        <h4 class="my-2">Administrasi Kegiatan</h4>
        <p>Seluruh tahapan administrasi harus dipenuhi untuk menyelesaikan administrasi kegiatan!</p>
    </div>
</div>

<div class="row g-2 mb-5">
    <div class="col-xl-12">
        <div class="card invoice-preview-card">
            <div class="card-body">
                <div class="row m-sm-1 m-0">
                    <div class="col-md-6 mb-md-0 mb-0 ps-0">
                        <div class="d-flex mb-1 gap-2 align-items-center">
                            <span class="fw-bold fs-4">Nama Ruas Jalan </span>
                        </div>
                        <p class="mb-2">Kecamatan</p>
                        <p>Tahun 2023</p>
                    </div>
                    <div class="col-md-6 mb-md-0 mb-0 ps-0">
                        <div class="d-flex mb-1 gap-2 align-items-center">
                            <span class="fw-bold fs-4">Nama Kategori Kegiatan </span>
                        </div>
                        <p class="mb-2">Nama Penyedia Jasa</p>
                        <p>Nama Jenis Kegiatan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row gap-sm-0 gap-3">
    <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
        <a href="{{ url('administration/stage_1') }}" class="text-white">
            <div class="card bg-danger border border-label-dark rounded">
                <div class="card-body">
                    <div class="py-3 text-center">
                        <span class="badge bg-label-danger my-3 rounded-2 p-2">
                            <i class="ti ti-x ti-md"></i>
                        </span>
                        <h4 class="mb-2 text-white">1. Review Berita Acara Hasil Pelelangan (Oleh PPK)</h4>
                        <p>Belum Lengkap</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
        <a href="{{ url('administration/stage_2') }}" class="text-white">
            <div class="card bg-danger border border-label-dark rounded">
                <div class="card-body">
                    <div class="py-3 text-center">
                        <span class="badge bg-label-danger my-3 rounded-2 p-2">
                            <i class="ti ti-x ti-md"></i>
                        </span>
                        <h4 class="mb-2 text-white">2. Klarifikasi kelengkapan berkas dan jaminan pelaksanaan (oleh Admin PPK)</h4>
                        <p>Belum Lengkap</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
        <a href="{{ url('administration/stage_3') }}" class="text-white">
            <div class="card bg-danger border border-label-dark rounded">
                <div class="card-body">
                    <div class="py-3 text-center">
                        <span class="badge bg-label-danger my-3 rounded-2 p-2">
                            <i class="ti ti-x ti-md"></i>
                        </span>
                        <h4 class="mb-2 text-white">3. Meeting penandatanganan Surat Perintah Kerja (SPK) (oleh Penyedia Jasa)</h4>
                        <p>Belum Lengkap</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
        <a href="javascript:void(0);" class="text-white">
            <div class="card bg-danger border border-label-dark rounded">
                <div class="card-body">
                    <div class="py-3 text-center">
                        <span class="badge bg-label-danger my-3 rounded-2 p-2">
                            <i class="ti ti-x ti-md"></i>
                        </span>
                        <h4 class="mb-2 text-white">4. Pengajuan uang muka (oleh Penyedia Jasa)</h4>
                        <p>Belum Lengkap</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
        <a href="javascript:void(0);" class="text-white">
            <div class="card bg-success border border-label-dark rounded">
                <div class="card-body">
                    <div class="py-3 text-center">
                        <span class="badge bg-label-success my-3 rounded-2 p-2">
                            <i class="ti ti-check ti-md"></i>
                        </span>
                        <h4 class="mb-2 text-white">5. Pengajuan termin bulanan (oleh Penyedia Jasa)</h4>
                        <p>Lengkap</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
        <a href="javascript:void(0);" class="text-white">
            <div class="card bg-danger border border-label-dark rounded">
                <div class="card-body">
                    <div class="py-3 text-center">
                        <span class="badge bg-label-danger my-3 rounded-2 p-2">
                            <i class="ti ti-x ti-md"></i>
                        </span>
                        <h4 class="mb-2 text-white">6. Pengajuan Provisional Hand Over (PHO) (oleh Penyedia Jasa)</h4>
                        <p>Belum Lengkap</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
        <a href="javascript:void(0);" class="text-white">
            <div class="card bg-danger border border-label-dark rounded">
                <div class="card-body">
                    <div class="py-3 text-center">
                        <span class="badge bg-label-danger my-3 rounded-2 p-2">
                            <i class="ti ti-x ti-md"></i>
                        </span>
                        <h4 class="mb-2 text-white">7. Pemeriksaan daftar simak & back up (oleh Tim PPK)</h4>
                        <p>Belum Lengkap</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
        <a href="javascript:void(0);" class="text-white">
            <div class="card bg-danger border border-label-dark rounded">
                <div class="card-body">
                    <div class="py-3 text-center">
                        <span class="badge bg-label-danger my-3 rounded-2 p-2">
                            <i class="ti ti-x ti-md"></i>
                        </span>
                        <h4 class="mb-2 text-white">8. Pengajuan sekaligus/terakhir 100% (oleh Penyedia Jasa)</h4>
                        <p>Belum Lengkap</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
        <a href="javascript:void(0);" class="text-white">
            <div class="card bg-danger border border-label-dark rounded">
                <div class="card-body">
                    <div class="py-3 text-center">
                        <span class="badge bg-label-danger my-3 rounded-2 p-2">
                            <i class="ti ti-x ti-md"></i>
                        </span>
                        <h4 class="mb-2 text-white">9. Pengajuan Final Hand Over (FHO) (oleh Penyedia Jasa)</h4>
                        <p>Belum Lengkap</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

</div>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script>

</script>
@endsection
