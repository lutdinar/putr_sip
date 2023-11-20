@extends('templates.main')
@section('title', 'Daftar Pengguna')
@section('content')
<div class="row g-4 mb-4">
    <div class="col-xs-12 col-sm-4 col-lg-4 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Jumlah</span>
                        <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2"><?= (!empty($users)) ? $users : 0; ?></h4>
                        </div>
                        <span>Pengguna</span>
                    </div>
                    <span class="badge bg-label-primary rounded p-2">
                        <i class="ti ti-user ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-lg-4 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Pengguna Aktif</span>
                        <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2"><?= (!empty($users_registered)) ? $users_registered : 0 ?></h4>
                        </div>
                        <span>Pengguna</span>
                    </div>
                    <span class="badge bg-label-success rounded p-2">
                        <i class="ti ti-user-check ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-lg-4 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Pengguna Tidak Aktif</span>
                        <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2"><?= (!empty($users_not_registered)) ? $users_not_registered : 0; ?></h4>
                        </div>
                        <span>Pengguna</span>
                    </div>
                    <span class="badge bg-label-danger rounded p-2">
                        <i class="ti ti-user-exclamation ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ALERT -->

<!-- List of Users -->
<div class="card">
    <div class="card-header border-bottom">
        <h5 class="card-title mb-3">Filter Pengguna</h5>
        <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
            <div class="col-md-6 user_role"></div>
            <div class="col-md-6 user_status"></div>
        </div>
    </div>
    <div class="card-datatable table-responsive">
        <table class="datatables-users table border-top">
            <thead>
            <tr>
                <th></th>
                <th>Pengguna</th>
                <th>Kontak</th>
                <th>Username</th>
                <th>Hak Akses</th>
                <th>Status Akun</th>
                <th>Aksi</th>
            </tr>
            </thead>
        </table>
    </div>
    <!-- Offcanvas to add new user -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Tambah Pengguna Baru</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
            <form action="{{ url('users/save') }}" class="row g-3" id="addNewUserForm" method="post">
                <div class="col-12">
                    <h6 class="fw-semibold">1. Detail Pengguna</h6>
                    <hr class="mt-0" />
                </div>

                <div class="col-12">
                    <label class="form-label" for="formName">Nama Lengkap</label>
                    <input type="text" id="formName" class="form-control" placeholder="John Doe" name="formName" autocomplete="off" />
                </div>
                <div class="col-12">
                    <label class="form-label" for="formEmail">Email</label>
                    <input class="form-control" type="email" id="formEmail" name="formEmail"
                           placeholder="john.doe@xxxxx.com" autocomplete="off" />
                </div>
                <div class="col-12">
                    <label class="form-label" for="formContact">Kontak</label>
                    <input type="text" id="formContact" class="form-control phone-mask" placeholder="08xxxxxxxxx"
                           name="formContact" autocomplete="off" />
                </div>

                <div class="col-12 pt-3">
                    <h6 class="fw-semibold">2. Setup Akun</h6>
                    <hr class="mt-0" />
                </div>

                <div class="col-12">
                    <label class="form-label" for="formUsername">Username</label>
                    <input type="text" class="form-control" id="formUsername" name="formUsername" placeholder="johndoe" autocomplete="off">
                </div>

                <div class="col-12">
                    <div class="form-password-toggle">
                        <label class="form-label" for="formPass">Password</label>
                        <!--                        <a href="javascript:void(0);" class="form-label float-end" onclick="generateString()">Generate Password</a>-->
                        <div class="input-group input-group-merge">
                            <input class="form-control" type="password" id="formPass" name="formPass"
                                   placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                   aria-describedby="multicol-password2" />
                            <span class="input-group-text cursor-pointer" id="multicol-password2"><i class="ti ti-eye-off"></i></span>
                        </div>
                        <div class="progress" style="height: 8px">
                            <div
                                class="progress-bar"
                                role="progressbar"
                                style="width: 0%"
                                aria-valuenow="25"
                                aria-valuemin="0"
                                aria-valuemax="100"
                                id="progress-bar"
                            ></div>
                        </div>
                        <label id="password-strength-label" style="font-size: 12px"></label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-password-toggle">
                        <label class="form-label" for="formConfirmPass">Confirm Password</label>
                        <div class="input-group input-group-merge">
                            <input class="form-control" type="password" id="formConfirmPass" name="formConfirmPass"
                                   placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                   aria-describedby="multicol-confirm-password2" />
                            <span class="input-group-text cursor-pointer" id="multicol-confirm-password2"><i
                                    class="ti ti-eye-off"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label" for="formRole">Hak Akses</label>
                    <select name="formRole" class="form-select select2" data-allow-clear="false">
                        <option value="">Pilih Hak Akses</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary me-sm-3 me-1">Simpan</button>
                <button type="reset" class="btn btn-label-danger" data-bs-dismiss="offcanvas">Batal</button>
            </form>
        </div>
    </div>
</div>

<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/PasswordStrength.min.js') }}"></script>

<script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>

<script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script>
    let borderColor, bodyBg, headingColor;

    if (isDarkStyle) {
        borderColor = config.colors_dark.borderColor;
        bodyBg = config.colors_dark.bodyBg;
        headingColor = config.colors_dark.headingColor;
    } else {
        borderColor = config.colors.borderColor;
        bodyBg = config.colors.bodyBg;
        headingColor = config.colors.headingColor;
    }

    // Variable declaration for table
    var dt_user_table = $('.datatables-users'),
        select2 = $('.select2'),
        userView = 'users/details?user=';

    // Users datatable
    if (dt_user_table.length) {
        var dt_user = dt_user_table.DataTable({
            processing: true,
            //ajax: '<?php //= base_url('users/get_users_json') ?>//', // JSON file to add data
            ajax: {
                url: "{{ url('users/get_users') }}",
                dataType: 'json',
                crossDomain: true
            },
            deferRender: true,
            columns: [
                // columns according to JSON
                {
                    data: ''
                },
                {
                    data: 'user'
                },
                {
                    data: 'user'
                },
                {
                    data: 'username'
                },
                {
                    data: 'role'
                },
                {
                    data: 'state'
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
                    // User name and email
                    targets: 1,
                    responsivePriority: 4,
                    render: function(data, type, full, meta) {
                        var $name = full['user']['name'],
                            $email = full['user']['email'];

                        // For Avatar badge
                        var stateNum = Math.floor(Math.random() * 5);
                        var states = ['success', 'danger', 'warning', 'info', 'primary'];
                        var $state = states[stateNum],
                            $initials = $name.match(/\b\w/g) || [];
                        $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
                        $output = '<span class="avatar-initial rounded-circle bg-label-' + $state +
                            '">' + $initials + '</span>';

                        // Creates full output for row
                        var $row_output =
                            '<div class="d-flex justify-content-start align-items-center user-name">' +
                            '<div class="avatar-wrapper">' +
                            '<div class="avatar avatar-sm me-3">' +
                            $output +
                            '</div>' +
                            '</div>' +
                            '<div class="d-flex flex-column">' +
                            '<a href="' +
                            userView +
                            '" class="text-body text-truncate"><span class="fw-semibold">' +
                            $name +
                            '</span></a>' +
                            '<small class="text-muted">' +
                            $email +
                            '</small>' +
                            '</div>' +
                            '</div>';
                        return $row_output;
                    }
                },
                {
                    // User Phone
                    targets: 2,
                    render: function(data, type, full, meta) {
                        var $phone = full['user']['phone'];
                        if ($phone != null) {
                            return '<span class="fw-semibold">' + $phone + '</span>';
                        } else {
                            return '<span class="fw-semibold">-</span>';
                        }

                    }

                },
                {
                    // Username
                    targets: 3,
                    render: function(data, type, full, meta) {
                        var $account = full['username'];

                        return '<span class="fw-semibold">' + $account + '</span>';
                    }
                },
                {
                    // User Role
                    targets: 4,
                    render: function(data, type, full, meta) {
                        var $account = full['role']['name'];
                        var roleBadgeObj = {
                            Operator: '<span class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30 me-2"><i class="ti ti-user ti-sm"></i></span>',
                            Admin: '<span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30 me-2"><i class="ti ti-circle-check ti-sm"></i></span>',
                            Konsultan: '<span class="badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30 me-2"><i class="ti ti-chart-pie-2 ti-sm"></i></span>',
                            PPK: '<span class="badge badge-center rounded-pill bg-label-info w-px-30 h-px-30 me-2"><i class="ti ti-edit ti-sm"></i></span>',
                        };

                        return "<span class='text-truncate d-flex align-items-center'>" + roleBadgeObj[$account] + $account.toUpperCase() + "</span>";
                    }
                },
                {
                    // User Status
                    targets: 5,
                    render: function(data, type, full, meta) {
                        var $account = full['state'];
                        var $bg_label;

                        switch ($account) {
                            case "active":
                                $bg_label = 'bg-label-success';
                                break;
                            case "inactive":
                                $bg_label = 'bg-label-danger';
                                break;
                        }
                        return '<span class="badge ' + $bg_label + '">' + $account.toUpperCase() + '</span>';
                    }
                },
                {
                    // Actions
                    targets: -1,
                    title: 'Aksi',
                    searchable: false,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        let link		= '';
                        if (full["state"] == "active") {
                            link		= '<a href="javascript:void(0);" class="dropdown-item btn-inactive" id="'+ full["id"] +'" data-state="inactive" onclick="stateConfirm(this)">Non-Aktifkan Akun</a>';
                        } else {
                            link		= '<a href="javascript:void(0);" class="dropdown-item btn-inactive" id="'+ full["id"] +'" data-state="active" onclick="stateConfirm(this)">Aktifkan Akun</a>';
                        }

                        return (
                            '<div class="d-flex align-items-center">' +
                            '<a href="javascript:void(0);" class="text-body" id="'+ full["id"] +'" onclick="deleteConfirm(this)"><i class="ti ti-trash ti-sm mx-2"></i></a>' +
                            '<a href="javascript:void(0);" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-sm mx-1"></i></a>' +
                            '<div class="dropdown-menu dropdown-menu-end m-0">' +
                            '<a href="' +
                            userView + full["username"] +
                            '" class="dropdown-item">Lihat</a>' + link +
                            '</div>' +
                            '</div>'
                        );
                    }
                }
            ],
            order: [
                [1, 'desc']
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
                searchPlaceholder: 'Search..'
            },
            // Buttons with Dropdown
            buttons: [{
                extend: 'collection',
                className: 'btn btn-label-secondary dropdown-toggle mx-3',
                text: '<i class="ti ti-screen-share me-1 ti-xs"></i>Export',
                buttons: [{
                    extend: 'print',
                    text: '<i class="ti ti-printer me-2" ></i>Print',
                    className: 'dropdown-item',
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5],
                        // prevent avatar to be print
                        format: {
                            body: function(inner, coldex, rowdex) {
                                if (inner.length <= 0) return inner;
                                var el = $.parseHTML(inner);
                                var result = '';
                                $.each(el, function(index, item) {
                                    if (item.classList !== undefined && item.classList
                                        .contains('user-name')) {
                                        result = result + item.lastChild.firstChild
                                            .textContent;
                                    } else if (item.innerText === undefined) {
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
                            columns: [1, 2, 3, 4, 5],
                            // prevent avatar to be display
                            format: {
                                body: function(inner, coldex, rowdex) {
                                    if (inner.length <= 0) return inner;
                                    var el = $.parseHTML(inner);
                                    var result = '';
                                    $.each(el, function(index, item) {
                                        if (item.classList !== undefined && item.classList
                                            .contains('user-name')) {
                                            result = result + item.lastChild.firstChild
                                                .textContent;
                                        } else if (item.innerText === undefined) {
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
                            columns: [1, 2, 3, 4, 5],
                            // prevent avatar to be display
                            format: {
                                body: function(inner, coldex, rowdex) {
                                    if (inner.length <= 0) return inner;
                                    var el = $.parseHTML(inner);
                                    var result = '';
                                    $.each(el, function(index, item) {
                                        if (item.classList !== undefined && item.classList
                                            .contains('user-name')) {
                                            result = result + item.lastChild.firstChild
                                                .textContent;
                                        } else if (item.innerText === undefined) {
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
                            columns: [1, 2, 3, 4, 5],
                            // prevent avatar to be display
                            format: {
                                body: function(inner, coldex, rowdex) {
                                    if (inner.length <= 0) return inner;
                                    var el = $.parseHTML(inner);
                                    var result = '';
                                    $.each(el, function(index, item) {
                                        if (item.classList !== undefined && item.classList
                                            .contains('user-name')) {
                                            result = result + item.lastChild.firstChild
                                                .textContent;
                                        } else if (item.innerText === undefined) {
                                            result = result + item.textContent;
                                        } else result = result + item.innerText;
                                    });
                                    return result;
                                }
                            }
                        }
                    },
                    {
                        extend: 'copy',
                        text: '<i class="ti ti-copy me-2" ></i>Copy',
                        className: 'dropdown-item',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5],
                            // prevent avatar to be display
                            format: {
                                body: function(inner, coldex, rowdex) {
                                    if (inner.length <= 0) return inner;
                                    var el = $.parseHTML(inner);
                                    var result = '';
                                    $.each(el, function(index, item) {
                                        if (item.classList !== undefined && item.classList
                                            .contains('user-name')) {
                                            result = result + item.lastChild.firstChild
                                                .textContent;
                                        } else if (item.innerText === undefined) {
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
                    text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Tambah Pengguna Baru</span>',
                    className: 'add-new btn btn-sm btn-primary waves-effect waves-light',
                    attr: {
                        'data-bs-toggle': 'offcanvas',
                        'data-bs-target': '#offcanvasAddUser'
                    }
                }
            ],
            // For responsive popup
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            return 'Details of ' + data['user']['name'];
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
            initComplete: function() {
                // Adding role filter once table initialized
                this.api()
                    .columns(4)
                    .every(function() {
                        var column = this;
                        var select = $(
                            '<select id="filterRole" class="form-select text-capitalize select2"><option value=""> Pilih Hak Akses </option></select>'
                        )
                            .appendTo('.user_role')
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function(d, j) {
                                if (d != null) {
                                    select.append('<option value="' + d.name + '" >' + d.name + '</option>');
                                }
                            });
                    });
                // Adding status filter once table initialized
                this.api()
                    .columns(5)
                    .every(function() {
                        var column = this;
                        var select = $(
                            '<select id="filterStatus" class="form-select text-capitalize select2"><option value=""> Pilih Status Akun </option></select>'
                        )
                            .appendTo('.user_status')
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function(d, j) {
                                if (d != null) {
                                    select.append(
                                        '<option value="' + d + '">' + d + '</option>'
                                    );
                                }

                            });
                    });
            }
        });
    }

    if (select2.length) {
        var $this = select2;
        $this.wrap('<div class="position-relative"></div>').select2({
            // placeholder: 'Pilih Hak Akses',
            dropdownParent: $this.parent()
        });
    }

    const progressBar	 = document.getElementById('progress-bar');
    const passwordStrengthLabel	= document.getElementById('password-strength-label');
    const addNewUserForm = document.getElementById('addNewUserForm');
    const formValidation = FormValidation.formValidation(addNewUserForm, {
        fields: {
            formName: {
                validators: {
                    notEmpty: {
                        message: 'Mohon masukan nama lengkap pengguna'
                    },
                    stringLength: {
                        min: 6,
                        max: 200,
                        message: 'Nama lengkap harus lebih kecil dari 200 dan lebih besar dari 6 karakter'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z ]+$/,
                        message: 'Nama lengkap hanya dapat diisi oleh alfabet dan angka'
                    }
                }
            },
            formEmail: {
                validators: {
                    notEmpty: {
                        message: 'Mohon masukan email pengguna'
                    },
                    emailAddress: {
                        message: 'Anda memasukan email yang tidak valid'
                    }
                }
            },
            formContact: {
                validators: {
                    notEmpty: {
                        message: 'Mohon masukan nomor kontak pengguna'
                    },
                    stringLength: {
                        min: 6,
                        max: 15,
                        message: 'Nomor kontak harus lebih kecil dari 15 dan lebih besar dari 6 karakter'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'Mohon masukan angka',
                    },
                }
            },
            formUsername: {
                validators: {
                    notEmpty: {
                        message: 'Mohon masukan nomor kontak pengguna'
                    },
                    stringLength: {
                        min: 6,
                        max: 20
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'Username hanya dapat diisi oleh alfabet dan angka'
                    }
                }
            },
            formPass: {
                validators: {
                    notEmpty: {
                        message: 'Mohon masukan password pengguna'
                    },
                    stringLength: {
                        min: 6,
                        message: 'Password harus lebih besar dari 6 karakter'
                    },
                }
            },
            formConfirmPass: {
                validators: {
                    notEmpty: {
                        message: 'Mohon masukan konfirmasi password pengguna'
                    },
                    stringLength: {
                        min: 6,
                        message: 'Konfirmasi Password harus lebih besar dari 6 karakter'
                    },
                    identical: {
                        compare: function() {
                            return addNewUserForm.querySelector('[name="formPass"]').value;
                        },
                        message: 'Password dan Konfirmasi Password tidak sama'
                    }
                }
            },
            formRole: {
                validators: {
                    notEmpty: {
                        message: 'Mohon pilih hak akses pengguna'
                    }
                }
            },
        },
        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap5: new FormValidation.plugins.Bootstrap5({
                // Use this for enabling/changing valid/invalid class
                // eleInvalidClass: '',
                eleValidClass: '',
                rowSelector: function(field, ele) {
                    // field is the field name & ele is the field element
                    return '.col-12';
                }
            }),
            submitButton: new FormValidation.plugins.SubmitButton(),
            // Submit the form when all fields are valid
            defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
            autoFocus: new FormValidation.plugins.AutoFocus(),
            passwordStrength: new FormValidation.plugins.PasswordStrength({
                field: 'formPass',
                message: 'Password lemah',
                minimalScore: 1,
                onValidated: function(valid, message, score) {
                    switch (score) {
                        case 0:
                            progressBar.style.width = '5%';
                            progressBar.style.backgroundColor = '#ff4136';
                            passwordStrengthLabel.style.color = '#ff4136';
                            passwordStrengthLabel.innerHTML	= "Password sangat lemah";
                        case 1:
                            progressBar.style.width = '15%';
                            progressBar.style.backgroundColor = '#ff4136';
                            passwordStrengthLabel.style.color = '#ff4136';
                            passwordStrengthLabel.innerHTML	= "Password sangat lemah";
                            break;
                        case 2:
                            progressBar.style.width = '30%';
                            progressBar.style.backgroundColor = '#ff4136';
                            passwordStrengthLabel.style.color = '#ff4136';
                            passwordStrengthLabel.innerHTML	= "Password cukup lemah";
                            break;
                        case 3:
                            progressBar.style.width = '60%';
                            progressBar.style.backgroundColor = '#ffb700';
                            passwordStrengthLabel.style.color = '#ffb700';
                            passwordStrengthLabel.innerHTML	= "Password kuat";
                            break;
                        default:
                            progressBar.style.width = '100%';
                            progressBar.style.backgroundColor = '#19a974';
                            passwordStrengthLabel.style.color = '#19a974';
                            passwordStrengthLabel.innerHTML	= "Password sangat kuat";
                            break;
                    }
                }
            })
        },
        init: instance => {
            instance.on('plugins.message.placed', function(e) {
                //* Move the error message out of the `input-group` element
                if (e.element.parentElement.classList.contains('input-group')) {
                    // `e.field`: The field name
                    // `e.messageElement`: The message element
                    // `e.element`: The field element
                    e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
                }
                //* Move the error message out of the `row` element for custom-options
                if (e.element.parentElement.parentElement.classList.contains(
                    'custom-option')) {
                    e.element.closest('.row').insertAdjacentElement('afterend',
                        e.messageElement);
                }
            });
        }
    });
</script>
@endsection
