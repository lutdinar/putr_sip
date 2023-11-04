<!-- Edit User Modal -->
<div class="modal fade" id="editUser" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Ubah Informasi Penyedia Jasa</h3>
                    <p class="text-muted">Mengubah informasi pengguna akan memperbarui profil pada akun pengguna.</p>
                </div>
                <form action="{{ url('consultants/update') }}" id="editUserForm" class="row g-3" method="post">
                    <div>
                        <input type="text" class="form-control" name="consultant" id="consultant" required>
                        <input type="text" class="form-control" name="createdAt" id="createdAt" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="modalEditUserLogo">Logo Perusahaan</label>
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="{{ asset('assets/img/avatars/14.png') }}" alt="user-avatar"
                                     class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="ti ti-upload d-block d-sm-none"></i>
                                        <input type="file" id="upload" name="modalEditUserLogo"
                                               class="account-file-input" hidden
                                               accept="image/png, image/jpeg, image/jpg" />
                                    </label>
                                    <button type="button" class="btn btn-label-danger account-image-reset mb-3">
                                        <i class="ti ti-refresh-dot d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                    </button>

                                    <div class="text-muted" id="text-muted">Allowed JPG, JPEG or PNG. Max size of 3Mb
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="modalEditUserName">Nama Perusahaan</label>
                        <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control"
                               placeholder="John" autocomplete="off" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="modalEditUserEmail">Email</label>
                        <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control"
                               placeholder="example@domain.com" autocomplete="off" />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="modalEditUserPhone">Kontak</label>
                        <div class="input-group">
                            <span class="input-group-text">ID (+62)</span>
                            <input type="text" id="modalEditUserPhone" name="modalEditUserPhone"
                                   class="form-control phone-number-mask" placeholder="0811 2222 2222"
                                   autocomplete="off" />
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="modalEditUserAddress">Alamat Perusahaan</label>
                        <textarea type="text" id="modalEditUserAddress" name="modalEditUserAddress" class="form-control"
                                  placeholder="Masukan alamat perusahaan"></textarea>
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
<!--/ Edit User Modal -->
