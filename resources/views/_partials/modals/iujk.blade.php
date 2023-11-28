<!-- Add IUJK -->
<div class="modal fade" id="addIUJK" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-simple modal-lg">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Tambah Izin Usaha Jasa Konstruksi</h3>
                    <p class="text-muted">Tambahkan dokumen Izin Usaha Jasa Konstruksi yang aktif</p>
                </div>
                <form id="addIUJKForm" class="row g-3" method="post" action="{{ url('consultants/company/iujk') }}" enctype="multipart/form-data">
                    <div class="col-12">
                        @csrf
                        <input type="text" class="form-control" name="modalAddIujkRefer" value="{{ $consultant->refer }}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label w-100" for="modalAddIujkExpireDate">Masa Berlaku Izin Usaha Jasa Konstruksi</label>
                        <input type="text" id="modalAddIujkExpireDate" name="modalAddIujkExpireDate" class="form-control" placeholder="YYYY-MM-DD" autocomplete="off" />
                    </div>

                    <div class="col-12">
                        <label for="modal-add-iujk-document" class="form-label">Unggah Dokumen Izin Usaha Jasa Konstruksi</label>
                        <input type="file" name="modalAddIujkDocument" id="modalAddIujkDocument" accept="application/pdf" class="form-control">
<!--                        <div class="card shadow-none mb-4">-->
<!--                            <div class="dropzone needsclick" id="modal-add-iujk-document">-->
<!--                                <div class="dz-message needsclick">-->
<!--                                    Drop files here or click to upload-->
<!--                                    <span class="note needsclick">-->
<!--                                        (This is just a demo dropzone. Selected files are-->
<!--                                        <span class="fw-medium">not</span> actually uploaded.)-->
<!--                                    </span>-->
<!--                                </div>-->
<!--                                <div class="fallback">-->
<!--                                    <input name="modalAddIujkDocument" id="modalAddIujkDocument" type="file" />-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <span class="mt-1 text-danger form-label" id="alert-dz-iujk-file">Test</span>-->
<!--                        </div>-->
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
<!-- /Add IUJK -->
