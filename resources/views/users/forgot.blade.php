@extends('templates.main')
@section('title', 'Daftar Ajuan Lupa Password')
@section('content')
<div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Ajuan Lupa Password</span>
                        <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2">0</h4>
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
    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Telah Diverifikasi</span>
                        <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2">10</h4>
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
    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Belum Diverifikasi</span>
                        <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2">0</h4>
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

<!-- END ALERT -->

<div class="card">
    <div class="card-header border-bottom">
        <h5 class="card-title mb-0">Daftar Ajuan Lupa Password</h5>
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
                <th>Verifikator</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
        </table>
    </div>
</div>

<div class="modal fade" id="reset_password_modal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" id="reset_password_form" action="{{ url('users/save_reset_password') }}" method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Reset Password Pengguna</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <div hidden>
                            @csrf
                            <input type="text" class="form-control" name="account_reset_password" id="account_reset_password" required>
                            <input type="text" class="form-control" name="account" id="account" required>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="form-password-toggle">
                            <label class="form-label" for="password">Password</label>
                            <a href="javascript:void(0);" class="form-label float-end" onclick="generateString()">Generate
                                Password</a>
                            <div class="input-group input-group-merge">
                                <input class="form-control" type="password" id="password" name="password"
                                       placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                       aria-describedby="multicol-confirm-password2" />
                                <span class="input-group-text cursor-pointer" id="multicol-confirm-password2"><i
                                        class="ti ti-eye-off"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-password-toggle">
                            <label class="form-label" for="password">Konfirmasi Password</label>
                            <div class="input-group input-group-merge">
                                <input class="form-control" type="password" id="confirm_password" name="confirm_password"
                                       placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                       aria-describedby="multicol-confirm-password2" />
                                <span class="input-group-text cursor-pointer" id="multicol-confirm-password2"><i
                                        class="ti ti-eye-off"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-danger" data-bs-dismiss="modal">
                    Batal
                </button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- Vendors JS -->
<script src="{{ url('assets/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ url('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ url('assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ url('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
<script src="{{ url('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}">
</script>
<script src="{{ url('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}">
</script>
<script src="{{ url('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
<script src="{{ url('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>

<!-- Main JS -->
<script src="{{ url('assets/js/main.js') }}"></script>

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
            ajax: {
                url: '{{ url("users/get_users_forgot_request_json") }}',
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
                    data: 'account'
                },
                {
                    data: 'account'
                },
                {
                    data: 'account'
                },
                {
                    data: 'account'
                },
                {
                    data: 'verify_account'
                },
                {
                    data: 'state'
                },
                {
                    data: 'account'
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
                        var $user	= full['account']['user'];
                        var $name 	= $user['name'],
                            $email 	= $user['email'];

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
                        var $phone = full['account']['user']['phone'];
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
                        var $account = full['account']['username'];

                        return '<span class="fw-semibold">' + $account + '</span>';
                    }
                },
                {
                    // User Role
                    targets: 4,
                    render: function(data, type, full, meta) {
                        var $account = full['account']['role']['name'];
                        var roleBadgeObj = {
                            operator: '<span class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30 me-2"><i class="ti ti-user ti-sm"></i></span>',
                            admin: '<span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30 me-2"><i class="ti ti-circle-check ti-sm"></i></span>',
                            consultant: '<span class="badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30 me-2"><i class="ti ti-chart-pie-2 ti-sm"></i></span>',
                            ppk: '<span class="badge badge-center rounded-pill bg-label-info w-px-30 h-px-30 me-2"><i class="ti ti-edit ti-sm"></i></span>',
                            root: '<span class="badge badge-center rounded-pill bg-label-danger w-px-30 h-px-30 me-2"><i class="ti ti-user-check ti-sm"></i></span>',
                        };

                        return "<span class='text-truncate d-flex align-items-center'>" + roleBadgeObj[$account] + $account.toUpperCase() + "</span>";
                    }
                },
                {
                    // account verificators
                    targets: 5,
                    render: function(data, type, full, meta) {
                        var $verificators	= full['verify_account'];
                        var formattedDate = moment(full['verify_date']).format('DD-MM-YYYY h:mm:ss');

                        if ($verificators != null) {
                            return "<span>" + $verificators.username + " pada " + formattedDate + "</span>";
                        } else {
                            return "<span>-</span>";
                        }
                    }
                },
                {
                    // verification status
                    targets: 6,
                    render: function (data, type, full, meta) {
                        var $state = full['state'];
                        var $span;

                        switch ($state) {
                            case "1":
                                $span	= "<span class='badge bg-label-success h-px-30 me-2'><i class='ti ti-circle-check ti-sm'></i> Sudah Ditanggapi</span>"
                                break;
                            case "0":
                                $span 	= "<span class='badge bg-label-warning h-px-30 me-2'><i class='ti ti-clock ti-sm'></i> Menunggu Ditanggapi</span>";
                                break;
                        }
                        return "<span class='align-items-center'>" + $span + "</span>";
                    }
                },
                {
                    // Actions
                    targets: -1,
                    title: 'Aksi',
                    searchable: false,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        if (full.state === "1") {
                            return (
                                '<div class="d-flex align-items-center">' +
                                '<a href="javascript:void(0);" class="text-body"><i class="ti ti-circle-check text-success ti-sm me-2"></i></a>' +
                                '</div>'
                            );
                        } else {
                            return (
                                '<div class="d-flex align-items-center">' +
                                '<a href="javascript:void(0);" class="text-body btn-reset" id="'+ full.id +'"><i class="ti ti-pencil text-warning ti-sm me-2"></i></a>' +
                                '</div>'
                            );
                        }
                    }
                }
            ],
            order: [
                [1, 'desc']
            ],
            language: {
                sLengthMenu: '_MENU_',
                search: '',
                searchPlaceholder: 'Search..'
            },
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            console.log(data);
                            return 'Details of ' + data['account']['user']['name'];
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

    // set modal reset password
    $('.datatables-users tbody').on('click', '.btn-reset', function () {
        $("#account_reset_password").val('');
        $("#account").val('');
        $("#password").val('');
        $("#confirm_password").val('');

        const $data		=  {
            data: this.id
        };

        $.get("{{ url('users/get_reset_password') }}", $data, function (data, status) {
            if (status == 'success') {
                const dao	= JSON.parse(data);

                $("#account_reset_password").val(dao.id);
                $("#account").val(dao.account.id);
                $("#reset_password_modal").modal('show');
            } else {
                alert(status);
            }
        });
    });

    // Filter form control to default size
    // ? setTimeout used for multilingual table initialization
    setTimeout(() => {
        $('.dataTables_filter .form-control').removeClass('form-control-sm');
        $('.dataTables_length .form-select').removeClass('form-select-sm');
    }, 300);

    const reset_password_form		= document.getElementById('reset_password_form');
    const reset_password_validation	= FormValidation.formValidation(reset_password_form, {
        fields: {
            password: {
                validators: {
                    notEmpty: {
                        message: 'Mohon masukan password baru'
                    },
                    stringLength: {
                        min: 6,
                        max: 20,
                        message: 'Password harus lebih kecil dari 20 dan lebih besar dari 6 karakter'
                    }
                }
            },
            confirm_password: {
                validators: {
                    notEmpty: {
                        message: 'Mohon masukan konfirmasi password baru'
                    },
                    stringLength: {
                        min: 6,
                        max: 20,
                        message: 'Konfirmasi Password harus lebih kecil dari 20 dan lebih besar dari 6 karakter'
                    },
                    identical: {
                        compare: function () {
                            return reset_password_form.querySelector('[name="password"]').value;
                        },
                        message: 'Password dan Konfirmasi Password baru tidak sama'
                    }
                }
            }
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
            autoFocus: new FormValidation.plugins.AutoFocus()
        },
        init: instance => {
            instance.on('plugins.message.placed', function(e) {
                //* Move the error message out of the `input-group` element
                if (e.element.parentElement.classList.contains('input-group')) {
                    // `e.field`: The field name
                    // `e.messageElement`: The message element
                    // `e.element`: The field element
                    e.element.parentElement.insertAdjacentElement('afterend', e
                        .messageElement);
                }
                //* Move the error message out of the `row` element for custom-options
                if (e.element.parentElement.parentElement.classList.contains(
                    'custom-option')) {
                    e.element.closest('.row').insertAdjacentElement('afterend',
                        e
                            .messageElement);
                }
            });
        }
    });

    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_=+/';

    function generateString() {
        let result = ' ';
        const charactersLength = characters.length;
        for (let i = 0; i < 8; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }

        $("#password").val(result);
        $("#confirm_password").val(result);
    }
</script>
@endsection
