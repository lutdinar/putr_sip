@extends('templates.main')

@section('title', 'Daftar Kegiatan')
@section('content')
<!-- Card Border Shadow -->
<div class="row">
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-border-shadow-primary">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-info"><i class="ti ti-road ti-md"></i></span>
                    </div>
                    <h4 class="ms-1 mb-0">42</h4>
                </div>
                <p class="mb-1">Ruas Jalan</p>
                <p class="mb-0">
                    <small class="text-muted">Kabupaten</small>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-border-shadow-warning">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                          <span class="avatar-initial rounded bg-label-danger">
                              <i class="ti ti-building-bridge-2 ti-md"></i>
                          </span>
                    </div>
                    <h4 class="ms-1 mb-0">8</h4>
                </div>
                <p class="mb-1">Jembatan</p>
                <p class="mb-0">
                    <small class="text-muted">Kabupaten</small>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-border-shadow-danger">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                          <span class="avatar-initial rounded bg-label-warning">
                              <i class="ti ti-clock ti-md"></i>
                          </span>
                    </div>
                    <h4 class="ms-1 mb-0">27</h4>
                </div>
                <p class="mb-1">Kegiatan Berjalan</p>
                <p class="mb-0">
                    <small class="text-muted">Tahun <?= date('Y') ?></small>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-border-shadow-info">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-success"><i class="ti ti-check ti-md"></i></span>
                    </div>
                    <h4 class="ms-1 mb-0">13</h4>
                </div>
                <p class="mb-1">Kegiatan Selesai</p>
                <p class="mb-0">
                    <small class="text-muted">Tahun <?= date('Y') ?></small>
                </p>
            </div>
        </div>
    </div>
</div>
<!--/ Card Border Shadow -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                    <div class="d-flex flex-column justify-content-center">
                        <h5 class="mb-1 mt-3">Daftar Kegiatan</h5>
                        <p class="text-muted">Bidang Bina Marga</p>
                    </div>
                    <div class="col-xl-6 col-md-6">

                            <div class="card overflow-hidden mb-4" style="height: 100px; width: 60%">
                                <div class="card-body" id="horizontal-example">
                                    <div class="d-inline">
                                        <button class="btn btn-md btn-primary me-2">2020</button>
                                        <button class="btn btn-md btn-primary me-2">2021</button>
                                        <button class="btn btn-md btn-primary me-2">2022</button>
                                        <button class="btn btn-md btn-primary me-2">2023</button>
                                        <button class="btn btn-md btn-primary me-2">2024</button>
                                        <button class="btn btn-md btn-primary me-2">2025</button>
                                        <button class="btn btn-md btn-primary me-2">2026</button>
                                        <button class="btn btn-md btn-primary me-2">2027</button>
                                        <button class="btn btn-md btn-primary me-2">2028</button>
                                        <button class="btn btn-md btn-primary me-2">2029</button>
                                        <button class="btn btn-md btn-primary me-2">2030</button>
                                        <button class="btn btn-md btn-primary me-2">2031</button>
                                        <button class="btn btn-md btn-primary me-2">2032</button>
                                        <button class="btn btn-md btn-primary me-2">2033</button>
                                        <button class="btn btn-md btn-primary me-2">2034</button>
                                        <button class="btn btn-md btn-primary me-2">2035</button>
                                        <button class="btn btn-md btn-primary me-2">2036</button>
                                        <button class="btn btn-md btn-primary me-2">2037</button>
                                    </div>
                                </div>
                            </div>
<!--                        <div class="card shadow-none overflow-hidden" id="yearScroll" style="">-->
<!--                            <div class="d-lg-flex flex-row">-->
<!--                                <button class="btn btn-md btn-primary me-2">2020</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2021</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2022</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2023</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2024</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2025</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2026</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2027</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2028</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2029</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2030</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2031</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2032</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2033</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2034</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2035</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2036</button>-->
<!--                                <button class="btn btn-md btn-primary me-2">2037</button>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="row">
                    <ul class="nav nav-tabs widget-nav-tabs pb-3 gap-4 mx-1" role="tablist">
                        <div class="col-md mb-md-0 mb-2">
                            <a
                                href="javascript:void(0);"
                                class="nav-link btn active d-flex flex-column align-items-center justify-content-center"
                                role="tab"
                                data-bs-toggle="tab"
                                data-bs-target="#navs-orders-id"
                                aria-controls="navs-orders-id"
                                aria-selected="true"
                                style="width: 100% !important;"
                            >
                                <div class="badge bg-label-secondary rounded p-2">
                                    <i class="ti ti-road ti-md"></i>
                                </div>
                                <h6 class="tab-widget-title mb-0 mt-2">JALAN</h6>
                            </a>
                        </div>
                        <div class="col-md mb-md-0 mb-2">
                            <a
                                href="javascript:void(0);"
                                class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                role="tab"
                                data-bs-toggle="tab"
                                data-bs-target="#navs-sales-id"
                                aria-controls="navs-sales-id"
                                aria-selected="false"
                                style="width: 100% !important;"
                            >
                                <div class="badge bg-label-secondary rounded p-2">
                                    <i class="ti ti-building-bridge ti-md"></i>
                                </div>
                                <h6 class="tab-widget-title mb-0 mt-2">JEMBATAN</h6>
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body">
                <div class="tab-content p-0 ms-0 ms-sm-2">
                    <div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel">
                        <h5>Filter Ruas Jalan Kabupaten</h5>
                        <div class="row g-3 mb-3">
                            <div class="col-4">
                                <select name="year" id="year" class="select2">
                                    <option value="">Pilih Tersedia/Tidak Tersedia Kegiatan</option>
                                    <option value="">Tersedia</option>
                                    <option value="">Tidak Tersedia</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <select name="condition" id="condition" class="select2">
                                    <option value="">Pilih Kondisi</option>
                                    <option value="baik">Baik</option>
                                    <option value="sedang">Sedang</option>
                                    <option value="rusak_ringan">Rusak Ringan</option>
                                    <option value="rusak_berat">Rusak Berat</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <select name="surface" id="surface" class="select2">
                                    <option value="">Pilih Permukaan</option>
                                    <option value="beton">Beton</option>
                                    <option value="aspal">Aspal</option>
                                    <option value="kerikil">Kerikil</option>
                                    <option value="tanah">Tanah/Belum Tembus</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <select name="status" id="status" class="select2">
                                    <option value="">Pilih Status</option>
                                    <option value="proses">Sedang Dikerjakan</option>
                                    <option value="belum">Selesai Dikerjakan</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <button class="btn btn-success me-md-2 me-1">Cari</button>
                                <button class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-datatable table-responsive">
                                <table class="datatables-roads table border-top">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>No</th>
                                        <th>Kode Ruas</th>
                                        <th>Nama</th>
                                        <th>Kecamatan</th>
                                        <th>Panjang</th>
                                        <th>Lebar</th>
                                        <th>Kondisi Baik</th>
                                        <th>Kondisi Sedang</th>
                                        <th>Kondisi Rusak Ringan</th>
                                        <th>Kondisi Rusak Berat</th>
                                        <th>Kontraktor Konstruksi</th>
                                        <th>Konsultan Perencana</th>
                                        <th>Konsultan Pengawas</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <!-- Offcanvas to add new user -->
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddRoad"
                                 aria-labelledby="offcanvasAddRoadLabel">
                                <div class="offcanvas-header">
                                    <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Tambah Ruas Jalan Kabupaten</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
                                    <form action="#" class="add-new needs-validation pt-0" id="addNewRoadForm" novalidate>
                                        <div class="mb-3">
                                            <label class="form-label" for="add-road-code">Kode Ruas</label>
                                            <input type="text" class="form-control" id="add-road-code" placeholder="Kode Ruas" name="code" aria-label="Kode Ruas" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your name.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="add-road-name">Nama Ruas</label>
                                            <input type="text" class="form-control" id="add-road-name" placeholder="Nama Ruas"
                                                   name="name" aria-label="Nama Ruas" required />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="add-road-district">Kecamatan</label>
                                            <select id="add-road-district" class="select2 form-select" required>
                                                <option value="">Pilih Kecamatan</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Canada">Canada</option>
                                                <option value="China">China</option>
                                                <option value="France">France</option>
                                                <option value="Germany">Germany</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Korea">Korea, Republic of</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Russia">Russian Federation</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="add-road-length">Panjang Ruas</label>
                                            <input type="number" id="add-road-length" class="form-control" placeholder="Contoh: 4.3"
                                                   aria-label="Panjang Ruas" name="length" required />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="add-road-width">Lebar Ruas</label>
                                            <input type="number" id="add-road-width" class="form-control" placeholder="Contoh: 1.1"
                                                   aria-label="Lebar Ruas" name="width" required />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="add-road-good">Kondisi Baik</label>
                                            <input type="number" id="add-road-good" class="form-control"
                                                   placeholder="Nilai Kondisi Baik" aria-label="Nilai Kondisi Baik" name="good"
                                                   required />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="add-road-medium">Kondisi Sedang</label>
                                            <input type="number" id="add-road-medium" class="form-control"
                                                   placeholder="Nilai Kondisi Sedang" aria-label="Nilai Kondisi Sedang" name="medium"
                                                   required />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="add-road-slight">Kondisi Rusak Ringan</label>
                                            <input type="number" id="add-road-slight" class="form-control"
                                                   placeholder="Nilai Kondisi Rusak Ringan" aria-label="Nilai Kondisi Rusak Ringan"
                                                   name="slight" required />
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="add-road-severely">Kondisi Rusak Berat</label>
                                            <input type="number" id="add-road-severely" class="form-control"
                                                   placeholder="Nilai Kondisi Rusak Berat" aria-label="Nilai Kondisi Rusak Berat"
                                                   name="severely" required />
                                        </div>

                                        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Simpan</button>
                                        <button type="reset" class="btn btn-label-danger" data-bs-dismiss="offcanvas">Batal</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="navs-sales-id" role="tabpanel">
                        <h5>Filter Jembatan</h5>
                        <div class="row g-3 mb-3">
                            <div class="col-5">
                                <select name="yearBridge" id="yearBridge" class="select2">
                                    <option value="">Pilih Tahun</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select>
                            </div>
                            <div class="col-5">
                                <select name="conditionBridge" id="conditionBridge" class="select2">
                                    <option value="">Pilih Tahun</option>
                                    <option value="baik">Baik</option>
                                    <option value="sedang">Sedang</option>
                                    <option value="rusak_ringan">Rusak Ringan</option>
                                    <option value="rusak_berat">Rusak Berat</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <button class="btn btn-label-primary me-md-2 me-1">Cari</button>
                                <button class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-datatable table-responsive">
                                <table class="datatables-roads table border-top">
                                    <thead>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Vendors JS -->
<!--<script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>-->
<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/form-validation.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Page JS -->
<!-- <script src="<?#= base_url('assets/js/app-user-list.js') ?>"></script> -->

<script>

    // scroll
    const yearScroll = document.getElementById('yearScroll'),
        horizontalExample = document.getElementById('horizontal-example');

    // if (yearScroll) {
    //     new PerfectScrollbar(yearScroll, {
    //         wheelPropagation: false,
    //         suppressScrollY: true
    //     });
    // }

    if (horizontalExample) {
        new PerfectScrollbar(horizontalExample, {
            wheelPropagation: false,
            suppressScrollY: true
        });
    }

    // Variable declaration for table
    var dt_road_table = $('.datatables-roads'),
        select2 = $('.select2'),
        roadView = 'roads/detail?ref=',
        statusObj = {
            1: {
                title: 'Pending',
                class: 'bg-label-warning'
            },
            2: {
                title: 'Active',
                class: 'bg-label-success'
            },
            3: {
                title: 'Inactive',
                class: 'bg-label-secondary'
            }
        };

    if (select2.length) {
        select2.each(function() {
            var $this = $(this);
            $this.wrap('<div class="position-relative"></div>').select2({
                dropdownParent: $this.parent()
            });
        });
    }

    load_data_table($("#year").val());


    function load_data_table(year)
    {
        console.log(year);
        if (dt_road_table.length) {
            var yearSelect		= $("#year").val();

            dt_road_table.DataTable({
                destroy: true,
                // ajax: "{{ url('tasks/get_roads?year=') }}" + yearSelect,
                ajax: "{{ url('tasks/get_roads') }}",
                lengthMenu: [ 10, 25, 50, 100, 250 ],
                columns: [
                    // columns according to JSON
                    {
                        data: ''
                    },
                    {
                        data: ''
                    },
                    {
                        data: 'code'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'district'
                    },
                    {
                        data: 'length'
                    },
                    {
                        data: 'width'
                    },
                    {
                        data: 'good_condition'
                    },
                    {
                        data: 'medium_condition'
                    },
                    {
                        data: 'slight_damaged_condition'
                    },
                    {
                        data: 'severely_damaged_condition'
                    },
                    {
                        data: 'year'
                    },
                    {
                        data: 'action'
                    }
                ],
                columnDefs: [
                    {
                        // For Responsive
                        className: 'control',
                        searchable: false,
                        orderable: false,
                        responsivePriority: 2,
                        targets: 0,
                        render: function(data, type, full, meta) {
                            return '';
                        }
                    },
                    {
                        searchable: false,
                        targets: 1,
                        render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        searchable: true,
                        targets: 4,
                        render: function (data, type, full, meta) {
                            if (full.district_secondary === null || full.district_secondary === '0') {
                                return data.name;
                            } else {
                                return data.name + ", " + full.district_secondary.name;
                            }
                        }
                    },
                    {
                        targets: 5,
                        render: function(data, type, full, meta) {
                            if (data == null || data == "") {
                                return "-";
                            } else {
                                return data + " KM";
                            }
                        }
                    },
                    {
                        targets: 6,
                        render: function(data, type, full, meta) {
                            if (data == null || data == "") {
                                return "-";
                            } else {
                                return data + " M";
                            }
                        }
                    },
                    {
                        targets: 7,
                        render: function(data, type, full, meta) {
                            if (data == null || data == "") {
                                return "-";
                            } else {
                                return data + " KM";
                            }
                        }
                    },
                    {
                        targets: 8,
                        render: function(data, type, full, meta) {
                            if (data == null || data == "") {
                                return "-";
                            } else {
                                return data + " KM";
                            }
                        }
                    },
                    {
                        targets: 9,
                        render: function(data, type, full, meta) {
                            if (data == null || data == "") {
                                return "-";
                            } else {
                                return data + " KM";
                            }
                        }
                    },
                    {
                        targets: 10,
                        render: function(data, type, full, meta) {
                            if (data == null || data == "") {
                                return "-";
                            } else {
                                return data + " KM";
                            }
                        }
                    },
                    {
                        // Actions
                        targets: -1,
                        title: 'Aksi',
                        searchable: false,
                        orderable: false,
                        render: function(data, type, full, meta) {
                            return (
                                '<div class="d-flex align-items-center">' +
                                '<a href="javascript:;" class="text-body"><i class="ti ti-edit ti-sm me-2"></i></a>' +
                                '<a href="javascript:;" class="text-body delete-record"><i class="ti ti-trash ti-sm mx-2"></i></a>' +
                                '<a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-sm mx-1"></i></a>' +
                                '<div class="dropdown-menu dropdown-menu-end m-0">' +
                                '<a href="' +
                                roadView + full.id +
                                '" class="dropdown-item">View</a>' +
                                '<a href="javascript:;" class="dropdown-item">Suspend</a>' +
                                '</div>' +
                                '</div>'
                            );
                        }
                    }
                ],
                order: [
                    [1, 'asc']
                ],
                dom: '<"row me-2"' +
                    '<"col-md-2"<"me-3"l>>' +
                    '<"col-md-10"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0"fB>>' +
                    '>t' +
                    '<"row mx-2"' +
                    '<"col-sm-12 col-md-6"i>' +
                    '<"col-sm-12 col-md-6"p>' +
                    '>',
                language: {
                    sLengthMenu: '_MENU_',
                    search: '',
                    searchPlaceholder: 'Cari Ruas Jalan..',
                    emptyTable: "Oppss... Data tidak ditemukan"
                },
                // Buttons with Dropdown
                buttons: [
                    {
                        extend: 'collection',
                        className: 'btn btn-label-success dropdown-toggle mx-3',
                        text: '<i class="ti ti-screen-share me-1 ti-xs"></i>Export',
                        buttons: [
                            {
                                extend: 'print',
                                text: '<i class="ti ti-printer me-2" ></i>Print',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [2, 3, 4, 5, 6, 7, 8, 9, 10],
                                    // prevent avatar to be print
                                    format: {
                                        body: function(inner, coldex, rowdex) {
                                            if (inner.length <= 0) return inner;
                                            var el = $.parseHTML(inner);
                                            var result = '';
                                            $.each(el, function(index, item) {
                                                if (item.classList !== undefined && item
                                                    .classList.contains('user-name')) {
                                                    result = result + item.lastChild
                                                        .firstChild.textContent;
                                                } else if (item.innerText ===
                                                    undefined) {
                                                    result = result + item.textContent;
                                                } else result = result + item.innerText;
                                            });
                                            return result;
                                        }
                                    }
                                },
                                customize: function(win) {
                                    //customize print view for dark
                                    $(win.document.body)
                                        .css('color', headingColor)
                                        .css('border-color', borderColor)
                                        .css('background-color', bodyBg);
                                    $(win.document.body)
                                        .find('table')
                                        .addClass('compact')
                                        .css('color', 'inherit')
                                        .css('border-color', 'inherit')
                                        .css('background-color', 'inherit');
                                }
                            },
                            {
                                extend: 'csv',
                                text: '<i class="ti ti-file-text me-2" ></i>Csv',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [2, 3, 4, 5, 6, 7, 8, 9, 10],
                                    // prevent avatar to be display
                                    format: {
                                        body: function(inner, coldex, rowdex) {
                                            if (inner.length <= 0) return inner;
                                            var el = $.parseHTML(inner);
                                            var result = '';
                                            $.each(el, function(index, item) {
                                                if (item.classList !== undefined && item
                                                    .classList.contains('user-name')) {
                                                    result = result + item.lastChild
                                                        .firstChild.textContent;
                                                } else if (item.innerText ===
                                                    undefined) {
                                                    result = result + item.textContent;
                                                } else result = result + item.innerText;
                                            });
                                            return result;
                                        }
                                    }
                                }
                            },
                            {
                                extend: 'excel',
                                text: '<i class="ti ti-file-spreadsheet me-2"></i>Excel',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [2, 3, 4, 5, 6, 7, 8, 9, 10],
                                    // prevent avatar to be display
                                    format: {
                                        body: function(inner, coldex, rowdex) {
                                            if (inner.length <= 0) return inner;
                                            var el = $.parseHTML(inner);
                                            var result = '';
                                            $.each(el, function(index, item) {
                                                if (item.classList !== undefined && item
                                                    .classList.contains('user-name')) {
                                                    result = result + item.lastChild
                                                        .firstChild.textContent;
                                                } else if (item.innerText ===
                                                    undefined) {
                                                    result = result + item.textContent;
                                                } else result = result + item.innerText;
                                            });
                                            return result;
                                        }
                                    }
                                }
                            },
                            {
                                extend: 'pdf',
                                text: '<i class="ti ti-file-code-2 me-2"></i>Pdf',
                                className: 'dropdown-item',
                                exportOptions: {
                                    columns: [2, 3, 4, 5, 6, 7, 8, 9, 10],
                                    // prevent avatar to be display
                                    format: {
                                        body: function(inner, coldex, rowdex) {
                                            if (inner.length <= 0) return inner;
                                            var el = $.parseHTML(inner);
                                            var result = '';
                                            $.each(el, function(index, item) {
                                                if (item.classList !== undefined && item
                                                    .classList.contains('user-name')) {
                                                    result = result + item.lastChild
                                                        .firstChild.textContent;
                                                } else if (item.innerText ===
                                                    undefined) {
                                                    result = result + item.textContent;
                                                } else result = result + item.innerText;
                                            });
                                            return result;
                                        }
                                    }
                                }
                            }
                        ]
                    },
                    {
                        text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Tambah Ruas Jalan Baru</span>',
                        className: 'add-new btn btn-primary',
                        attr: {
                            'data-bs-toggle': 'offcanvas',
                            'data-bs-target': '#offcanvasAddRoad'
                        }
                    }
                ],
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal({
                            header: function(row) {
                                var data = row.data();
                                return data['name'];
                            }
                        }),
                        type: 'column',
                        renderer: function(api, rowIdx, columns) {
                            var data = $.map(columns, function(col, i) {
                                return col.title !==
                                '' // ? Do not show row in modal popup if title is blank (for check box)
                                    ?
                                    '<tr data-dt-row="' +
                                    col.rowIndex +
                                    '" data-dt-column="' +
                                    col.columnIndex +
                                    '">' +
                                    '<td>' +
                                    col.title +
                                    ':' +
                                    '</td> ' +
                                    '<td>' +
                                    col.data +
                                    '</td>' +
                                    '</tr>' :
                                    '';
                            }).join('');

                            return data ? $('<table class="table"/><tbody />').append(data) : false;
                        }
                    }
                },
            });
        }
    }

    $("#year").change(function () {
        var year	= $("#year").val();
        load_data_table(year);
    });
</script>
@endsection
