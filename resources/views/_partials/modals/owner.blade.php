<!-- Add New Owner -->
<div class="modal fade" id="addNewOwner" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="address-title mb-2">Tambah Pemilik Perusahaan</h3>
                    <p class="text-muted address-subtitle">Tambah baru pemilik perusahaan untuk melengkapi persyaratan
                        administrasi.</p>
                </div>

                <!-- Start Form -->
                <form id="addNewOwnerForm" class="row g-3" method="post">
                    <div>
                        <input type="text" class="form-control" name="addNewOwnerPhotoData" id="addNewOwnerPhotoData">
                        <input type="text" class="form-control" name="addNewOwnerIdCardData" id="addNewOwnerIdCardData">
                    </div>

                    <div class="col-12">
                        <label for="addNewOwnerName" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="addNewOwnerName" id="addNewOwnerName"
                               placeholder="Masukan nama pemilik perusahaan">
                    </div>

                    <div class="row mt-3">
                        <div class="col-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="addNewOwnerIsDirector" class="form-label">Sebagai Direktur?</label>
                                <div class="w-25 d-flex justify-content-end">
                                    <label class="switch switch-primary switch-sm me-4 pe-2">
                                        <input type="checkbox" class="switch-input" />
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on">
                                                <span class="switch-off"></span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <label for="addNewOwnerPhone" class="form-label">Kontak</label>
                        <div class="input-group">
                            <span class="input-group-text">ID (+62)</span>
                            <input type="text" id="addNewOwnerPhone" name="addNewOwnerPhone"
                                   class="form-control phone-number-mask" placeholder="202 555 0111" />
                        </div>
                    </div>

                    <div class="col-6">
                        <label for="addNewOwnerEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" name="addNewOwnerEmail" id="addNewOwnerEmail"
                               placeholder="Masukan email aktif dari pemilik perusahaan">
                    </div>

                    <div class="col-6">
                        <label for="addNewOwnerPhoto" class="form-label">Pas Foto</label>
                        <div class="card shadow-none mb-4">
                            <div class="dropzone needsclick" id="dropzone-photo">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                    <span class="note needsclick">
                                        (This is just a demo dropzone. Selected files are
                                        <span class="fw-medium">not</span> actually uploaded.)
                                    </span>
                                </div>
                                <div class="fallback">
                                    <input name="addNewOwnerPhoto" id="addNewOwnerPhoto" type="file" />
                                </div>
                            </div>
                            <span class="mt-1 text-danger form-label" id="alert-photo-dz"></span>
                        </div>
                    </div>

                    <div class="col-6">
                        <label for="addNewOwnerIdCard" class="form-label">KTP</label>
                        <div class="card shadow-none mb-2">
                            <div class="dropzone needsclick" id="dropzone-id-card">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                    <span class="note needsclick">
                                        (This is just a demo dropzone. Selected files are
                                        <span class="fw-medium">not</span> actually uploaded.)
                                    </span>
                                </div>
                                <div class="fallback">
                                    <input name="addNewOwnerIdCard" id="addNewOwnerIdCard" type="file" />
                                </div>
                            </div>
                            <span class="mt-1 text-danger form-label" id="alert-id-card-dz"></span>
                        </div>
                    </div>

                    <div class="col-6">
                        <label for="addNewOwnerTaxNumber" class="form-label">No. NPWP</label>
                        <input type="text" class="form-control custom-delimiter-mask" name="addNewOwnerTaxNumber"
                               id="addNewOwnerTaxNumber" placeholder="99.999.999.9-999.000">
                    </div>

                    <div class="col-6">
                        <label for="addNewOwnerTaxDocument" class="form-label">Dokumen NPWP</label>
                        <input type="file" class="form-control" name="addNewOwnerTaxDocument"
                               id="addNewOwnerTaxDocument" placeholder="Pilih dokumen NPWP pemilik perusahaan">
                    </div>

                    <div class="col-12 mt-5 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1" id="btn-save-owner">Simpan</button>
                        <button type="reset" class="btn btn-label-danger" data-bs-dismiss="modal" aria-label="Close">
                            Batal
                        </button>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
</div>
<!--/ Add New Owner -->
