@extends('templates.main')

@section('title', 'Administrasi Kegiatan - Tahap 1')
@section('content')
    <div class="row mb-3">
        <div class="col-12 text-center mb-4">
            <h4 class="my-2">Administrasi Kegiatan</h4>
            <p>Seluruh bagian administrasi harus terisi untuk menyelesaikan administrasi kegiatan - tahap 1</p>
        </div>
    </div>

    <div class="row g-2 mb-3">
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

    <div class="row">
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
                        Proses Pelaksanaan Pemilihan
                    </button>
                </h2>

                <div id="accordionTaskInformation-1" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <div class="card-datatable table-responsive">
                            <table class="datatables-pelaksanaan-pemilihan table border-top">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>Nama Dokumen</th>
                                    <th>Keterangan</th>
                                    <th>Diunggah oleh</th>
                                    <th class="text-lg-center">Aksi</th>
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
                        Harga Penawaran
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
                        Kemampuan Personil
                    </button>
                </h2>
                <div id="accordionTaskInformation-3" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <div class="card-datatable table-responsive">
                            <table class="datatables-kemampuan-personil table border-top">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>Nama Dokumen</th>
                                    <th>Keterangan</th>
                                    <th>Diunggah oleh</th>
                                    <th class="text-lg-center">Aksi</th>
                                </tr>
                                </thead>
                            </table>
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

        var dt_pelaksanaan_pemilihan_table = $('.datatables-pelaksanaan-pemilihan');

        if (dt_pelaksanaan_pemilihan_table.length) {
            var dt_category = dt_pelaksanaan_pemilihan_table.DataTable({
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
                        searchable: false,
                        targets: 1,
                        render: function (data, type, full, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
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

                            // Creates full output for Categories and Category Detai
                            return $name;
                        }
                    },
                    {
                        // Total products
                        targets: 3,
                        responsivePriority: 3,
                        render: function (data, type, full, meta) {
                            var $total_products = full['total_products'];
                            return '<div class="text-sm-start">' + $total_products + '</div>';
                        }
                    },
                    {
                        // Total Earnings
                        targets: 4,
                        orderable: false,
                        render: function (data, type, full, meta) {
                            var $total_earnings = full['total_earnings'];
                            return "<div class='h6 mb-0 text-sm-start'>" + $total_earnings + '</div';
                        }
                    },
                    {
                        // Actions
                        targets: -1,
                        title: 'Berkas',
                        searchable: false,
                        orderable: false,
                        render: function (data, type, full, meta) {
                            return (
                                '<div class="d-flex align-items-sm-center justify-content-sm-center">' +
                                '<button class="btn btn-sm btn-icon btn-label-success mx-2" title="Lihat Berkas"><i class="ti ti-eye"></i></button>' +
                                '<button class="btn btn-sm btn-icon btn-label-danger delete-record me-2" title="Hapus Berkas"><i class="ti ti-trash"></i></button>' +
                                '</div>'
                            );
                        }
                    }
                ],
                order: [1, 'asc'], //set any columns order asc/desc
                dom:
                    '<"card-header d-flex flex-wrap pb-2 pt-0"' +
                    '<f>' +
                    '<"d-flex justify-content-center justify-content-md-end align-items-baseline"<"dt-action-buttons d-flex justify-content-center flex-md-row mb-3 mb-md-0 ps-1 ms-1 align-items-baseline"lB>>' +
                    '>t' +
                    '<"row mx-1"' +
                    '<"col-sm-12 col-md-6"i>' +
                    '<"col-sm-12 col-md-6"p>' +
                    '>',
                lengthMenu: [5, 10, 20, 50, 70, 100], //for length of menu
                language: {
                    sLengthMenu: '_MENU_',
                    search: '',
                    searchPlaceholder: 'Cari Nama Dokumen'
                },
                // Button for offcanvas
                buttons: [
                    {
                        text: '<i class="ti ti-plus ti-xs me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Tambah Laporan Harian</span>',
                        className: 'btn btn-primary ms-2',
                        attr: {
                            'data-bs-toggle': 'offcanvas',
                            'data-bs-target': '#offcanvasEcommerceCategoryList'
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

        var dt_kemampuan_personil_table = $('.datatables-kemampuan-personil');

        if (dt_kemampuan_personil_table.length) {
            var dt_category = dt_kemampuan_personil_table.DataTable({
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
                        searchable: false,
                        targets: 1,
                        render: function (data, type, full, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
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

                            // Creates full output for Categories and Category Detai
                            return $name;
                        }
                    },
                    {
                        // Total products
                        targets: 3,
                        responsivePriority: 3,
                        render: function (data, type, full, meta) {
                            var $total_products = full['total_products'];
                            return '<div class="text-sm-start">' + $total_products + '</div>';
                        }
                    },
                    {
                        // Total Earnings
                        targets: 4,
                        orderable: false,
                        render: function (data, type, full, meta) {
                            var $total_earnings = full['total_earnings'];
                            return "<div class='h6 mb-0 text-sm-start'>" + $total_earnings + '</div';
                        }
                    },
                    {
                        // Actions
                        targets: -1,
                        title: 'Berkas',
                        searchable: false,
                        orderable: false,
                        render: function (data, type, full, meta) {
                            return (
                                '<div class="d-flex align-items-sm-center justify-content-sm-center">' +
                                '<button class="btn btn-sm btn-icon btn-label-success mx-2" title="Lihat Berkas"><i class="ti ti-eye"></i></button>' +
                                '<button class="btn btn-sm btn-icon btn-label-danger delete-record me-2" title="Hapus Berkas"><i class="ti ti-trash"></i></button>' +
                                '</div>'
                            );
                        }
                    }
                ],
                order: [1, 'asc'], //set any columns order asc/desc
                dom:
                    '<"card-header d-flex flex-wrap pb-2 pt-0"' +
                    '<f>' +
                    '<"d-flex justify-content-center justify-content-md-end align-items-baseline"<"dt-action-buttons d-flex justify-content-center flex-md-row mb-3 mb-md-0 ps-1 ms-1 align-items-baseline"lB>>' +
                    '>t' +
                    '<"row mx-1"' +
                    '<"col-sm-12 col-md-6"i>' +
                    '<"col-sm-12 col-md-6"p>' +
                    '>',
                lengthMenu: [5, 10, 20, 50, 70, 100], //for length of menu
                language: {
                    sLengthMenu: '_MENU_',
                    search: '',
                    searchPlaceholder: 'Cari Nama Dokumen'
                },
                // Button for offcanvas
                buttons: [
                    {
                        text: '<i class="ti ti-plus ti-xs me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Tambah Laporan Harian</span>',
                        className: 'btn btn-primary ms-2',
                        attr: {
                            'data-bs-toggle': 'offcanvas',
                            'data-bs-target': '#offcanvasEcommerceCategoryList'
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
