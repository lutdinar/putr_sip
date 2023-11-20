@extends('templates.main')
@section('title', 'Detail Penyedia Jasa')
@section('content')
<div
    class="d-flex flex-column flex-sm-row align-items-center justify-content-sm-between mb-4 text-center text-sm-start gap-2">
    <div class="mb-2 mb-sm-0">
        <h4 class="mb-1">Detail Penyedia Jasa</h4>
    </div>
    <a href="{{ url('consultants') }}" class="btn btn-label-primary">Kembali</a>
</div>

@if (session('status'))
<div class="alert <?= (session('status') == 'success') ? 'alert-success' : 'alert-danger' ?> alert-dismissible d-flex align-items-center" role="alert">
        <span class="alert-icon <?= (session('status') == 'success') ? 'text-success' : 'text-danger' ?> me-2">
            <i class="ti <?= (session('status') == 'success') ? 'ti-check' : 'ti-ban' ?> ti-xs"></i>
        </span>
    {{ session('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row">
    <!-- User Sidebar -->
    <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
        <!-- User Card -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="user-avatar-section">
                    <div class="d-flex align-items-center flex-column">
                        <img class="img-fluid rounded mb-3 pt-1 mt-4" src="{{ asset('assets/img/avatars/15.png') }}"
                             height="100" width="100" alt="User avatar" />
                        <div class="user-info text-center">
                            <h4 class="mb-2">{{ $consultant->name }}</h4>
                            <span class="badge bg-label-success mt-1">Terverifikasi</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-around flex-wrap mt-3 pt-3 pb-4 border-bottom">
                    <div class="d-flex align-items-start me-4 mt-3 gap-2">
                        <span class="badge bg-label-primary p-2 rounded"><i class="ti ti-briefcase ti-sm"></i></span>
                        <div>
                            <p class="mb-0 fw-semibold">1123</p>
                            <small>Total Pekerjaan</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mt-3 gap-2">
                        <span class="badge bg-label-primary p-2 rounded"><i class="ti ti-checkbox ti-sm"></i></span>
                        <div>
                            <p class="mb-0 fw-semibold">568</p>
                            <small>Pekerjaan Selesai</small>
                        </div>
                    </div>
                </div>

                <div class="info-container mt-4">
                    <small class="card-text text-uppercase">Detail Perusahaan</small>
                    <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-user text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Direktur:</span> <span>John Doe</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-users text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Personil:</span> <span>6 Orang</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-lock-check text-heading"></i>
                            <span class="fw-medium mx-2 text-heading">Akun:</span> <span
                                class="badge bg-label-danger">Tidak Aktif</span>
                        </li>
                    </ul>
                    <small class="card-text text-uppercase">Kontak Perusahaan</small>
                    <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-phone-call"></i><span class="fw-medium mx-2 text-heading">No.
                                Telepon:</span>
                            <span>{{ $consultant->phone }}</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-mail"></i><span class="fw-medium mx-2 text-heading">Email:</span>
                            <span>{{ $consultant->email }}</span>
                        </li>
                    </ul>
                    <small class="card-text text-uppercase">Alamat</small>
                    <ul class="list-unstyled mb-0 mt-3">
                        <li class="d-flex align-items-center mb-3">
                            <i class="ti ti-map-pin me-2"></i>
                            <div class="d-flex flex-wrap">
                                <span class="fw-medium me-2 text-heading">{{ $consultant->address }}</span>
                            </div>
                        </li>
                    </ul>

                    <div class="mt-3 d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary me-3" data-bs-target="#editUser"
                           data-bs-toggle="modal">Ubah</a>
                        <button type="button" class="btn btn-sm btn-danger me-3">Hapus</button>
                        <a href="javascript:void(0);" class="btn btn-sm btn-label-success suspend-user me-3">Aktifkan
                            Akun</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /User Card -->
        <!-- Plan Card -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start my-3">
                    <span class="badge bg-label-primary">Kelengkapan</span>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-1 fw-semibold text-heading">
                    <span>Profil</span>
                    <span>65% Completed</span>
                </div>
                <div class="progress mb-1" style="height: 8px">
                    <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                         aria-valuemax="100"></div>
                </div>
                <div class="d-grid w-100 mt-4">
                    <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">
                        <i class="ti ti-user-check me-2"></i> Verifikasi
                    </button>
                </div>
            </div>
        </div>
        <!-- /Plan Card -->
    </div>
    <!--/ User Sidebar -->

    <!-- User Content -->
    <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
        <!-- User Pills -->
        <ul class="nav nav-pills flex-column flex-md-row mb-4" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="true">
                    <i class="ti ti-user-check ti-xs me-1"></i>Profil
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-company-tab" data-bs-toggle="pill" data-bs-target="#pills-company"
                        type="button" role="tab" aria-controls="pills-company" aria-selected="false">
                    <i class="ti ti-link ti-xs me-1"></i> Badan &amp; Izin Usaha
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-personil-tab" data-bs-toggle="pill" data-bs-target="#pills-personil"
                        type="button" role="tab" aria-controls="pills-personil" aria-selected="false">
                    <i class="ti ti-users ti-xs me-1"></i> Personil
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-finance-tab" data-bs-toggle="pill" data-bs-target="#pills-finance"
                        type="button" role="tab" aria-controls="pills-finance" aria-selected="false">
                    <i class="ti ti-moneybag ti-xs me-1"></i>Keuangan & Pengalaman
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account"
                        type="button" role="tab" aria-controls="pills-account" aria-selected="false">
                    <i class="ti ti-lock ti-xs me-1"></i>Akun
                </button>
            </li>
        </ul>
        <!--/ User Pills -->
        <style>
            .nav~.tab-content {
                background: transparent;
            }

            .tab-content {
                padding: 0;
            }
        </style>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                 aria-labelledby="pills-profile-tab">
                <!-- Overview Company -->
                <div class="card card-action mb-5">
                    <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0">Akta Perusahaan</h5>
                        <div class="card-action-element">
                            <button class="btn btn-primary btn-sm btn-add-new-deed" type="button" data-bs-toggle="modal"
                                    data-bs-target="#addNewDeed">
                                <i class="ti ti-plus ti-xs me-1"></i>Tambah Akta Perusahaan
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="accordion accordion-flush accordion-arrow-left"
                             id="ecommerceBillingAccordionAddress">
                            <div class="accordion-item border-bottom">
                                <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap"
                                     id="headingHome">
                                    <a class="accordion-button collapsed" data-bs-toggle="collapse"
                                       data-bs-target="#ecommerceBillingAddressHome" aria-expanded="false"
                                       aria-controls="headingHome" role="button">
                                        <span>
                                            <span class="d-flex gap-2 align-items-baseline">
                                                <span class="h6 mb-1">Pendirian</span>
                                                <span class="badge bg-label-success">Default</span>
                                            </span>
                                            <span class="mb-0 text-muted">Akta Pendirian</span>
                                        </span>
                                    </a>
                                    <div class="d-flex gap-3 p-4 p-sm-0 pt-0 ms-1 ms-sm-0">
                                        <a href="javascript:void(0);" class="btn btn-danger btn-sm"><i
                                                class="ti ti-trash ti-sm"></i></a>
                                    </div>
                                </div>
                                <div id="ecommerceBillingAddressHome" class="accordion-collapse collapse"
                                     data-bs-parent="#ecommerceBillingAccordionAddress">
                                    <div class="accordion-body ps-4 ms-2">
                                        <h6 class="mb-1">Violet Mendoza</h6>
                                        <p class="mb-1">23 Shatinon Mekalan,</p>
                                        <p class="mb-1">Melbourne, VIC 3000,</p>
                                        <p class="mb-1">LondonUK</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border-bottom border-top-0">
                                <div class="accordion-header d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap"
                                     id="headingOffice">
                                    <a class="accordion-button collapsed" data-bs-toggle="collapse"
                                       data-bs-target="#ecommerceBillingAddressOffice" aria-expanded="false"
                                       aria-controls="headingOffice" role="button">
                                        <span class="d-flex flex-column">
                                            <span class="h6 mb-0">Perubahan</span>
                                            <span class="mb-0 text-muted">Akta Perubahan</span>
                                        </span>
                                    </a>
                                    <div class="d-flex gap-3 p-4 p-sm-0 pt-0 ms-1 ms-sm-0">
                                        <a href="javascript:void(0);" class="btn btn-danger btn-sm"><i
                                                class="ti ti-trash ti-sm"></i></a>
                                    </div>
                                </div>
                                <div id="ecommerceBillingAddressOffice" class="accordion-collapse collapse"
                                     aria-labelledby="headingOffice" data-bs-parent="#ecommerceBillingAccordionAddress">
                                    <div class="accordion-body ps-4 ms-2">
                                        <h6 class="mb-1">Violet Mendoza</h6>
                                        <p class="mb-1">45 Roker Terrace,</p>
                                        <p class="mb-1">Latheronwheel,</p>
                                        <p class="mb-1">KW5 8NW</p>
                                        <p class="mb-1">LondonUK</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Overview Company -->

                <!-- List Owner Company -->
                <div
                    class="d-flex flex-column flex-sm-row align-items-center justify-content-sm-between mb-4 text-center text-sm-start gap-2">
                    <div class="mb-2 mb-sm-0">
                        <h5 class="mb-1">Daftar Pemilik Perusahaan</h5>
                    </div>
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#addNewOwner" id="btn-add-owner">
                        <i class="ti ti-plus ti-xs me-1"></i>Tambah Pemilik
                    </button>
                </div>
                <div class="row mb-4 g-4">
                    <div class="col-12 col-xl-6 col-md-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="bg-label-primary rounded-3 text-center mb-3 pt-4">
                                    <img class="img-fluid"
                                         src="{{ asset('assets/img/illustrations/girl-with-laptop.png') }}"
                                         alt="Card girl image" width="140" />
                                </div>
                                <h4 class="mb-2 pb-1 text-wrap">Upcoming Webinar</h4>
                                <p class="small">
                                    <span class="badge rounded-pill bg-gradient-info text-white bg-glow">Direktur</span>
                                    <span
                                        class="badge rounded-pill bg-gradient-success text-white bg-glow">Pemilik</span>
                                </p>
                                <div class="row mb-3 g-3">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="avatar flex-shrink-0 me-2">
                                                <span class="avatar-initial rounded bg-label-primary">
                                                    <i class="ti ti-phone-call ti-md"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0 text-nowrap">0812123123</h6>
                                                <small>Telepon</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="avatar flex-shrink-0 me-2">
                                                <span class="avatar-initial rounded bg-label-primary">
                                                    <i class="ti ti-mail ti-md"></i>
                                                </span>
                                            </div>
                                            <div>
                                                <h6 class="mb-0 text-nowrap">lutdinarfadila10@gmail.com</h6>
                                                <small>Email</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#detailOwner"
                                   class="btn btn-primary w-100">Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ List Owner Company -->

                <!-- Activity Timeline -->
                <div class="card mb-4">
                    <h5 class="card-header">Timeline Aktivitas Pengguna</h5>
                    <div class="card-body pb-0">
                        <ul class="timeline mb-0">
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-primary"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0">12 Invoices have been paid</h6>
                                        <small class="text-muted">12 min ago</small>
                                    </div>
                                    <p class="mb-2">Invoices have been paid to the company</p>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)" class="me-3">
                                            <img src="{{ asset('assets/img/icons/misc/pdf.png') }}" alt="PDF image"
                                                 width="15" class="me-2" />
                                            <span class="fw-semibold text-heading">invoices.pdf</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-warning"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0">Client Meeting</h6>
                                        <small class="text-muted">45 min ago</small>
                                    </div>
                                    <p class="mb-2">Project meeting with john @10:15am</p>
                                    <div class="d-flex flex-wrap">
                                        <div class="avatar me-3">
                                            <img src="{{ asset('assets/img/avatars/3.png') }}" alt="Avatar"
                                                 class="rounded-circle" />
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Lester McCarthy (Client)</h6>
                                            <small>CEO of Pixinvent</small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-info"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0">Create a new project for client</h6>
                                        <small class="text-muted">2 Day Ago</small>
                                    </div>
                                    <p class="mb-2">5 team members in a project</p>
                                    <div class="d-flex align-items-center avatar-group">
                                        <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                             data-bs-placement="top" title="Vinnie Mostowy">
                                            <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar"
                                                 class="rounded-circle" />
                                        </div>
                                        <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                             data-bs-placement="top" title="Marrie Patty">
                                            <img src="{{ asset('assets/img/avatars/12.png') }}" alt="Avatar"
                                                 class="rounded-circle" />
                                        </div>
                                        <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                             data-bs-placement="top" title="Jimmy Jackson">
                                            <img src="{{ asset('assets/img/avatars/9.png') }}" alt="Avatar"
                                                 class="rounded-circle" />
                                        </div>
                                        <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                             data-bs-placement="top" title="Kristine Gill">
                                            <img src="{{ asset('assets/img/avatars/6.png') }}" alt="Avatar"
                                                 class="rounded-circle" />
                                        </div>
                                        <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                             data-bs-placement="top" title="Nelson Wilson">
                                            <img src="{{ asset('assets/img/avatars/4.png') }}" alt="Avatar"
                                                 class="rounded-circle" />
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent border-0">
                                <span class="timeline-point timeline-point-success"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0">Design Review</h6>
                                        <small class="text-muted">5 days Ago</small>
                                    </div>
                                    <p class="mb-0">Weekly review of freshly prepared design for our new app.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/ Activity Timeline -->

                <!-- Task history table -->
                <div class="card mb-4">
                    <h6 class="card-header">Daftar Riwayat Pekerjaan</h6>
                    <div class="table-responsive mb-3">
                        <table class="table datatable-invoice border-top">
                            <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th><i class="ti ti-trending-up"></i></th>
                                <th>Total</th>
                                <th>Issued Date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!--/ Task history table -->
            </div>

            <div class="tab-pane fade" id="pills-company" role="tabpanel" aria-labelledby="pills-company-tab">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row mt-1">
                            <!-- Navigation -->
                            <div class="col-lg-3 col-md-4 col-12 mb-md-0 mb-3 border-end">
                                <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
                                    <ul class="nav nav-align-left nav-pills flex-column">
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab"
                                                    data-bs-target="#company-sbu">
                                                <i class="ti ti-credit-card me-1 ti-sm"></i>
                                                <span class="align-middle fw-medium">SBU</span>
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#company-iujk">
                                                <i class="ti ti-briefcase me-1 ti-sm"></i>
                                                <span class="align-middle fw-medium">IUJK</span>
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#company-siup">
                                                <i class="ti ti-rotate-clockwise-2 me-1 ti-sm"></i>
                                                <span class="align-middle fw-medium">SIUP</span>
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#company-nib">
                                                <i class="ti ti-box me-1 ti-sm"></i>
                                                <span class="align-middle fw-medium">NIB</span>
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="d-none d-md-block">
                                        <div class="mt-4">
                                            <img src="{{ asset('assets/img/illustrations/girl-sitting-with-laptop.png') }}"
                                                 class="img-fluid" width="270" alt="FAQ Image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Navigation -->

                            <!-- FAQ's -->
                            <div class="col-lg-9 col-md-8 col-12">
                                <div class="tab-content py-0">
                                    <div class="tab-pane fade show active" id="company-sbu" role="tabpanel">
                                        <div class="row">
                                            <div class="col col-md-6">
                                                <div class="d-flex mb-3 gap-3">
                                                    <div class="float-start">
                                                        <span class="badge bg-label-primary rounded-2 p-2">
                                                            <i class="ti ti-credit-card ti-lg"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h4 class="mb-0">
                                                            <span class="align-middle">SBU</span>
                                                        </h4>
                                                        <small>Sertifikat Badan Usaha</small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col col-md-6">
                                                <div class="float-end">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                            data-bs-toggle="modal" data-bs-target="#addSBU">
                                                        <i class="ti ti-plus ti-xs me-1"></i>Tambah SBU
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="company-iujk" role="tabpanel">
                                        <div class="row">
                                            <div class="col col-md-6">
                                                <div class="d-flex mb-3 gap-3">
                                                    <div class="float-start">
                                                        <span class="badge bg-label-primary rounded-2 p-2">
                                                            <i class="ti ti-briefcase ti-lg"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h4 class="mb-0">
                                                            <span class="align-middle">IUJK</span>
                                                        </h4>
                                                        <small>Izin Usaha Jasa Konstruksi</small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col col-md-6">
                                                <div class="float-end">
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addIUJK">
                                                        <i class="ti ti-plus ti-xs me-1"></i>Tambah IUJK
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="company-siup" role="tabpanel">
                                        <div class="row">
                                            <div class="col col-md-6">
                                                <div class="d-flex mb-3 gap-3">
                                                    <div class="float-start">
                                                        <span class="badge bg-label-primary rounded-2 p-2">
                                                            <i class="ti ti-rotate-clockwise-2 ti-lg"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h4 class="mb-0">
                                                            <span class="align-middle">SIUP</span>
                                                        </h4>
                                                        <small>Surat Izin Usaha Perdagangan</small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col col-md-6">
                                                <div class="float-end">
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addSIUP">
                                                        <i class="ti ti-plus ti-xs me-1"></i>Tambah SIUP
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="company-nib" role="tabpanel">
                                        <div class="row">
                                            <div class="col col-md-6">
                                                <div class="d-flex mb-3 gap-3">
                                                    <div class="float-start">
                                                        <span class="badge bg-label-primary rounded-2 p-2">
                                                            <i class="ti ti-box ti-lg"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h4 class="mb-0">
                                                            <span class="align-middle">NIB</span>
                                                        </h4>
                                                        <small>Nomor Induk Berusaha</small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col col-md-6">
                                                <div class="float-end">
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addNIB">
                                                        <i class="ti ti-plus ti-xs me-1"></i>Tambah NIB
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /FAQ's -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-personil" role="tabpanel" aria-labelledby="pills-personil-tab">
                <div class="card card-action mb-3">
                    <div class="card-header align-items-center py-4">
                        <h5 class="card-action-title mb-0">Daftar Personil</h5>
                        <div class="card-action-element">
                            <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                                    data-bs-target="#addNewPersonil">
                                <i class="ti ti-plus ti-xs me-1"></i>
                                Tambah Personil
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="dropdown btn-pinned">
                                    <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical text-muted"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mx-auto my-3">
                                    <img src="{{ asset('assets/img/avatars/3.png') }}" alt="Avatar Image"
                                         class="rounded-circle w-px-100" />
                                </div>
                                <h4 class="mb-1 card-title">Mark Gilbert</h4>
                                <span class="pb-1">UI Designer</span>
                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                    <a href="javascript:;" class="me-1"><span
                                            class="badge bg-label-secondary">Figma</span></a>
                                    <a href="javascript:;"><span class="badge bg-label-warning">Sketch</span></a>
                                </div>

                                <div class="d-flex align-items-center justify-content-around my-3 py-1">
                                    <div>
                                        <h4 class="mb-0">18</h4>
                                        <span>Projects</span>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">834</h4>
                                        <span>Tasks</span>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">129</h4>
                                        <span>Connections</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-3"><i
                                            class="ti-xs me-1 ti ti-user-check me-1"></i>Connected</a>
                                    <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i
                                            class="ti ti-mail ti-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="dropdown btn-pinned">
                                    <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical text-muted"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mx-auto my-3">
                                    <img src="{{ asset('assets/img/avatars/12.png') }}" alt="Avatar Image"
                                         class="rounded-circle w-px-100" />
                                </div>
                                <h4 class="mb-1 card-title">Eugenia Parsons</h4>
                                <span class="pb-1">Developer</span>
                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                    <a href="javascript:;" class="me-1"><span
                                            class="badge bg-label-danger">Angular</span></a>
                                    <a href="javascript:;"><span class="badge bg-label-info">React</span></a>
                                </div>

                                <div class="d-flex align-items-center justify-content-around my-3 py-1">
                                    <div>
                                        <h4 class="mb-0">112</h4>
                                        <span>Projects</span>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">23.1k</h4>
                                        <span>Tasks</span>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">1.28k</h4>
                                        <span>Connections</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="javascript:;"
                                       class="btn btn-label-primary d-flex align-items-center me-3"><i
                                            class="ti-xs me-1 ti ti-user-plus me-1"></i>Connect</a>
                                    <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i
                                            class="ti ti-mail ti-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="dropdown btn-pinned">
                                    <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical text-muted"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mx-auto my-3">
                                    <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar Image"
                                         class="rounded-circle w-px-100" />
                                </div>
                                <h4 class="mb-1 card-title">Francis Byrd</h4>
                                <span class="pb-1">Developer</span>
                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                    <a href="javascript:;" class="me-1"><span
                                            class="badge bg-label-info">React</span></a>
                                    <a href="javascript:;"><span class="badge bg-label-primary">HTML</span></a>
                                </div>

                                <div class="d-flex align-items-center justify-content-around my-3 py-1">
                                    <div>
                                        <h4 class="mb-0">32</h4>
                                        <span>Projects</span>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">1.25k</h4>
                                        <span>Tasks</span>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">890</h4>
                                        <span>Connections</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="javascript:;"
                                       class="btn btn-label-primary d-flex align-items-center me-3"><i
                                            class="ti-xs me-1 ti ti-user-plus me-1"></i>Connect</a>
                                    <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i
                                            class="ti ti-mail ti-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="dropdown btn-pinned">
                                    <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical text-muted"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mx-auto my-3">
                                    <img src="{{ asset('assets/img/avatars/8.png') }}" alt="Avatar Image"
                                         class="rounded-circle w-px-100" />
                                </div>
                                <h4 class="mb-1 card-title">Leon Lucas</h4>
                                <span class="pb-1">UI/UX Designer</span>
                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                    <a href="javascript:;" class="me-1"><span
                                            class="badge bg-label-secondary">Figma</span></a>
                                    <a href="javascript:;" class="me-1"><span
                                            class="badge bg-label-warning">Sketch</span></a>
                                    <a href="javascript:;"><span class="badge bg-label-primary">Photoshop</span></a>
                                </div>

                                <div class="d-flex align-items-center justify-content-around my-3 py-1">
                                    <div>
                                        <h4 class="mb-0">86</h4>
                                        <span>Projects</span>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">12.4k</h4>
                                        <span>Tasks</span>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">890</h4>
                                        <span>Connections</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="javascript:;"
                                       class="btn btn-label-primary d-flex align-items-center me-3"><i
                                            class="ti-xs me-1 ti ti-user-plus me-1"></i>Connect</a>
                                    <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i
                                            class="ti ti-mail ti-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="dropdown btn-pinned">
                                    <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical text-muted"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mx-auto my-3">
                                    <img src="{{ asset('assets/img/avatars/9.png') }}" alt="Avatar Image"
                                         class="rounded-circle w-px-100" />
                                </div>
                                <h4 class="mb-1 card-title">Jayden Rogers</h4>
                                <span class="pb-1">Full Stack Developer</span>
                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                    <a href="javascript:;" class="me-1"><span
                                            class="badge bg-label-info">React</span></a>
                                    <a href="javascript:;" class="me-1"><span
                                            class="badge bg-label-danger">Angular</span></a>
                                    <a href="javascript:;"><span class="badge bg-label-primary">HTML</span></a>
                                </div>

                                <div class="d-flex align-items-center justify-content-around my-3 py-1">
                                    <div>
                                        <h4 class="mb-0">244</h4>
                                        <span>Projects</span>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">23.8k</h4>
                                        <span>Tasks</span>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">2.14k</h4>
                                        <span>Connections</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-3"><i
                                            class="ti-xs me-1 ti ti-user-check me-1"></i>Connected</a>
                                    <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i
                                            class="ti ti-mail ti-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="dropdown btn-pinned">
                                    <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-dots-vertical text-muted"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mx-auto my-3">
                                    <img src="{{ asset('assets/img/avatars/10.png') }}" alt="Avatar Image"
                                         class="rounded-circle w-px-100" />
                                </div>
                                <h4 class="mb-1 card-title">Jeanette Powell</h4>
                                <span class="pb-1">SEO</span>
                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                    <a href="javascript:;" class="me-1"><span
                                            class="badge bg-label-success">Writing</span></a>
                                    <a href="javascript:;"><span class="badge bg-label-secondary">Analysis</span></a>
                                </div>

                                <div class="d-flex align-items-center justify-content-around my-3 py-1">
                                    <div>
                                        <h4 class="mb-0">32</h4>
                                        <span>Projects</span>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">1.28k</h4>
                                        <span>Tasks</span>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">1.27k</h4>
                                        <span>Connections</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="javascript:;"
                                       class="btn btn-label-primary d-flex align-items-center me-3"><i
                                            class="ti-xs me-1 ti ti-user-plus me-1"></i>Connect</a>
                                    <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i
                                            class="ti ti-mail ti-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-finance" role="tabpanel" aria-labelledby="pills-finance-tab">
                <!-- Pajak SPT -->
                <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0">Pajak SPT</h5>
                        <div class="card-action-element">
                            <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                                    data-bs-target="#addNewCCModal">
                                <i class="ti ti-plus ti-xs me-1"></i>Tambah Baru
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="added-cards">
                            <div class="cardMaster border p-3 rounded mb-3">
                                <div class="d-flex justify-content-between flex-sm-row flex-column">
                                    <div class="card-information">
                                        <img class="mb-3 img-fluid"
                                             src="{{ asset('assets/img/icons/payments/mastercard.png') }}"
                                             alt="Master Card" />
                                        <h6 class="mb-2 pt-1">Kaith Morrison</h6>
                                        <span class="card-number">&#8727;&#8727;&#8727;&#8727;
                                            &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727;
                                            9856</span>
                                    </div>
                                    <div class="d-flex flex-column text-start text-lg-end">
                                        <div class="d-flex order-sm-0 order-1 mt-3">
                                            <button class="btn btn-label-primary me-3" data-bs-toggle="modal"
                                                    data-bs-target="#editCCModal">
                                                Edit
                                            </button>
                                            <button class="btn btn-label-secondary">Delete</button>
                                        </div>
                                        <small class="mt-sm-auto mt-2 order-sm-1 order-0">Card expires at 12/26</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Pajak SPT -->

                <!-- Surat Keterangan Bank -->
                <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0">Surat Keterangan Bank</h5>
                        <div class="card-action-element">
                            <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                                    data-bs-target="#addNewCCModal">
                                <i class="ti ti-plus ti-xs me-1"></i>Tambah Baru
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="added-cards">
                            <div class="cardMaster border p-3 rounded mb-3">
                                <div class="d-flex justify-content-between flex-sm-row flex-column">
                                    <div class="card-information">
                                        <img class="mb-3 img-fluid"
                                             src="{{ asset('assets/img/icons/payments/mastercard.png') }}"
                                             alt="Master Card" />
                                        <h6 class="mb-2 pt-1">Kaith Morrison</h6>
                                        <span class="card-number">&#8727;&#8727;&#8727;&#8727;
                                            &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727;
                                            9856</span>
                                    </div>
                                    <div class="d-flex flex-column text-start text-lg-end">
                                        <div class="d-flex order-sm-0 order-1 mt-3">
                                            <button class="btn btn-label-primary me-3" data-bs-toggle="modal"
                                                    data-bs-target="#editCCModal">
                                                Edit
                                            </button>
                                            <button class="btn btn-label-secondary">Delete</button>
                                        </div>
                                        <small class="mt-sm-auto mt-2 order-sm-1 order-0">Card expires at 12/26</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Surat Keterangan Bank -->

                <!-- Pengalaman -->
                <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-0">Pengalaman</h5>
                        <div class="card-action-element">
                            <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                                    data-bs-target="#addNewCCModal">
                                <i class="ti ti-plus ti-xs me-1"></i>Tambah Baru
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="added-cards">
                            <div class="cardMaster border p-3 rounded mb-3">
                                <div class="d-flex justify-content-between flex-sm-row flex-column">
                                    <div class="card-information">
                                        <img class="mb-3 img-fluid"
                                             src="{{ asset('assets/img/icons/payments/mastercard.png') }}"
                                             alt="Master Card" />
                                        <h6 class="mb-2 pt-1">Kaith Morrison</h6>
                                        <span class="card-number">&#8727;&#8727;&#8727;&#8727;
                                            &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727;
                                            9856</span>
                                    </div>
                                    <div class="d-flex flex-column text-start text-lg-end">
                                        <div class="d-flex order-sm-0 order-1 mt-3">
                                            <button class="btn btn-label-primary me-3" data-bs-toggle="modal"
                                                    data-bs-target="#editCCModal">
                                                Edit
                                            </button>
                                            <button class="btn btn-label-secondary">Delete</button>
                                        </div>
                                        <small class="mt-sm-auto mt-2 order-sm-1 order-0">Card expires at 12/26</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Pengalaman -->

            </div>

            <div class="tab-pane fade" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">
                <!-- Change Password -->
                <div class="card mb-4">
                    <h5 class="card-header">Kelola Akun</h5>
                    <div class="card-body">
                        <form id="formChangePassword" method="POST" onsubmit="return false">
                            <input type="hidden" name="newRole" class="form-control" value="3" required>
                            <div class="mb-3 col-12">
                                <label class="form-label" for="newUsername">Username</label>
                                <input type="text" class="form-control" name="newUserName" placeholder="Username"
                                       required>
                            </div>
                            <div class="alert alert-warning" role="alert">
                                <h5 class="alert-heading mb-2">Ensure that these requirements are met</h5>
                                <span>Minimum 8 characters long, uppercase & symbol</span>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-sm-6 form-password-toggle">
                                    <label class="form-label" for="newPassword">New Password</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" id="newPassword" name="newPassword"
                                               placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                        <span class="input-group-text cursor-pointer"><i
                                                class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 col-sm-6 form-password-toggle">
                                    <label class="form-label" for="confirmPassword">Confirm New Password</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" name="confirmPassword"
                                               id="confirmPassword"
                                               placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                        <span class="input-group-text cursor-pointer"><i
                                                class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success me-2">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/ Change Password -->
            </div>
        </div>
    </div>
    <!--/ User Content -->
</div>

<!-- Modal -->
@include('_partials/modals/edit_consultant')
@include('_partials/modals/deed_of_company')
<!--@include('_partials/modals/owner')-->
<!--@include('_partials/modals/sbu')-->
<!--@include('_partials/modals/iujk')-->
<!--@include('_partials/modals/siup')-->
<!--@include('_partials/modals/nib')-->
<!--@include('_partials/modals/personil')-->

<!-- End Modal -->

<script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('assets/js/customize/consultant-detail.js') }}"></script>
<script>

</script>
@endsection
