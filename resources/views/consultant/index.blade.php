@extends('templates.main')
@section('title', 'Daftar Penyedia Jasa')
@section('content')
<div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Total</span>
                        <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2">21,459</h4>
                        </div>
                        <span>Penyedia Jasa</span>
                    </div>
                    <span class="badge bg-label-primary rounded p-2">
                        <i class="ti ti-user ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Terverifikasi</span>
                        <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2">4,567</h4>
                        </div>
                        <span>Penyedia Jasa</span>
                    </div>
                    <span class="badge bg-label-success rounded p-2">
                        <i class="ti ti-user-check ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Memiliki Akun</span>
                        <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2">19,860</h4>
                        </div>
                        <span>Penyedia Jasa</span>
                    </div>
                    <span class="badge bg-label-warning rounded p-2">
                        <i class="ti ti-user-plus ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Belum memiliki akun</span>
                        <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2">237</h4>
                        </div>
                        <span>Penyedia Jasa</span>
                    </div>
                    <span class="badge bg-label-danger rounded p-2">
                        <i class="ti ti-user-exclamation ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Alert -->

<!-- End Alert -->

<div class="app-academy mt-3">
    <form>
        <div class="card p-0 mb-4">
            <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
                <div class="app-academy-md-25 card-body py-0">
                    <img src="{{ asset('assets/img/illustrations/bulb-light.png') }}"
                         class="img-fluid app-academy-img-height scaleX-n1-rtl" alt="Bulb in hand"
                         data-app-light-img="illustrations/bulb-light.png"
                         data-app-dark-img="illustrations/bulb-dark.png" height="90" />
                </div>
                <div class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center">
                    <h3 class="card-title mb-4 lh-sm px-md-5 lh-lg">
                        Semua penyedia jasa terdaftar pada sistem oleh Administrator.
                        <span class="text-primary fw-medium text-nowrap">Cari disini</span>.
                    </h3>
                    <p class="mb-3">
                        Kelola &amp; Verifikasi dari penyedia jasa agar memiliki informasi yang up-to-date
                    </p>
                    <div class="d-flex align-items-center justify-content-between app-academy-md-80">
                        <input name="search" type="search" placeholder="Cari penyedia jasa" class="form-control me-2"
                               value=""
                               autocomplete="off" required />
                        <button type="submit" class="btn btn-primary btn-icon"><i class="ti ti-search"></i></button>
                        <button type="reset" class="mx-2 btn btn-warning btn-icon"
                                onclick="window.location.href = 'consultants'"><i class="ti ti-refresh"></i></button>
                    </div>
                </div>
                <div class="app-academy-md-25 d-flex align-items-end justify-content-end">
                    <img src="{{ asset('assets/img/illustrations/pencil-rocket.png') }}" alt="pencil rocket"
                         height="188" class="scaleX-n1-rtl" />
                </div>
            </div>
        </div>
    </form>

    <div class="card mb-4">
        <div class="card-header d-flex flex-wrap justify-content-between gap-3">
            <div class="card-title mb-0 me-1">
                <h5 class="mb-1">Daftar Penyedia Jasa</h5>
                <p class="text-muted mb-0">Total 100 penyedia jasa</p>
            </div>
            <div class="d-flex justify-content-md-end align-items-center gap-4 flex-wrap">
                <button class="btn btn-sm btn-primary waves-effect waves-light" data-bs-toggle="modal"
                        data-bs-target="#addNewConsultant">
                    <i class="ti ti-plus me-2"></i> Tambah Penyedia Jasa
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row gy-4 mb-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="card p-2 h-100 shadow-none border">
                        <div class="rounded-2 text-center mb-3">
                            <a href=""><img
                                    class="img-fluid" src="{{ asset('assets/img/pages/app-academy-tutor-5.png') }}"
                                    alt="tutor image 5" /></a>
                        </div>
                        <div class="card-body p-3 pt-2">
                            <div class="d-flex justify-content-between align-items-center mb-3">
<!--                                --><?php //if (!empty($consultant->verified)) {
//                                    switch ($consultant->verified->verification_respons) {
//                                        case 0:
//                                            $label	= "Menunggu Verifikasi";
//                                            $color	= "bg-label-warning";
//                                        case 1:
//                                            $label	= "Telah Diverifikasi";
//                                            $color	= "bg-label-success";
//                                        default:
//                                            $label	= "Tidak Diverifikasi";
//                                            $color	= "bg-danger";
//                                    }
//                                } else {
//                                    $label	= "Belum Unggah Dokumen";
//                                    $color	= "bg-label-danger";
//                                }?>
                                <span class="badge bg-label-warning">Menunggu Verifikasi</span>
                                <!--								<h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">-->
                                <!--									4.7 <span class="text-warning"><i class="ti ti-star-filled me-1 mt-n1"></i></span-->
                                <!--									><span class="text-muted"> (34)</span>-->
                                <!--								</h6>-->
                            </div>
                            <a class="h5"
                               href="">Testing</a>
                            <p class="mt-2">
                                testing@gmail.com
                            </p>
                            <p class="d-flex align-items-center text-success">
                                <i class="ti ti-checks me-2 mt-n1"></i>Completed
                            </p>
                            <div class="progress mb-4" style="height: 8px">
                                <div class="progress-bar w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                            <a class="w-100 btn btn-label-primary align-items-center"
                               href="">
                                <span class="me-2">Detail</span>
                                <i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row gy-4 mb-4">
        <div class="col-lg-6">
            <div class="card bg-label-primary h-100">
                <div class="card-body d-flex justify-content-between flex-wrap-reverse">
                    <div
                        class="mb-0 w-100 app-academy-sm-60 d-flex flex-column justify-content-between text-center text-sm-start">
                        <div class="card-title">
                            <h4 class="text-primary mb-2">Earn a Certificate</h4>
                            <p class="text-body w-sm-80 app-academy-xl-100">
                                Get the right professional certificate program for you.
                            </p>
                        </div>
                        <div class="mb-0"><button class="btn btn-primary">View Programs</button></div>
                    </div>
                    <div
                        class="w-100 app-academy-sm-40 d-flex justify-content-center justify-content-sm-end h-px-150 mb-3 mb-sm-0">
                        <img class="img-fluid scaleX-n1-rtl"
                             src="{{ asset('assets/img/illustrations/boy-app-academy.png') }}"
                             alt="boy illustration" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card bg-label-danger h-100">
                <div class="card-body d-flex justify-content-between flex-wrap-reverse">
                    <div
                        class="mb-0 w-100 app-academy-sm-60 d-flex flex-column justify-content-between text-center text-sm-start">
                        <div class="card-title">
                            <h4 class="text-danger mb-2">Best Rated Courses</h4>
                            <p class="text-body app-academy-sm-60 app-academy-xl-100">
                                Enroll now in the most popular and best rated courses.
                            </p>
                        </div>
                        <div class="mb-0"><button class="btn btn-danger">View Courses</button></div>
                    </div>
                    <div
                        class="w-100 app-academy-sm-40 d-flex justify-content-center justify-content-sm-end h-px-150 mb-3 mb-sm-0">
                        <img class="img-fluid scaleX-n1-rtl"
                             src="{{ asset('assets/img/illustrations/girl-app-academy.png') }}"
                             alt="girl illustration" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body row gy-4">
            <div class="col-sm-12 col-lg-4 text-center pt-md-5 px-3">
                <span class="badge bg-label-primary p-2 mb-3"><i class="ti ti-gift ti-lg"></i></span>
                <h3 class="card-title mb-4">Today's Free Courses</h3>
                <p class="card-text mb-4">
                    We offers 284 Free Online courses from top tutors and companies to help you start or advance
                    your career skills. Learn online for free and fast today!
                </p>
                <button class="btn btn-primary">Get premium courses</button>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 border shadow-none">
                    <div class="p-2 pb-0">
                        <video poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg"
                               id="guitar-video-player" playsinline controls>
                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                    type="video/mp4" />
                        </video>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Your First Singing Lesson</h5>
                        <p class="card-text">
                            In the same way as any other artistic domain, singing lends itself perfectly to
                            self-teaching.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 border shadow-none">
                    <div class="p-2 pb-0">
                        <video poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg"
                               id="guitar-video-player-2" playsinline controls>
                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                    type="video/mp4" />
                        </video>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Guitar for Beginners</h5>
                        <p class="card-text">
                            The Fender Acoustic Guitar is the best choice for both beginners and professionals offering
                            a great sound.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addNewConsultant" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="address-title mb-2">Tambah Penyedia Jasa</h3>
                    <p class="text-muted address-subtitle">Tambah penyedia jasa baru agar penyedia jasa dapat masuk
                        kedalam sistem.</p>
                </div>

                <form id="addNewConsultantForm" action="{{ url('consultants/save') }}" class="row g-3"
                      method="post">
                    <div class="col-12">
                        <label class="form-label" for="addNewConsultantName">Nama Perusahaan</label>
                        <input type="text" id="addNewConsultantName" name="addNewConsultantName" class="form-control"
                               placeholder="John" autocomplete="off" autofocus />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="addNewConsultantEmail">Email Perusahaan</label>
                        <input type="text" id="addNewConsultantEmail" name="addNewConsultantEmail" class="form-control"
                               placeholder="example@domain.com" autocomplete="off" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="addNewConsultantPhone">Kontak Perusahaan</label>
                        <div class="input-group">
                            <span class="input-group-text">ID (+62)</span>
                            <input type="text" id="addNewConsultantPhone" name="addNewConsultantPhone"
                                   class="form-control phone-number-mask" placeholder="0811 2222 2222"
                                   autocomplete="off" />
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="addNewConsultantAddress">Alamat Perusahaan</label>
                        <textarea type="text" id="addNewConsultantAddress" name="addNewConsultantAddress"
                                  class="form-control" placeholder="Masukan alamat perusahaan"></textarea>
                    </div>

                    <div class="col-12 mt-5 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Simpan</button>
                        <button type="reset" class="btn btn-label-danger" data-bs-dismiss="modal" aria-label="Close">
                            Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/plyr/plyr.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Page JS -->
<!--<script src="--><?php //= base_url('assets/js/app-user-list.js') ?>
<!--"></script>-->
<script src="{{ asset('assets/js/app-academy-course.js') }}"></script>

<script>
    const addNewConsultantForm = document.getElementById('addNewConsultantForm');
    const addNewConsultantFormValidation = FormValidation.formValidation(addNewConsultantForm, {
        fields: {
            addNewConsultantName: {
                validators: {
                    notEmpty: {
                        message: 'Mohon masukan nama perusahaan'
                    },
                    stringLength: {
                        min: 6,
                        max: 200,
                        message: 'Nama lengkap harus lebih kecil dari 200 dan lebih besar dari 6 karakter'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z .,]+$/,
                        message: 'Nama lengkap hanya dapat diisi oleh alfabet, angka, titik dan koma'
                    }
                }
            },
            addNewConsultantEmail: {
                validators: {
                    notEmpty: {
                        message: 'Mohon masukan email aktif perusahaan'
                    },
                    emailAddress: {
                        message: 'Anda memasukan email yang tidak valid'
                    }
                }
            },
            addNewConsultantPhone: {
                validators: {
                    notEmpty: {
                        message: 'Mohon masukan nomor kontak yang dapat dihubungi'
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
            addNewConsultantAddress: {
                validators: {
                    notEmpty: {
                        message: 'Mohon masukan alamat kantor perusahaan'
                    },
                    stringLength: {
                        min: 15,
                        message: 'Alamat Perusahaan harus lebih besar dari 6 karakter'
                    },
                }
            }
        },
        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap5: new FormValidation.plugins.Bootstrap5({
                // Use this for enabling/changing valid/invalid class
                // eleInvalidClass: '',
                eleValidClass: '',
                rowSelector: '.col-12'
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
                    e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
                }
                //* Move the error message out of the `row` element for custom-options
                if (e.element.parentElement.parentElement.classList.contains('custom-option')) {
                    e.element.closest('.row').insertAdjacentElement('afterend', e.messageElement);
                }
            });
        }
    });
</script>
@endsection
