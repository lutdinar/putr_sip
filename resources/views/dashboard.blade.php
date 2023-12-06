@extends('templates/main')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-lg-6 mb-4 order-md-0 order-lg-0">
        <div class="card h-100">
            <div class="card-header pb-0 d-flex justify-content-between mb-lg-n4">
                <div class="card-title mb-0">
                    <h5 class="mb-0">Kondisi Ruas Jalan</h5>
                    <small class="text-muted">Panjang dalam Kilometer</small>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-4 d-flex flex-column align-self-end">
                        <div class="d-flex gap-2 align-items-center mb-2 pb-1 flex-wrap">
                            <h1 class="mb-0">468</h1>
                        </div>
                        <small class="text-muted">Jumlah Panjang Ruas Jalan</small>
                    </div>
                    <div class="col-12 col-md-8">
                        <div id="weeklyEarningReports"></div>
                    </div>
                </div>
                <div class="border rounded p-3 mt-2">
                    <div class="row gap-4 gap-sm-0">
                        <div class="col-12 col-sm-3">
                            <div class="d-flex gap-2 align-items-center">
                                <div class="badge rounded bg-label-primary p-1">
                                    <i class="ti ti-currency-dollar ti-sm"></i>
                                </div>
                                <h6 class="mb-0">Baik</h6>
                            </div>
                            <h4 class="my-2 pt-1">545.69</h4>
                            <div class="progress w-75" style="height: 4px">
                                <div
                                    class="progress-bar"
                                    role="progressbar"
                                    style="width: 65%"
                                    aria-valuenow="65"
                                    aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3">
                            <div class="d-flex gap-2 align-items-center">
                                <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                                <h6 class="mb-0">Sedang</h6>
                            </div>
                            <h4 class="my-2 pt-1">256.34</h4>
                            <div class="progress w-75" style="height: 4px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: 50%"
                                    aria-valuenow="50"
                                    aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3">
                            <div class="d-flex gap-2 align-items-center">
                                <div class="badge rounded bg-label-warning p-1">
                                    <i class="ti ti-brand-paypal ti-sm"></i>
                                </div>
                                <h6 class="mb-0">Rusak Ringan</h6>
                            </div>
                            <h4 class="my-2 pt-1">74.19</h4>
                            <div class="progress w-75" style="height: 4px">
                                <div
                                    class="progress-bar bg-warning"
                                    role="progressbar"
                                    style="width: 65%"
                                    aria-valuenow="65"
                                    aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3">
                            <div class="d-flex gap-2 align-items-center">
                                <div class="badge rounded bg-label-danger p-1">
                                    <i class="ti ti-brand-paypal ti-sm"></i>
                                </div>
                                <h6 class="mb-0">Rusak Berat</h6>
                            </div>
                            <h4 class="my-2 pt-1">74.19</h4>
                            <div class="progress w-75" style="height: 4px">
                                <div
                                    class="progress-bar bg-danger"
                                    role="progressbar"
                                    style="width: 65%"
                                    aria-valuenow="65"
                                    aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Support Tracker -->
    <div class="col-md-6 mb-4 order-md-3 order-lg-0">
        <div class="card">
            <div class="card-header pb-0 d-flex justify-content-between">
                <div class="card-title mb-0">
                    <h5 class="mb-0">Persentase Jalan Mantap</h5>
                    <small class="text-muted">Panjang dalam persen</small>
                </div>
            </div>
            <div class="card-body row">
                <div class="col-12 col-sm-4 col-md-12 col-lg-4">
                    <div class="mt-lg-4 mt-lg-2 mb-lg-4 mb-2 pt-1">
                        <h1 class="mb-0">164</h1>
                        <p class="mb-0">Jumlah Ruas Jalan</p>
                    </div>
                    <ul class="p-0 m-0">
                        <li class="d-flex gap-3 align-items-center mb-lg-3 pt-2 pb-1">
                            <div class="badge rounded bg-label-primary p-1"><i class="ti ti-ticket ti-sm"></i></div>
                            <div>
                                <h6 class="mb-0 text-nowrap">Baik</h6>
                                <small class="text-muted">142</small>
                            </div>
                        </li>
                        <li class="d-flex gap-3 align-items-center mb-lg-3 pb-1">
                            <div class="badge rounded bg-label-info p-1"><i class="ti ti-circle-check ti-sm"></i></div>
                            <div>
                                <h6 class="mb-0 text-nowrap">Sedang</h6>
                                <small class="text-muted">28</small>
                            </div>
                        </li>
                        <li class="d-flex gap-3 align-items-center mb-lg-3 pb-1">
                            <div class="badge rounded bg-label-warning p-1"><i class="ti ti-clock ti-sm"></i></div>
                            <div>
                                <h6 class="mb-0 text-nowrap">Rusak Ringan</h6>
                                <small class="text-muted">1 Day</small>
                            </div>
                        </li>
                        <li class="d-flex gap-3 align-items-center pb-1">
                            <div class="badge rounded bg-label-warning p-1"><i class="ti ti-clock ti-sm"></i></div>
                            <div>
                                <h6 class="mb-0 text-nowrap">Rusak Berat</h6>
                                <small class="text-muted">1 Day</small>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-8 col-md-12 col-lg-8">
                    <div id="supportTracker"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-sm-6 mb-4">
        <div class="card h-100">
            <div class="card-body pb-0">
                <div class="card-icon">
                        <span class="badge bg-label-primary rounded-pill p-2">
                          <i class="ti ti-users ti-sm"></i>
                        </span>
                </div>
                <h5 class="card-title mb-0 mt-2">92.6k</h5>
                <small>Jumlah Jembatan</small>
            </div>
            <div id="subscriberGained"></div>
        </div>
    </div>

    <!-- Quarterly Sales -->
    <div class="col-lg-6 col-sm-6 mb-4">
        <div class="card h-100">
            <div class="card-body pb-0">
                <div class="card-icon">
                        <span class="badge bg-label-danger rounded-pill p-2">
                          <i class="ti ti-shopping-cart ti-sm"></i>
                        </span>
                </div>
                <h5 class="card-title mb-0 mt-2">36.5%</h5>
                <small>Jumlah Panjang Jembatan</small>
            </div>
            <div id="quarterlySales"></div>
        </div>
    </div>

    <div class="col-12 mb-4 order-xl-0">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Jumlah Berdasarkan Kondisi Jembatan</h5>
            </div>
            <div class="card-body">
                <div id="carrierPerformance"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card card-border-shadow-primary h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-truck ti-md"></i></span>
                    </div>
                    <h4 class="ms-1 mb-0">42</h4>
                </div>
                <p class="mb-1">Jumlah Kegiatan</p>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card card-border-shadow-warning h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                          <span class="avatar-initial rounded bg-label-warning"
                          ><i class="ti ti-alert-triangle ti-md"></i
                              ></span>
                    </div>
                    <h4 class="ms-1 mb-0">8</h4>
                </div>
                <p class="mb-1">Jumlah Kegiatan Sedang Dikerjakan</p>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card card-border-shadow-success h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2 pb-1">
                    <div class="avatar me-2">
                          <span class="avatar-initial rounded bg-label-success"
                          ><i class="ti ti-git-fork ti-md"></i
                              ></span>
                    </div>
                    <h4 class="ms-1 mb-0">27</h4>
                </div>
                <p class="mb-1">Jumlah Kegiatan Selesai</p>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mb-4 col-md-12">
        <div class="card h-100">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title mb-0">Jumlah Kegiatan Tahun 2023</h5>
            </div>
            <div class="card-body pt-2">
                <div class="row gy-3">
                    <div class="col-md-4 col-6">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2">
                                <i class="ti ti-chart-pie-2 ti-sm"></i>
                            </div>
                            <div class="card-info">
                                <h5 class="mb-0">230</h5>
                                <small>Jumlah Kegiatan</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-info me-3 p-2">
                                <i class="ti ti-users ti-sm"></i>
                            </div>
                            <div class="card-info">
                                <h5 class="mb-0">8.549</h5>
                                <small>Dikerjakan</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-danger me-3 p-2">
                                <i class="ti ti-shopping-cart ti-sm"></i>
                            </div>
                            <div class="card-info">
                                <h5 class="mb-0">1.423</h5>
                                <small>Selesai</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Orders -->
    <div class="col-lg-2 col-6 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <div class="badge rounded-pill p-2 bg-label-danger mb-2">
                    <i class="ti ti-briefcase ti-sm"></i>
                </div>
                <h5 class="card-title mb-2">97.8</h5>
                <small>Konsultan Perencanaan</small>
            </div>
        </div>
    </div>

    <!-- Reviews -->
    <div class="col-lg-2 col-6 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <div class="badge rounded-pill p-2 bg-label-success mb-2">
                    <i class="ti ti-message-dots ti-sm"></i>
                </div>
                <h5 class="card-title mb-2">3.4</h5>
                <small>Konsultan Pengawas</small>
            </div>
        </div>
    </div>

    <div class="col-lg-2 col-6 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <div class="badge rounded-pill p-2 bg-label-primary mb-2">
                    <i class="ti ti-message-dots ti-sm"></i>
                </div>
                <h5 class="card-title mb-2">3.4</h5>
                <small>Kontraktor Pelaksana</small>
            </div>
        </div>
    </div>

</div>

<!-- Vendor JS -->
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Page JS -->
{{--<script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>--}}
<script src="{{ asset('assets/js/cards-statistics.js') }}"></script>
<script src="{{ asset('assets/js/cards-analytics.js') }}"></script>
@endsection

