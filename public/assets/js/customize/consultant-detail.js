'use strict';

const editUserForm = document.getElementById('editUserForm');

// Form validation for Add new record
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
						regexp: /^[a-zA-Z ]+$/,
						message: 'Nama lengkap hanya dapat diisi oleh alfabet dan angka'
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

// CleaveJS validation
// const phoneNumber = document.querySelector('#phoneNumber');
// Phone Mask
// if (phoneNumber) {
// 	new Cleave(phoneNumber, {
// 		phone: true,
// 		phoneRegionCode: 'ID'
// 	});
// }

// Update/reset user image of account page
let accountUserImage = document.getElementById('uploadedAvatar'),
	fileInput = document.querySelector('.account-file-input'),
	resetFileInput = document.querySelector('.account-image-reset');

if (accountUserImage) {
	const resetImage = accountUserImage.src;
	fileInput.onchange = () => {
		if (fileInput.files[0]) {
			accountUserImage.src = window.URL.createObjectURL(fileInput.files[0]);
		}
	};
	resetFileInput.onclick = () => {
		fileInput.value = '';
		accountUserImage.src = resetImage;
	};
}

let personilPhoto 	= document.getElementById('personilPhoto'),
	filePhoto 			= document.querySelector('.account-file-input'),
	resetPhoto 	= document.getElementById('addNewPersonilPhotoReset');

if (personilPhoto) {
	const resetPhotoImg			= personilPhoto.src;
	filePhoto.onchange 			= () => {
		if (filePhoto.files[0]) {
			personilPhoto.src 	= window.URL.createObjectURL(filePhoto.files[0]);
		}
	};
	resetPhoto.onclick 			= () => {
		filePhoto.value 		= '';
		personilPhoto.src  		= resetPhotoImg;
	};
}
