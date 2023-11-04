<!-- Add New Personil -->
<div class="modal fade" id="addNewPersonil" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-simple modal-lg">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Tambah Tenaga Personil</h3>
                    <p class="text-muted">Tambahkan personil pada perusahaan Anda</p>
                </div>
                <form action="" class="row g-3" id="addNewPersonilForm">
                    <div class="col-12">

                    </div>

                    <div class="col-12">
                        <label class="form-label" for="addNewPersonilPhoto">Foto Personil</label>
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="{{ url('assets/img/avatars/14.png') }}" alt="user-avatar"
                                     class="d-block w-px-100 h-px-100 rounded" id="personilPhoto" />
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="ti ti-upload d-block d-sm-none"></i>
                                        <input type="file" id="addNewPersonilPhoto" name="addNewPersonilPhoto"
                                               class="account-file-input" hidden
                                               accept="image/png, image/jpeg, image/jpg" />
                                    </label>
                                    <button type="button" class="btn btn-label-danger account-image-reset mb-3" id="addNewPersonilPhotoReset">
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
                        <label class="form-label" for="addNewPersonilName">Nama Lengkap</label>
                        <input type="text" id="addNewPersonilName" name="addNewPersonilName" class="form-control" placeholder="Masukan nama lengkap personil (termasuk gelar yang dimiliki jika ada)" />
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="addNewPersonilDob">Tanggal Lahir</label>
                        <input type="text" id="addNewPersonilDob" name="addNewPersonilDob" class="form-control" placeholder="YYYY-MM-DD" />
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="addNewPersonilPosition">Posisi / Jabatan</label>
                        <input type="text" id="addNewPersonilPosition" name="addNewPersonilPosition" class="form-control" placeholder="Masukan posisi / jabatan personil" />
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="addNewPersonilEducation">Tingkat Pendidikan</label>
                        <select name="addNewPersonilEducation" id="addNewPersonilEducation" class="select2 form-select" data-allow-clear="true" data-placeholder="Pilih Tingkat Pendidikan">
                            <option value="">Pilih</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA / Sederajat</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>

                    <div class="col-6">
                        <label class="form-label" for="addNewPersonilEducationDocument">Dokumen Ijazah</label>
                        <div class="card shadow-none mb-4">
                            <div class="dropzone needsclick" id="modal-personil-education">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                    <span class="note needsclick">
                                        (This is just a demo dropzone. Selected files are
                                        <span class="fw-medium">not</span> actually uploaded.)
                                    </span>
                                </div>
                                <div class="fallback">
                                    <input name="addNewPersonilEducationDocument" id="addNewPersonilEducationDocument" type="file" />
                                </div>
                            </div>
                            <span class="mt-1 text-danger form-label" id="alert-dz-education-file">Test</span>
                        </div>
                    </div>

                    <div class="col-6">
                        <label class="form-label" for="addNewPersonilIdCard">KTP</label>
                        <div class="card shadow-none mb-4">
                            <div class="dropzone needsclick" id="modal-personil-id-card">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                    <span class="note needsclick">
                                        (This is just a demo dropzone. Selected files are
                                        <span class="fw-medium">not</span> actually uploaded.)
                                    </span>
                                </div>
                                <div class="fallback">
                                    <input name="addNewPersonilIdCardDocument" id="addNewPersonilIdCardDocument" type="file" />
                                </div>
                            </div>
                            <span class="mt-1 text-danger form-label" id="alert-dz-id-card-file">Test</span>
                        </div>
                    </div>


                    <div class="col-12 text-center">
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
<!-- /Add New Personil -->
