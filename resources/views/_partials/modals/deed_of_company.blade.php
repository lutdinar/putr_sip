<!-- Add New Deed of Company Modal -->
<div class="modal fade" id="addNewDeed" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="address-title mb-2">Tambah Baru Akta Perusahaan</h3>
                    <p class="text-muted address-subtitle">Tambah baru akta perusahaan untuk melengkapi persyaratan
                        administrasi.</p>
                </div>
                <form id="addNewDeedForm" class="row g-3" method="post" action="{{ url('consultants/deed/save') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12" hidden>
                        <input type="text" class="form-control" name="modalAddNewDeedRefer" id="modalAddNewDeedRefer" value="{{ $consultant->refer }}" required>
                    </div>

                    <label for="modalAddNewDeedType" class="form-label">Pilih Jenis Akta Perusahaan <span class="text-danger">*</span></label>
                    <div class="col-6 mb-2">
                        <div class="form-check custom-option custom-option-icon">
                            <label class="form-check-label custom-option-content" for="customRadioIcon1">
                                <span class="custom-option-body">
                                    <i class="ti ti-new-section"></i>
                                    <span class="custom-option-title">Pendirian</span>
                                    <small> Pilih Pendirian jika Akta Perusahaan untuk Legalitas Pendirian.</small>
                                </span>
                                <input name="modalAddNewDeedType" class="form-check-input" type="radio" value="pendirian"
                                       id="modalAddNewDeedType1" checked />
                            </label>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="form-check custom-option custom-option-icon">
                            <label class="form-check-label custom-option-content" for="customRadioIcon2">
                                <span class="custom-option-body">
                                    <i class="ti ti-refresh"></i>
                                    <span class="custom-option-title"> Perubahan </span>
                                    <small> Pilih Perubahan jika terjadi perubahan pada Akta Perusahaan. </small>
                                </span>
                                <input name="modalAddNewDeedType" class="form-check-input" type="radio" value="perubahan"
                                       id="modalAddNewDeedType2" />
                            </label>
                        </div>
                    </div>

                    <div class="col-6 mb-2">
                        <label class="form-label" for="modalAddressFirstName">Tanggal Akta Perusahaan <span class="text-danger">*</span></label>
                        <input type="text" name="modalAddNewDeedSubmitted" id="modalAddNewDeedSubmitted"
                               placeholder="YYYY-MM-DD" class="form-control" autocomplete="off" />
                    </div>

                    <div class="col-6 mb-2">
                        <label for="modalAddNewDeedDocument" class="form-label">Unggah dokumen Akta Perusahaan <span class="text-danger">*</span></label>
                        <input class="form-control" type="file" id="modalAddNewDeedDocument" name="modalAddNewDeedDocument" accept="image/*, application/pdf" />
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1" id="btn-save-deed">Simpan</button>
                        <button type="reset" class="btn btn-label-danger" data-bs-dismiss="modal" aria-label="Close">
                            Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Add New Deed of Company Modal -->
