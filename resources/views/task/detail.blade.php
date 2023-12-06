@extends('templates.main')

@section('title', 'Detail Kegiatan')
@section('content')
<div
    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h4 class="mb-1 mt-3">Detail Kegiatan</h4>
    </div>
    <div class="d-flex align-content-center flex-wrap gap-3">
        <a href="{{ url('tasks/administration') }}" target="_blank" class="btn btn-primary btn-lg text-white">
            <i class="ti ti-file ti-xs me-2"></i> Administrasi
        </a>
    </div>
</div>

<div class="row g-2 mb-3">
    <div class="col-xl-12">
        <div class="card invoice-preview-card">
            <div class="card-body">
                <div class="row m-sm-1 m-0">
                    <div class="col-md-7 mb-md-0 mb-0 ps-0">
                        <div class="d-flex mb-1 gap-2 align-items-center">
                            <span class="fw-bold fs-4">{{ $infrastructure->name }}</span>
                        </div>
                        <p class="mb-2">
                            {{ $infrastructure->district }}
                        </p>
                    </div>
                    <div class="col-md-5">
                        <dl class="row mb-0 align-items-center">
                            <dt class="col-sm-4 mb-0 mb-sm-0 text-md-end">
                                <span class="fw-normal">Tahun: </span>
                            </dt>
                            <dd class="col-sm-8 mb-0 mb-sm-0 px-0 px-lg-0">
                                <select name="filterYear" id="filterYear" class="form-control select2 ms-auto ps-0">
                                    <option value="">Pilih Tahun</option>
                                    @foreach($years as $year)
                                        <option value="{{$year->name}}" {{ request()->get('year') == $year->name ? 'selected' : '' }}>{{ $year->name }}</option>
                                    @endforeach
                                </select>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-xl-12">
        <div class="card px-3">
            <div class="row">
                <div class="col-lg-5 card-body border-end demo-vertical-spacing demo-only-element">
                    <h5 class="card-title">Lokasi Kegiatan</h5>
                    <div class="row">
                        <div class="mb-3 col-12">
                            <img
                                src="{{ asset('assets/img/line-jalan.png') }}"
                                alt="user-avatar"
                                class="d-block w-100 h-px-200 rounded"
                                id="uploadedAvatar" />
                        </div>
                    </div>

                    <div class="row">
{{--                        <div class="mb-3 col-12">--}}
{{--                            <label class="form-label">Upload Lokasi Kegiatan</label>--}}
{{--                            <input type="file" class="form-control" id="inputGroupFile02" />--}}
{{--                        </div>--}}
                        <div class="mb-3 col-12">
                            <label for="apiAccess" class="form-label">Jenis Kegiatan</label
                            >
                            <select id="" class="select2 form-control">
                                <option value="">Pilih Jenis Kegiatan</option>
                                <option value="full">Full Control</option>
                                <option value="modify">Modify</option>
                                <option value="read-execute">Read & Execute</option>
                                <option value="folders">List Folder Contents</option>
                                <option value="read">Read Only</option>
                                <option value="read-write">Read & Write</option>
                            </select>
                        </div>
<!--                        <div class="mb-3 col-12">-->
<!--                            <label for="" class="form-label">Uploader</label>-->
<!--                            <select id="" class="select2 form-control">-->
<!--                                <option value="">Pilih</option>-->
<!--                                <option value="construction">Kontraktor Pelaksana</option>-->
<!--                                <option value="monitoring">Konsultan Pengawas</option>-->
<!--                                <option value="planning">Konsultan Perencana</option>-->
<!--                            </select>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="col-lg-7 card-body">
                    <div class="card-title">
                        <h5 class="m-0">Informasi Kegiatan</h5>
                    </div>

                    <div class="nav-align-top">
                        <ul class="nav nav-tabs nav-fill" role="tablist">
{{--                            <li class="nav-item" {{ (Session()->get('x-user-role') == 'consultant' && $task->type != 'perencanaan') ? 'hidden' : '' }}>--}}
                            <li class="nav-item">
                                <button
                                    type="button"
{{--                                    class="nav-link {{ ($task->type == 'perencanaan') ? 'active' : '' }}"--}}
                                    class="nav-link active"
                                    role="tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#task-planning"
                                    aria-controls="task-planning"
                                    aria-selected="true">
                                    Konsultan Perencanaan
                                </button>
                            </li>
{{--                            <li class="nav-item" {{ (Session()->get('x-user-role') == 'consultant' && $task->type != 'pengawas') ? 'hidden' : '' }}>--}}
                            <li class="nav-item">
                                <button
                                    type="button"
{{--                                    class="nav-link {{ ($task->type == 'pengawas') ? 'active' : '' }}"--}}
                                    class="nav-link"
                                    role="tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#task-supervisor"
                                    aria-controls="task-supervisor"
                                    aria-selected="false">
                                    Konsultan Pengawas
                                </button>
                            </li>
{{--                            <li class="nav-item" {{ (Session()->get('x-user-role') == 'consultant' && $task->type != 'konstruksi') ? 'hidden' : '' }}>--}}
                            <li class="nav-item">
                                <button
                                    type="button"
{{--                                    class="nav-link {{ ($task->type == 'konstruksi') ? 'active' : '' }}"--}}
                                    class="nav-link"
                                    role="tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#task-contractor"
                                    aria-controls="task-contractor"
                                    aria-selected="false">
                                    Kontraktor Pelaksana
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content px-0 pb-0">
{{--                            <div class="tab-pane fade {{ ($task->type == 'perencanaan') ? 'show active' : '' }}" id="task-planning" role="tabpanel">--}}
                            <div class="tab-pane fade show active" id="task-planning" role="tabpanel">
                                <form action="{{ url('tasks/save') }}" class="mt-3" method="post">
                                    <div class="col-12" hidden>
                                        @csrf
                                        <input type="text" name="type" value="pengawas" required>
                                    </div>
                                    <h6>1. Penyedia Jasa</h6>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Konsultan Perencana</label>
                                        <div class="col-sm-9">
                                            <select id="consultant-planning-select2" class="form-select">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label class="col-sm-3 col-form-label" for="multicol-email">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea name="address" id="address-planning" cols="30" rows="3" class="form-control" readonly></textarea>
                                        </div>
                                    </div>
                                    <hr class="my-4 mx-n4" />
                                    <h6>2. Data Umum Pekerjaan</h6>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">No Kontrak</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Masukan Nomor Kontrak" value="{{ (!empty($infrastructure->planner)) ? $infrastructure->planner->contract_number : '' }}" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label" for="multicol-country">Nilai Kontrak</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Masukan Nilai Kontrak" value="{{ (!empty($infrastructure->planner)) ? $infrastructure->planner->contract_value : '' }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Sumber Dana</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Masukan Sumber Dana" value="{{ (!empty($infrastructure->planner)) ? $infrastructure->planner->budget_source : '' }}">
                                        </div>
                                    </div>
                                    <hr class="my-4 mx-n4" />
                                    <h6>3. Waktu Pelaksanaan</h6>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Masa Kontrak (hari kalender)</label>
                                        <div class="col-sm-9">
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Masukan Masa Kontrak" value="{{ (!empty($infrastructure->planner)) ? $infrastructure->planner->contract_duration : '' }}" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label" for="multicol-birthdate">Surat Perintah Mulai Kerja</label>
                                        <div class="col-sm-9">
                                            <input
                                                type="text"
                                                id="multicol-birthdate"
                                                class="form-control dob-picker"
                                                placeholder="YYYY-MM-DD" value="{{ (!empty($infrastructure->planner)) ? $infrastructure->planner->contract_start : '' }}" />
                                        </div>
                                    </div>
                                    @if(Session()->has('x-user-role') == 'administrator')
                                    <div class="row pt-1">
                                        <div class="col-sm-12">
                                            <div class="float-end">
                                                <button type="submit" class="btn btn-success me-sm-2 me-1">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </form>
                            </div>
{{--                            <div class="tab-pane fade {{ ($task->type == 'pengawas') ? 'show active' : '' }}" id="task-supervisor" role="tabpanel">--}}
                            <div class="tab-pane fade" id="task-supervisor" role="tabpanel">
                                <form action="{{ url('tasks/save') }}" class="mt-3" method="post">
                                    <div class="col-12" hidden>
                                        @csrf
                                        <input type="text" name="type" value="pengawas" required>
                                    </div>
                                    <h6>1. Penyedia Jasa</h6>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Konsultan Pengawas</label>
                                        <div class="col-sm-9">
                                            <select id="consultant-supervisor-select2" class="form-select">
                                                <option value="">Cari Penyedia Jasa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label class="col-sm-3 col-form-label" for="multicol-email">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea name="address" id="address-supervisor" cols="30" rows="3" class="form-control" readonly></textarea>
                                        </div>
                                    </div>
                                    <hr class="my-4 mx-n4" />
                                    <h6>2. Data Umum Pekerjaan</h6>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">No Kontrak</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Masukan Nomor Kontrak" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label" for="multicol-country">Nilai Kontrak</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Masukan Nilai Kontrak">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Sumber Dana</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Masukan Sumber Dana">
                                        </div>
                                    </div>
                                    <hr class="my-4 mx-n4" />
                                    <h6>3. Waktu Pelaksanaan</h6>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Masa Kontrak</label>
                                        <div class="col-sm-9">
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Masukan Masa Kontrak" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label" for="multicol-birthdate">Surat Perintah Mulai Kerja</label>
                                        <div class="col-sm-9">
                                            <input
                                                type="text"
                                                id="multicol-birthdate"
                                                class="form-control dob-picker"
                                                placeholder="YYYY-MM-DD" />
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-sm-12">
                                            <div class="float-end">
                                                <button type="submit" class="btn btn-success me-sm-2 me-1">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
{{--                            <div class="tab-pane fade {{ ($task->type == 'konstruksi') ? 'show active' : '' }}" id="task-contractor" role="tabpanel">--}}
                            <div class="tab-pane fade" id="task-contractor" role="tabpanel">
                                <form action="{{ url('tasks/save') }}" class="mt-3" method="post">
                                    <div class="col-12" hidden>
                                        @csrf
                                        <input type="text" name="type" value="konstruksi" required>
                                    </div>
                                    <h6>1. Penyedia Jasa</h6>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Kontraktor Pelaksana</label>
                                        <div class="col-sm-9">
                                            <select id="consultant-contractor-select2" class="form-select">
                                                <option value="">Cari Penyedia Jasa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label class="col-sm-3 col-form-label" for="multicol-email">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea name="address" id="address-contractor" cols="30" rows="3" class="form-control" readonly></textarea>
                                        </div>
                                    </div>
                                    <hr class="my-4 mx-n4" />
                                    <h6>2. Data Umum Pekerjaan</h6>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">No Kontrak</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Masukan Nomor Kontrak" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label" for="multicol-country">Nilai Kontrak</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Masukan Nilai Kontrak">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label">Sumber Dana</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Masukan Sumber Dana">
                                        </div>
                                    </div>
                                    <hr class="my-4 mx-n4" />
                                    <h6>3. Waktu Pelaksanaan</h6>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Masa Kontrak</label>
                                        <div class="col-sm-9">
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Masukan Masa Kontrak" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label" for="multicol-birthdate">Surat Perintah Mulai Kerja</label>
                                        <div class="col-sm-9">
                                            <input
                                                type="text"
                                                id="multicol-birthdate"
                                                class="form-control dob-picker"
                                                placeholder="YYYY-MM-DD" />
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-sm-12">
                                            <div class="float-end">
                                                <button type="submit" class="btn btn-success me-sm-2 me-1">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 mt-5">
        <ul class="nav nav-pills flex-column flex-md-row mb-4" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-planner-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-planner" type="button" role="tab" aria-controls="pills-planner"
                        aria-selected="true">
                    <i class="ti ti-user-check ti-xs me-1"></i>Perencanaan
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-supervisor-tab" data-bs-toggle="pill" data-bs-target="#pills-supervisor"
                        type="button" role="tab" aria-controls="pills-supervisor" aria-selected="false">
                    <i class="ti ti-link ti-xs me-1"></i> Pengawas
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contractor-tab" data-bs-toggle="pill" data-bs-target="#pills-contractor"
                        type="button" role="tab" aria-controls="pills-contractor" aria-selected="false">
                    <i class="ti ti-users ti-xs me-1"></i> Kontraktor Pelaksana
                </button>
            </li>
        </ul>

        <style>
            .nav~.tab-content {
                background: transparent;
            }

            .tab-content {
                padding: 0;
            }
        </style>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-planner" role="tabpanel"
                 aria-labelledby="pills-planner-tab">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Kegiatan</h5>
                        <div id="accordionTaskInformation" class="accordion">
                            <div class="card accordion-item shadow-lg">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        aria-expanded="true"
                                        data-bs-target="#accordionTaskInformation-1"
                                        aria-controls="accordionTaskInformation-1">
                                        1. Laporan Harian
                                    </button>
                                </h2>

                                <div id="accordionTaskInformation-1" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <div class="card-datatable table-responsive">
                                            <table class="datatables-category-list table border-top">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Categories</th>
                                                    <th class="text-nowrap text-sm-end">Total Products &nbsp;</th>
                                                    <th class="text-nowrap text-sm-end">Total Earning</th>
                                                    <th class="text-lg-center">Actions</th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>

                                        <div
                                            class="offcanvas offcanvas-end"
                                            tabindex="-1"
                                            id="offcanvasEcommerceCategoryList"
                                            aria-labelledby="offcanvasEcommerceCategoryListLabel">
                                            <!-- Offcanvas Header -->
                                            <div class="offcanvas-header py-4">
                                                <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">Add Category</h5>
                                                <button
                                                    type="button"
                                                    class="btn-close bg-label-secondary text-reset"
                                                    data-bs-dismiss="offcanvas"
                                                    aria-label="Close"></button>
                                            </div>
                                            <!-- Offcanvas Body -->
                                            <div class="offcanvas-body border-top">
                                                <form class="pt-0" id="eCommerceCategoryListForm" onsubmit="return true">
                                                    <!-- Title -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="ecommerce-category-title">Title</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="ecommerce-category-title"
                                                            placeholder="Enter category title"
                                                            name="categoryTitle"
                                                            aria-label="category title" />
                                                    </div>
                                                    <!-- Slug -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="ecommerce-category-slug">Slug</label>
                                                        <input
                                                            type="text"
                                                            id="ecommerce-category-slug"
                                                            class="form-control"
                                                            placeholder="Enter slug"
                                                            aria-label="slug"
                                                            name="slug" />
                                                    </div>
                                                    <!-- Image -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="ecommerce-category-image">Attachment</label>
                                                        <input class="form-control" type="file" id="ecommerce-category-image" />
                                                    </div>
                                                    <!-- Parent category -->
                                                    <div class="mb-3 ecommerce-select2-dropdown">
                                                        <label class="form-label" for="ecommerce-category-parent-category">Parent category</label>
                                                        <select
                                                            id="ecommerce-category-parent-category"
                                                            class="select2 form-select"
                                                            data-placeholder="Select parent category">
                                                            <option value="">Select parent Category</option>
                                                            <option value="Household">Household</option>
                                                            <option value="Management">Management</option>
                                                            <option value="Electronics">Electronics</option>
                                                            <option value="Office">Office</option>
                                                            <option value="Automotive">Automotive</option>
                                                        </select>
                                                    </div>
                                                    <!-- Description -->
                                                    <div class="mb-3">
                                                        <label class="form-label">Description</label>
                                                        <div class="form-control p-0 py-1">
                                                            <div class="comment-editor border-0" id="ecommerce-category-description"></div>
                                                            <div class="comment-toolbar border-0">
                                                                <div class="d-flex justify-content-end">
                              <span class="ql-formats me-0">
                                <button class="ql-bold"></button>
                                <button class="ql-italic"></button>
                                <button class="ql-underline"></button>
                                <button class="ql-list" value="ordered"></button>
                                <button class="ql-list" value="bullet"></button>
                                <button class="ql-link"></button>
                                <button class="ql-image"></button>
                              </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Status -->
                                                    <div class="mb-4 ecommerce-select2-dropdown">
                                                        <label class="form-label">Select category status</label>
                                                        <select
                                                            id="ecommerce-category-status"
                                                            class="select2 form-select"
                                                            data-placeholder="Select category status">
                                                            <option value="">Select category status</option>
                                                            <option value="Scheduled">Scheduled</option>
                                                            <option value="Publish">Publish</option>
                                                            <option value="Inactive">Inactive</option>
                                                        </select>
                                                    </div>
                                                    <!-- Submit and reset -->
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
                                                        <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">Discard</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item shadow-lg">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionTaskInformation-2"
                                        aria-controls="accordionTaskInformation-2">
                                        2. Laporan Mingguan
                                    </button>
                                </h2>
                                <div id="accordionTaskInformation-2" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        We accept Visa®, MasterCard®, American Express®, and PayPal®. Our servers encrypt all
                                        information submitted to them, so you can be confident that your credit card information
                                        will be kept safe and secure.
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item shadow-lg">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionTaskInformation-3"
                                        aria-controls="accordionTaskInformation-3">
                                        3. Laporan Bulanan
                                    </button>
                                </h2>
                                <div id="accordionTaskInformation-3" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        For any technical difficulties you are experiencing with our website, please contact us at
                                        our
                                        <a href="javascript:void(0);">support portal</a>, or you can call us toll-free at
                                        <span class="fw-medium">1-000-000-000</span>, or email us at
                                        <a href="javascript:void(0);">order@companymail.com</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item shadow-lg">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionTaskInformation-4"
                                        aria-controls="accordionTaskInformation-4">
                                        4. Progress Harian
                                    </button>
                                </h2>
                                <div id="accordionTaskInformation-4" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        If you have paying users or you are developing any SaaS products then you need an Extended
                                        License. For each products, you need a license. You can get free lifetime updates as well.
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item shadow-lg">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionTaskInformation-5"
                                        aria-controls="accordionTaskInformation-5">
                                        5. Progress Mingguan
                                    </button>
                                </h2>
                                <div id="accordionPayment-5" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        No, This is not subscription based item.Pastry pudding cookie toffee bonbon jujubes
                                        jujubes powder topping. Jelly beans gummi bears sweet roll bonbon muffin liquorice. Wafer
                                        lollipop sesame snaps.
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item shadow-lg">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionTaskInformation-6"
                                        aria-controls="accordionTaskInformation-6">
                                        6. Progress Bulanan
                                    </button>
                                </h2>
                                <div id="accordionPayment-6" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        No, This is not subscription based item.Pastry pudding cookie toffee bonbon jujubes
                                        jujubes powder topping. Jelly beans gummi bears sweet roll bonbon muffin liquorice. Wafer
                                        lollipop sesame snaps.
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item shadow-lg">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionTaskInformation-7"
                                        aria-controls="accordionTaskInformation-7">
                                        7. Kurva S
                                    </button>
                                </h2>
                                <div id="accordionPayment-7" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        No, This is not subscription based item.Pastry pudding cookie toffee bonbon jujubes
                                        jujubes powder topping. Jelly beans gummi bears sweet roll bonbon muffin liquorice. Wafer
                                        lollipop sesame snaps.
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item shadow-lg">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionTaskInformation-8"
                                        aria-controls="accordionTaskInformation-8">
                                        8. Laporan Grafik Cuaca dan Tenaga Kerja
                                    </button>
                                </h2>
                                <div id="accordionPayment-8" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        No, This is not subscription based item.Pastry pudding cookie toffee bonbon jujubes
                                        jujubes powder topping. Jelly beans gummi bears sweet roll bonbon muffin liquorice. Wafer
                                        lollipop sesame snaps.
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item shadow-lg">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionTaskInformation-9"
                                        aria-controls="accordionTaskInformation-9">
                                        9. Pemeriksaan dan Pengujian
                                    </button>
                                </h2>
                                <div id="accordionPayment-9" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        No, This is not subscription based item.Pastry pudding cookie toffee bonbon jujubes
                                        jujubes powder topping. Jelly beans gummi bears sweet roll bonbon muffin liquorice. Wafer
                                        lollipop sesame snaps.
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item shadow-lg">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionTaskInformation-10"
                                        aria-controls="accordionTaskInformation-10">
                                        10. Perubahan Di Lapangan
                                    </button>
                                </h2>
                                <div id="accordionPayment-10" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        No, This is not subscription based item.Pastry pudding cookie toffee bonbon jujubes
                                        jujubes powder topping. Jelly beans gummi bears sweet roll bonbon muffin liquorice. Wafer
                                        lollipop sesame snaps.
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item shadow-lg">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionTaskInformation-11"
                                        aria-controls="accordionTaskInformation-11">
                                        11. As Built Drawing
                                    </button>
                                </h2>
                                <div id="accordionPayment-11" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        No, This is not subscription based item.Pastry pudding cookie toffee bonbon jujubes
                                        jujubes powder topping. Jelly beans gummi bears sweet roll bonbon muffin liquorice. Wafer
                                        lollipop sesame snaps.
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item shadow-lg">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionTaskInformation-12"
                                        aria-controls="accordionTaskInformation-12">
                                        12. Dokumentasi 0%, 50%, 100%
                                    </button>
                                </h2>
                                <div id="accordionPayment-12" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        No, This is not subscription based item.Pastry pudding cookie toffee bonbon jujubes
                                        jujubes powder topping. Jelly beans gummi bears sweet roll bonbon muffin liquorice. Wafer
                                        lollipop sesame snaps.
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item shadow-lg">
                                <h2 class="accordion-header">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordionTaskInformation-13"
                                        aria-controls="accordionTaskInformation-13">
                                        13. Dokumen Lainnya
                                    </button>
                                </h2>
                                <div id="accordionPayment-13" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        No, This is not subscription based item.Pastry pudding cookie toffee bonbon jujubes
                                        jujubes powder topping. Jelly beans gummi bears sweet roll bonbon muffin liquorice. Wafer
                                        lollipop sesame snaps.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-supervisor" role="tabpanel"
                 aria-labelledby="pills-supervisor-tab">
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-contractor" role="tabpanel"
                 aria-labelledby="pills-contractor-tab">
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/quill/katex.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/quill/quill.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script>
    let select2 = $('.select2');

    if (select2.length) {
        select2.each(function() {
            var $this = $(this);
            $this.wrap('<div class="position-relative"></div>').select2({
                dropdownParent: $this.parent()
            });
        });
    }

    $("#consultant-planning-select2").select2({
        ajax: {
            delay: 250,
            url: '{{ url('consultants/json') }}',
            dataType: 'json',
            data: function(params) {
                return {
                    search: params.term,
                    page: params.page || 1,
                }
            },
            processResults: function(data, params) {
                params.page = params.page || 1;

                return {
                    results: data.results,
                    pagination: {
                        more: (params.page * 20) < data.totalRows
                    }
                };
            },
            cache: true
        },
        placeholder: 'Cari Penyedia Jasa',
        // minimumInputLength: 3,
        allowClear: true,
        disabled: {{ (Session()->get('x-user-role') == 'administrator') ? 'false' : true }}
    });

    $("#consultant-supervisor-select2").select2({
        ajax: {
            delay: 250,
            url: '{{ url('consultants/json') }}',
            dataType: 'json',
            data: function(params) {
                return {
                    search: params.term,
                    page: params.page || 1,
                }
            },
            processResults: function(data, params) {
                params.page = params.page || 1;

                return {
                    results: data.results,
                    pagination: {
                        more: (params.page * 20) < data.totalRows
                    }
                };
            },
            cache: true
        },
        placeholder: 'Cari Penyedia Jasa',
        // minimumInputLength: 3,
        allowClear: true,
        disabled: {{ (Session()->get('x-user-role') == 'administrator') ? 'false' : true }}
    });

    $("#consultant-contractor-select2").select2({
        ajax: {
            delay: 250,
            url: '{{ url('consultants/json') }}',
            dataType: 'json',
            data: function(params) {
                return {
                    search: params.term,
                    page: params.page || 1,
                }
            },
            processResults: function(data, params) {
                params.page = params.page || 1;

                return {
                    results: data.results,
                    pagination: {
                        more: (params.page * 20) < data.totalRows
                    }
                };
            },
            cache: true
        },
        placeholder: 'Cari Penyedia Jasa',
        // minimumInputLength: 3,
        allowClear: true,
        disabled: {{ (Session()->get('x-user-role') == 'administrator') ? 'false' : true }}
    });


    // setup selected
    let infrastructure        = {!! $infrastructure->toJson() !!};
    if (infrastructure != null && infrastructure.planner != null) {
        $.ajax({
            type: 'get',
            url: '{{ url('tasks/consultant') }}',
            data: {
                search: infrastructure.planner.consultants
            }
        }).then(function (data) {
            if (data.status == 'success') {
                var optPlanner      = new Option(data.data.name, data.data.id, true, true);
                $("#consultant-planning-select2").append(optPlanner).trigger('change');
                $("#address-planning").val(data.data.address);
            } else {
                $("#consultant-planning-select2").val(null).trigger('change');
            }
        });
    }

    $('#consultant-planning-select2').on('select2:select', function(e) {
        let data = e.params.data;
        console.log(data);
    });

    if (infrastructure != null && infrastructure.supervisor != null) {
        $.ajax({
            type: 'get',
            url: '{{ url('tasks/consultant') }}',
            data: {
                search: infrastructure.supervisor.consultants
            }
        }).then(function (data) {
            if (data.status == 'success') {
                var optSupervisor      = new Option(data.data.name, data.data.id, true, true);
                $("#consultant-supervisor-select2").append(optSupervisor).trigger('change');
                $("#address-supervisor").val(data.data.address);
            } else {
                $("#consultant-supervisor-select2").val(null).trigger('change');
            }
        });
    }

    if (infrastructure != null && infrastructure.contractor != null) {
        $.ajax({
            type: 'get',
            url: '{{ url('tasks/consultant') }}',
            data: {
                search: infrastructure.contractor.consultants
            }
        }).then(function (data) {
            if (data.status == 'success') {
                var optContractor      = new Option(data.data.name, data.data.id, true, true);
                $("#consultant-contractor-select2").append(optContractor).trigger('change');
                $("#address-contractor").val(data.data.address);
            } else {
                $("#consultant-contractor-select2").val(null).trigger('change');
            }
        });
    }

    let datepickerList = document.querySelectorAll('.dob-picker');
    if (datepickerList) {
        datepickerList.forEach(function (datepicker) {
            datepicker.flatpickr({
                monthSelectorType: 'static'
            });
        });
    }

    const commentEditor = document.querySelector('.comment-editor');

    if (commentEditor) {
        new Quill(commentEditor, {
            modules: {
                toolbar: '.comment-toolbar'
            },
            placeholder: 'Enter category description...',
            theme: 'snow'
        });
    }

    // Variable declaration for category list table
    var dt_category_list_table = $('.datatables-category-list');

    if (dt_category_list_table.length) {
        var dt_category = dt_category_list_table.DataTable({
            // ajax: "{{ url('tasks/get_report_by_days') }}", // JSON file to add data
            ajax: "{{ asset('assets/json/ecommerce-category-list.json') }}", // JSON file to add data
            columns: [
                // columns according to JSON
                { data: '' },
                { data: 'id' },
                { data: 'categories' },
                { data: 'total_products' },
                { data: 'total_earnings' },
                { data: '' }
            ],
            columnDefs: [
                {
                    // For Responsive
                    className: 'control',
                    searchable: false,
                    orderable: false,
                    responsivePriority: 1,
                    targets: 0,
                    render: function (data, type, full, meta) {
                        return '';
                    }
                },
                {
                    // For Checkboxes
                    targets: 1,
                    orderable: false,
                    searchable: false,
                    responsivePriority: 4,
                    checkboxes: true,
                    render: function () {
                        return '<input type="checkbox" class="dt-checkboxes form-check-input">';
                    },
                    checkboxes: {
                        selectAllRender: '<input type="checkbox" class="form-check-input">'
                    }
                },
                {
                    // Categories and Category Detail
                    targets: 2,
                    responsivePriority: 2,
                    render: function (data, type, full, meta) {
                        var $name = full['categories'],
                            $category_detail = full['category_detail'],
                            $image = full['cat_image'],
                            $id = full['id'];
                        if ($image) {
                            // For Product image
                            var $output =
                                '<img src="' +
                                assetsPath +
                                'img/ecommerce-images/' +
                                $image +
                                '" alt="Product-' +
                                $id +
                                '" class="rounded-2">';
                        } else {
                            // For Product badge
                            var stateNum = Math.floor(Math.random() * 6);
                            var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
                            var $state = states[stateNum],
                                $name = full['category_detail'],
                                $initials = $name.match(/\b\w/g) || [];
                            $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
                            $output = '<span class="avatar-initial rounded-2 bg-label-' + $state + '">' + $initials + '</span>';
                        }
                        // Creates full output for Categories and Category Detail
                        var $row_output =
                            '<div class="d-flex align-items-center">' +
                            '<div class="avatar-wrapper me-2 rounded-2 bg-label-secondary">' +
                            '<div class="avatar">' +
                            $output +
                            '</div>' +
                            '</div>' +
                            '<div class="d-flex flex-column justify-content-center">' +
                            '<span class="text-body text-wrap fw-medium">' +
                            $name +
                            '</span>' +
                            '<span class="text-muted text-truncate mb-0 d-none d-sm-block"><small>' +
                            $category_detail +
                            '</small></span>' +
                            '</div>' +
                            '</div>';
                        return $row_output;
                    }
                },
                {
                    // Total products
                    targets: 3,
                    responsivePriority: 3,
                    render: function (data, type, full, meta) {
                        var $total_products = full['total_products'];
                        return '<div class="text-sm-end">' + $total_products + '</div>';
                    }
                },
                {
                    // Total Earnings
                    targets: 4,
                    orderable: false,
                    render: function (data, type, full, meta) {
                        var $total_earnings = full['total_earnings'];
                        return "<div class='h6 mb-0 text-sm-end'>" + $total_earnings + '</div';
                    }
                },
                {
                    // Actions
                    targets: -1,
                    title: 'Actions',
                    searchable: false,
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return (
                            '<div class="d-flex align-items-sm-center justify-content-sm-center">' +
                            '<button class="btn btn-sm btn-icon delete-record me-2"><i class="ti ti-trash"></i></button>' +
                            '<button class="btn btn-sm btn-icon"><i class="ti ti-edit"></i></button>' +
                            '</div>'
                        );
                    }
                }
            ],
            order: [2, 'desc'], //set any columns order asc/desc
            dom:
                '<"card-header d-flex flex-wrap pb-2 pt-0"' +
                '<f>' +
                '<"d-flex justify-content-center justify-content-md-end align-items-baseline"<"dt-action-buttons d-flex justify-content-center flex-md-row mb-3 mb-md-0 ps-1 ms-1 align-items-baseline"lB>>' +
                '>t' +
                '<"row mx-1"' +
                '<"col-sm-12 col-md-6"i>' +
                '<"col-sm-12 col-md-6"p>' +
                '>',
            lengthMenu: [7, 10, 20, 50, 70, 100], //for length of menu
            language: {
                sLengthMenu: '_MENU_',
                search: '',
                searchPlaceholder: 'Search Category'
            },
            // Button for offcanvas
            buttons: [
                {
                    text: '<i class="ti ti-plus ti-xs me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Tambah Laporan Harian</span>',
                    className: 'btn btn-primary ms-2',
                    // attr: {
                    //     'data-bs-toggle': 'offcanvas',
                    //     'data-bs-target': '#offcanvasEcommerceCategoryList'
                    // }
                    action: function () {
                        window.location.href = '{{ (!empty($infrastructure->contractor)) ? url("tasks/day_report?task=") . $infrastructure->contractor->id : 'javascript:void(0);' }}';
                    }

                }
            ],
            // For responsive popup
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function (row) {
                            var data = row.data();
                            return 'Details of ' + data['categories'];
                        }
                    }),
                    type: 'column',
                    renderer: function (api, rowIdx, columns) {
                        var data = $.map(columns, function (col, i) {
                            return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                                ? '<tr data-dt-row="' +
                                col.rowIndex +
                                '" data-dt-column="' +
                                col.columnIndex +
                                '">' +
                                '<td> ' +
                                col.title +
                                ':' +
                                '</td> ' +
                                '<td class="ps-0">' +
                                col.data +
                                '</td>' +
                                '</tr>'
                                : '';
                        }).join('');

                        return data ? $('<table class="table"/><tbody />').append(data) : false;
                    }
                }
            }
        });
        $('.dt-action-buttons').addClass('pt-0');
        $('.dataTables_filter').addClass('me-3 ps-0');
    }
</script>
@endsection
