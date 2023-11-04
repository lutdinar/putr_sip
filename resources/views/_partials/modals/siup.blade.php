<!-- Add SIUP -->
<div class="modal fade" id="addSIUP" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-simple modal-lg">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Tambah Surat Izin Usaha Perdagangan</h3>
                    <p class="text-muted">Tambahkan Surat Izin Usaha Perdagangan yang aktif</p>
                </div>
                <form id="addSIUPForm" class="row g-3" onsubmit="return false">
                    <div class="col-12">
                        <input type="text" class="form-control" name="modalAddSiupDocumentData" id="modalAddSiupDocumentData" required>
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="modalAddSiupExpireData">Masa Berlaku SIUP</label>
                        <input type="text" id="modalAddSiupExpireDate" name="modalAddSiupExpireDate" class="form-control" placeholder="YYYY-MM-DD" />
                    </div>

                    <div class="col-12">
                        <label for="modal-add-siup-document" class="form-label">Unggah Dokumen Surat Izin Usaha Perdagangan</label>
                        <div class="card shadow-none mb-4">
                            <div class="dropzone needsclick" id="modal-add-siup-document">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                    <span class="note needsclick">
                                        (This is just a demo dropzone. Selected files are
                                        <span class="fw-medium">not</span> actually uploaded.)
                                    </span>
                                </div>
                                <div class="fallback">
                                    <input name="modalAddSiupDocument" id="modalAddSiupDocument" type="file" />
                                </div>
                            </div>
                            <span class="mt-1 text-danger form-label" id="alert-dz-siup-file">Test</span>
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
<!-- /Add SIUP -->
