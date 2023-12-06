'use strict';

// FORM VALIDATION PLUGIN
const editUserForm = document.getElementById('editUserForm');

// Form Validation Edit Consultant
if (editUserForm) {
	const editUserFormValidation = FormValidation.formValidation(editUserForm, {
		fields: {
			modalEditUserName: {
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
						regexp: /^[a-zA-Z ,.]+$/,
						message: 'Nama lengkap hanya dapat diisi oleh alfabet, koma, titik dan spasi'
					}
				}
			},
			modalEditUserEmail: {
				validators: {
					notEmpty: {
						message: 'Mohon masukan email aktif perusahaan'
					},
					emailAddress: {
						message: 'Anda memasukan email yang tidak valid'
					}
				}
			},
			modalEditUserPhone: {
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
			modalEditUserAddress: {
				validators: {
					notEmpty: {
						message: 'Mohon masukan alamat kantor perusahaan'
					}
				}
			}
		},
		plugins: {
			trigger: new FormValidation.plugins.Trigger(),
			bootstrap5: new FormValidation.plugins.Bootstrap5({
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
			instance.on('plugins.message.placed', function (e) {
				if (e.element.parentElement.classList.contains('input-group')) {
					e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
				}
			});
		}
	});
}

// Add New Deed Company Form Validation
const addNewDeedForm = document.getElementById('addNewDeedForm');
const addNewDeedFormValidation = FormValidation.formValidation(addNewDeedForm, {
    fields: {
        modalAddNewDeedSubmitted: {
            validators: {
                notEmpty: {
                    message: 'Mohon pilih tanggal akta perusahaan'
                },
                date: {
                    format: 'YYYY-MM-DD',
                    message: 'Tanggal yang anda masukan tidak sesuai format yang telah ditentukan'
                }
            }
        },
        modalAddNewDeedDocument: {
            validators: {
                notEmpty: {
                    message: 'Mohon pilih dokumen terlebih dahulu'
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
            rowSelector: '.col-6'
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

// Add New Owner
const addNewOwnerForm              = document.getElementById('addNewOwnerForm');
const addNewOwnerFormValidation                = FormValidation.formValidation(addNewOwnerForm, {
    fields: {
        addNewOwnerName: {
            validators: {
                notEmpty: {
                    message: 'Nama Lengkap pemilik perusahaan harus diisi!'
                },
                stringLength: {
                    min: 6,
                    max: 200,
                    message: 'Nama lengkap harus lebih kecil dari 200 dan lebih besar dari 6 karakter'
                },
                regexp: {
                    regexp: /^[a-zA-Z., ]+$/,
                    message: 'Nama lengkap hanya dapat diisi oleh alfabet, titik, koma dan spasi'
                }
            }
        },
        addNewOwnerPhone: {
            validators: {
                notEmpty: {
                    message: 'Nomor Kontak/HP harus diisi!'
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
        addNewOwnerEmail: {
            validators: {
                notEmpty: {
                    message: 'Email harus diisi!'
                },
                emailAddress: {
                    message: 'Anda memasukan email yang tidak valid'
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
            rowSelector: function (field, ele) {
                switch (field) {
                    case 'addNewOwnerName':
                        return '.col-12';
                    default:
                        return '.col-6';
                }
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
                e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
            }
            //* Move the error message out of the `row` element for custom-options
            if (e.element.parentElement.parentElement.classList.contains('custom-option')) {
                e.element.closest('.row').insertAdjacentElement('afterend', e.messageElement);
            }
        });
    }
});

const addSBUForm                   = document.getElementById('addSBUForm');
const addSBUFormValidation                      = FormValidation.formValidation(addSBUForm, {
    fields: {
        modalAddSbuExpireDate: {
            validators: {
                notEmpty: {
                    message: 'Mohon pilih tanggal masa berlaku SBU'
                },
                date: {
                    format: 'YYYY-MM-DD',
                    message: 'Tanggal yang anda masukan tidak sesuai format yang telah ditentukan'
                }
            }
        },
        modalAddSbuDocument: {
            validators: {
                notEmpty: {
                    message: 'Mohon pilih dokumen terlebih dahulu'
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

const addNewPersonilForm           = document.getElementById('addNewPersonilForm');
const addNewPersonilFormValidation              = FormValidation.formValidation(addNewPersonilForm, {
    fields: {
        addNewPersonilName: {
            validators: {
                notEmpty: {
                    message: 'Nama Lengkap harus diisi'
                },
                stringLength: {
                    min: 6,
                    max: 200,
                    message: 'Nama lengkap harus lebih kecil dari 200 dan lebih besar dari 6 karakter'
                },
                regexp: {
                    regexp: /^[a-zA-Z ,.]+$/,
                    message: 'Nama lengkap hanya dapat diisi oleh alfabet, koma, titik dan spasi'
                }
            }
        },
        addNewPersonilDob: {
            validators: {
                notEmpty: {
                    message: 'Mohon pilih tanggal lahir'
                },
                date: {
                    format: 'YYYY-MM-DD',
                    message: 'Tanggal yang anda masukan tidak sesuai format yang telah ditentukan'
                }
            }
        },
        addNewPersonilPosition: {
            validators: {
                notEmpty: {
                    message: 'Posisi / Jabatan harus diisi!'
                },
                stringLength: {
                    min: 6,
                    max: 200,
                    message: 'Posisi / Jabatan harus lebih kecil dari 200 dan lebih besar dari 6 karakter'
                },
            }
        },
        addNewPersonilEducation: {
            validators: {
                notEmpty: {
                    message: 'Jenjang Pendidikan harus dipilih!'
                }
            }
        },
        // addNewPersonilEmail: {
        //     validators: {
        //         notEmpty: {
        //             message: 'Email harus diisi!'
        //         },
        //         emailAddress: {
        //             message: 'Anda memasukan email yang tidak valid'
        //         }
        //     }
        // },
        // addNewPersonilPhone: {
        //     validators: {
        //         notEmpty: {
        //             message: 'Nomor Kontak/HP harus diisi!'
        //         },
        //         stringLength: {
        //             min: 6,
        //             max: 20,
        //             message: 'Nomor kontak harus lebih kecil dari 20 dan lebih besar dari 6 karakter'
        //         },
        //         regexp: {
        //             regexp: /^[0-9]+$/,
        //             message: 'Mohon masukan angka',
        //         },
        //     }
        // }
    },
    plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
            // Use this for enabling/changing valid/invalid class
            // eleInvalidClass: '',
            eleValidClass: '',
            rowSelector: function (field, ele) {
                switch (field) {
                    case 'addNewPersonilEmail':
                    case 'addNewPersonilPhone':
                        return '.col-6'
                    default:
                        return '.col-12'
                }
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
                e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
            }
            //* Move the error message out of the `row` element for custom-options
            if (e.element.parentElement.parentElement.classList.contains('custom-option')) {
                e.element.closest('.row').insertAdjacentElement('afterend', e.messageElement);
            }
        });
    }
});

const userForm                     = document.getElementById('userForm');
const userFormValidation                        = FormValidation.formValidation(userForm, {
    fields: {
        userName: {
            validators: {
                notEmpty: {
                    message: 'Mohon masukan username untuk akun pengguna'
                },
                stringLength: {
                    min: 6,
                    max: 30,
                    message: 'Username harus lebih besar dari 6 dan lebih kecil dari 30 karakter'
                },
            }
        },
        userPassword: {
            validators: {
                notEmpty: {
                    message: 'Mohon masukan password untuk akun pengguna'
                },
                stringLength: {
                    min: 6,
                    message: 'Password harus lebih besar dari 6 karakter'
                },
            }
        },
        userConfirmPassword: {
            validators: {
                notEmpty: {
                    message: 'Mohon masukan konfirmasi password untuk akun pengguna'
                },
                stringLength: {
                    min: 6,
                    message: 'Konfirmasi Password harus lebih besar dari 6 karakter'
                },
                identical: {
                    compare: function() {
                        return userForm.querySelector('[name="userPassword"]').value;
                    },
                    message: 'Password dan Konfirmasi Password tidak sama'
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
                switch (field) {
                    case 'userPassword':
                    case 'userConfirmPassword':
                        return '.col-6';
                    default:
                        return '.col-12';
                }
            }
        }),
        submitButton: new FormValidation.plugins.SubmitButton(),
        // Submit the form when all fields are valid
        defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
        autoFocus: new FormValidation.plugins.AutoFocus(),
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

// MANAGE IMAGE UPLOAD PREVIEW
// Update/reset user image of account page


// DATE PICKER PLUGIN
// initCustomOptionCheck on modal show to update the custom select
let addNewDeed = document.getElementById('addNewDeed');
addNewDeed.addEventListener('show.bs.modal', function(event) {
    // Init custom option check
    window.Helpers.initCustomOptionCheck();
});

let modalAddNewDeedSubmitted = $('#modalAddNewDeedSubmitted');
if (modalAddNewDeedSubmitted.length) {
    modalAddNewDeedSubmitted.datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        autoclose: true,
        orientation: isRtl ? 'auto right' : 'auto left'
    });
}

let modalAddSbuExpireDate		= $('#modalAddSbuExpireDate');
if (modalAddSbuExpireDate.length) {
    modalAddSbuExpireDate.datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        autoclose: true,
        orientation: isRtl ? 'auto right' : 'auto left'
    });
}

let modalAddIujkExpireDate		= $('#modalAddIujkExpireDate');
if (modalAddIujkExpireDate.length) {
    modalAddIujkExpireDate.datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        autoclose: true,
        orientation: isRtl ? 'auto right' : 'auto left'
    });
}

let modalAddSiupExpireDate		= $('#modalAddSiupExpireDate');
if (modalAddSiupExpireDate.length) {
    modalAddSiupExpireDate.datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        autoclose: true,
        orientation: isRtl ? 'auto right' : 'auto left'
    });
}

let modalAddNibCreateDate		= $('#modalAddNibCreateDate');
if (modalAddNibCreateDate.length) {
    modalAddNibCreateDate.datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        autoclose: true,
        orientation: isRtl ? 'auto right' : 'auto left'
    });
}

let addNewPersonilDob		= $('#addNewPersonilDob');
if (addNewPersonilDob.length) {
    addNewPersonilDob.datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        autoclose: true,
        orientation: isRtl ? 'auto right' : 'auto left'
    });
}

let select2		= $('.select2');
if (select2.length) {
    select2.each(function () {
        var $this = $(this);
        $this.wrap('<div class="position-relative"></div>').select2({
            placeholder: 'Select value',
            dropdownParent: $this.parent()
        });
    });
}


// DROPZONE PLUGIN
    const previewTemplate = `<div class="dz-preview dz-file-preview">
		<div class="dz-details">
	  		<div class="dz-thumbnail">
				<img data-dz-thumbnail>
				<span class="dz-nopreview">No preview</span>
				<div class="dz-success-mark"></div>
				<div class="dz-error-mark"></div>
				<div class="dz-error-message">
					<span data-dz-errormessage></span>
				</div>
				<div class="progress">
		  			<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
				</div>
  			</div>
	  		<div class="dz-filename" data-dz-name></div>
	  		<div class="dz-size" data-dz-size></div>
		</div>
	</div>`;

Dropzone.autoDiscover = false;

// Dropzone DEED OF COMPANY
// var _token          = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
// const myDropzone = new Dropzone("div#dropzone-deed-of-company", {
//     previewTemplate: previewTemplate,
//     parallelUploads: 1,
//     maxFilesize: 30,
//     addRemoveLinks: true,
//     maxFiles: 1,
//     autoProcessQueue: false,
//     acceptedFiles: '.png,.jpg,.pdf',
//     url: '{{ url("/consultants/upload") }}',
//     init: function() {
//         var dropzoneBasic = this;
//
//         $("#btn-save-deed").click(function (e) {
//             // Make sure that the form isn't actually being sent.
//             e.preventDefault();
//             // e.stopPropagation();
//             dropzoneBasic.processQueue();
//         });
//
//         this.on('sending', function (file, xhr, formData) {
//             formData.append("_token", _token);
//         });
//
//         this.on("success", function(files, response) {
//             // Gets triggered when the files have successfully been sent.
//             // Redirect user or notify of success.
//             console.log(files);
//             console.log(response);
//             if(response.success == 0){ // Error
//                 alert(response.error);
//             }
//             // $("#modalAddNewDeedFileData").val(files.dataURL);
//             // document.getElementById("addNewDeedForm").submit();
//         });
//
//         this.on("error", function(files, response) {
//             Gets triggered when there was an error sending the files.
//             Maybe show form again, and notify user of error
//             Swal.fire({
//                 title: 'Kesalahan Proses Unggah',
//                 text: response,
//                 icon: 'error',
//                 customClass: {
//                     confirmButton: 'btn btn-success'
//                 }
//             }).then(function() {
//                 window.location.reload();
//             });
//         });
//
//         this.on("removedfile", function(file) {
//             $("#modalAddNewDeedFileData").val(null);
//         });
//     }
// });

// const dropzonePhoto = new Dropzone("div#dropzone-photo", {
//     previewTemplate: previewTemplate,
//     parallelUploads: 1,
//     maxFilesize: 10,
//     addRemoveLinks: true,
//     maxFiles: 1,
//     autoProcessQueue: false,
//     acceptedFiles: '.png,.jpg,.pdf',
//     url: '/upload',
//     init: function() {
//         var dzPhoto = this;
//
//         addNewOwnerForm.addEventListener('submit', function(e) {
//             e.preventDefault();
//             e.stopPropagation();
//
//             if ($("#addNewOwnerPhotoData").val() == "") {
//                 Swal.fire({
//                     title: "Kesalahan",
//                     text: "Pas Photo harus dipilih dahulu!",
//                     icon: "error",
//                     customClass: {
//                         confirmButton: 'btn btn-success'
//                     }
//                 });
//             } else {
//                 dzPhoto.processQueue();
//             }
//         });
//
//         this.on("success", function(files, response) {
//             // Gets triggered when the files have successfully been sent.
//             // Redirect user or notify of success.
//             console.log(response);
//             $("#addNewOwnerPhotoData").val(files.dataURL);
//             // document.getElementById("addNewDeedForm").submit();
//         });
//
//         this.on("error", function(files, response) {
//             // Gets triggered when there was an error sending the files.
//             // Maybe show form again, and notify user of error
//             Swal.fire({
//                 title: 'Kesalahan Proses Unggah',
//                 text: response,
//                 icon: 'error',
//                 customClass: {
//                     confirmButton: 'btn btn-success'
//                 }
//             }).then(function() {
//                 window.location.reload();
//             });
//         });
//
//         this.on("removedfile", function(file) {
//             $("#addNewOwnerPhotoData").val(null);
//         })
//     }
// });

// DROPZONE ID CARD OWNER COMPANY
// const dropzoneIdCard = new Dropzone("div#dropzone-id-card", {
//     previewTemplate: previewTemplate,
//     parallelUploads: 1,
//     maxFilesize: 10,
//     addRemoveLinks: true,
//     maxFiles: 1,
//     autoProcessQueue: false,
//     acceptedFiles: '.png,.jpg,.pdf',
//     url: '/upload'
// });

// DROPZONE SBU
// const dropzoneSbuDocument	= new Dropzone("div#modal-add-sbu-document", {
//     previewTemplate: previewTemplate,
//     parallelUploads: 1,
//     maxFilesize: 30,
//     addRemoveLinks: true,
//     maxFiles: 1,
//     autoProcessQueue: false,
//     acceptedFiles: '.png,.jpg,.pdf',
//     url: '/upload'
// });

// DROPZONE IUJK
// const dropzoneIujkDocument	= new Dropzone("div#modal-add-iujk-document", {
//     previewTemplate: previewTemplate,
//     parallelUploads: 1,
//     maxFilesize: 30,
//     addRemoveLinks: true,
//     maxFiles: 1,
//     autoProcessQueue: false,
//     acceptedFiles: '.png,.jpg,.pdf',
//     url: '/upload'
// });

// DROPZONE SIUP
// const dropzoneSiupDocument	= new Dropzone("div#modal-add-siup-document", {
//     previewTemplate: previewTemplate,
//     parallelUploads: 1,
//     maxFilesize: 30,
//     addRemoveLinks: true,
//     maxFiles: 1,
//     autoProcessQueue: false,
//     acceptedFiles: '.png,.jpg,.pdf',
//     url: '/upload'
// });

// DROPZONE NIB
// const dropzoneNibDocument	= new Dropzone("div#modal-add-nib-document", {
//     previewTemplate: previewTemplate,
//     parallelUploads: 1,
//     maxFilesize: 30,
//     addRemoveLinks: true,
//     maxFiles: 1,
//     autoProcessQueue: false,
//     acceptedFiles: '.png,.jpg,.pdf',
//     url: '/upload'
// });

// DROPZONE IJAZAH
// const dropzonePersonilEducationDocument	= new Dropzone("div#modal-personil-education", {
//     previewTemplate: previewTemplate,
//     parallelUploads: 1,
//     maxFilesize: 30,
//     addRemoveLinks: true,
//     maxFiles: 1,
//     autoProcessQueue: false,
//     acceptedFiles: '.png,.jpg,.pdf',
//     url: '/upload'
// });

// DROPZONE KTP
// const dropzonePersonilIdCardDocument	= new Dropzone("div#modal-personil-id-card", {
//     previewTemplate: previewTemplate,
//     parallelUploads: 1,
//     maxFilesize: 10,
//     addRemoveLinks: true,
//     maxFiles: 1,
//     autoProcessQueue: false,
//     acceptedFiles: '.png,.jpg,.pdf',
//     url: '/upload'
// });


$(".btn-delete").click(function () {
    let document        = this.id;

    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Jika anda pilih hapus, data tidak bisa dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Batalkan',
        confirmButtonText: 'Ya, hapus sekarang!',
        customClass: {
            confirmButton: 'btn btn-primary me-3',
            cancelButton: 'btn btn-label-danger'
        },
        buttonsStyling: false
    }).then(function (result) {
        if (result.value) {
            $.post("{{ url('consultants/deed/delete') }}",
                {
                    "_token": "{{ csrf_token() }}",
                    "deedOfCompany": document
                }, function (data, status) {
                    console.log(data);
                    if (data.status == "success") {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: data.message,
                            customClass: {
                                confirmButton: 'btn btn-success'
                            }
                        }).then(function (){
                            window.location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: 'danger',
                            title: 'Kesalahan',
                            text: data.message,
                            customClass: {
                                confirmButton: 'btn btn-success'
                            }
                        });
                    }
                });

        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: 'Pembatalan',
                text: 'Anda membatalkan penghapusan data :)',
                icon: 'error',
                customClass: {
                    confirmButton: 'btn btn-success'
                }
            });
        }
    });
});
