<!-- Add SBU -->
<div class="modal fade" id="addSBU" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Tambah Sertifikat Badan Usaha</h3>
                    <p class="text-muted">Tambahkan Sertifikat Badan Usaha yang aktif</p>
                </div>
                <form id="addSBUForm" class="row g-3">
                    <div class="col-12">
                        <input type="text" class="form-control" name="modalAddSbuDocumentData" id="modalAddSbuDocumentData" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalAddSbuName">Nama Dokumen</label>
                        <input type="text" id="modalAddSbuName" name="modalAddSbuName" class="form-control" placeholder="Masukan nama dokumen disini" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalAddSbuExpireDate">Masa Berlaku SBU</label>
                        <input type="text" id="modalAddSbuExpireDate" name="modalAddSbuExpireDate" class="form-control" placeholder="YYYY-MM-DD" />
                    </div>

                    <div class="col-12">
                        <label for="modal-add-sbu-document" class="form-label">Unggah Dokumen Sertifikat Badan Usaha</label>
                        <div class="card shadow-none mb-4">
                            <div class="dropzone needsclick" id="modal-add-sbu-document">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                    <span class="note needsclick">
                                        (This is just a demo dropzone. Selected files are
                                        <span class="fw-medium">not</span> actually uploaded.)
                                    </span>
                                </div>
                                <div class="fallback">
                                    <input name="modalAddSbuDocument" id="modalAddSbuDocument" type="file" />
                                </div>
                            </div>
                            <span class="mt-1 text-danger form-label" id="alert-dz-sbu-file">Test</span>
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
<!-- /Add SBU -->
