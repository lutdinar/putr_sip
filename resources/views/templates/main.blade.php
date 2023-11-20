<!DOCTYPE html>
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('assets') }}/"
    data-template="horizontal-menu-template"
>
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
        />

        <title>@yield('title')</title>

        <meta name="description" content="" />
        <!-- laravel CRUD token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
        />

        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/plyr/plyr.css'); }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css'); }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/typography.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css') }}" />

        <!-- Page CSS -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/cards-advance.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-user-view.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-help-center.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-faq.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-profile.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/app-academy.css'); }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/app-email.css') }}" />

        <!-- Helpers -->
        <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
        <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>
        <script src="{{ asset('assets/js/config.js') }}"></script>

        <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>

        <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

        <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

        <!-- Vendors JS -->
        <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    </head>
    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
            <div class="layout-container">
                <!-- Navbar -->

                <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="container-xxl">
                        <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
                            <a href="#" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                              fill="#7367F0" />
                                        <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                              d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                                              fill="#161616" />
                                        <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                              d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                                              fill="#161616" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                              fill="#7367F0" />
                                    </svg>
                                </span>
                                <span class="app-brand-text demo menu-text fw-bold">Sistem Informasi Pembangunan</span>
                            </a>

                            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                                <i class="ti ti-x ti-sm align-middle"></i>
                            </a>
                        </div>

                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="ti ti-menu-2 ti-sm"></i>
                            </a>
                        </div>

                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <!-- Search -->
                                <li class="nav-item navbar-search-wrapper me-2 me-xl-0">
                                    <a class="nav-link search-toggler" href="javascript:void(0);">
                                        <i class="ti ti-search ti-md"></i>
                                    </a>
                                </li>
                                <!-- /Search -->

                                <!-- Style Switcher -->
                                <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-md"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                                <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                                <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                                <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- / Style Switcher-->

                                <!-- Quick links  -->
                                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                       data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <i class="ti ti-layout-grid-add ti-md"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end py-0">
                                        <div class="dropdown-menu-header border-bottom">
                                            <div class="dropdown-header d-flex align-items-center py-3">
                                                <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                                                <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body"
                                                   data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts">
                                                    <i class="ti ti-sm ti-apps"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown-shortcuts-list scrollable-container">
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                        <i class="ti ti-calendar fs-4"></i>
                                                    </span>
                                                    <a href="app-calendar.html" class="stretched-link">Calendar</a>
                                                    <small class="text-muted mb-0">Appointments</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                        <i class="ti ti-file-invoice fs-4"></i>
                                                    </span>
                                                    <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                                                    <small class="text-muted mb-0">Manage Accounts</small>
                                                </div>
                                            </div>
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                        <i class="ti ti-users fs-4"></i>
                                                    </span>
                                                    <a href="app-user-list.html" class="stretched-link">User App</a>
                                                    <small class="text-muted mb-0">Manage Users</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                        <i class="ti ti-lock fs-4"></i>
                                                    </span>
                                                    <a href="app-access-roles.html" class="stretched-link">Role
                                                        Management</a>
                                                    <small class="text-muted mb-0">Permission</small>
                                                </div>
                                            </div>
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                        <i class="ti ti-chart-bar fs-4"></i>
                                                    </span>
                                                    <a href="index.html" class="stretched-link">Dashboard</a>
                                                    <small class="text-muted mb-0">User Profile</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                        <i class="ti ti-settings fs-4"></i>
                                                    </span>
                                                    <a href="pages-account-settings-account.html"
                                                       class="stretched-link">Setting</a>
                                                    <small class="text-muted mb-0">Account Settings</small>
                                                </div>
                                            </div>
                                            <div class="row row-bordered overflow-visible g-0">
                                                <div class="dropdown-shortcuts-item col">
                                                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                        <i class="ti ti-help fs-4"></i>
                                                    </span>
                                                    <a href="pages-help-center-landing.html" class="stretched-link">Help
                                                        Center</a>
                                                    <small class="text-muted mb-0">FAQs & Articles</small>
                                                </div>
                                                <div class="dropdown-shortcuts-item col">
                                                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                        <i class="ti ti-square fs-4"></i>
                                                    </span>
                                                    <a href="modal-examples.html" class="stretched-link">Modals</a>
                                                    <small class="text-muted mb-0">Useful Popups</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                       data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                                 class="h-auto rounded-circle" />
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                                                 class="h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                    <span
                                                        class="fw-semibold d-block">Administrator</span>
                                                        <small class="text-muted">admin</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                               href="#">
                                                <i class="ti ti-user-check me-2 ti-sm"></i>
                                                <span class="align-middle">My Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti ti-lifebuoy me-2 ti-sm"></i>
                                                <span class="align-middle">Help</span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="ti ti-logout me-2 ti-sm"></i>
                                                <span class="align-middle">Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <!-- Search Small Screens -->
                        <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
                            <input type="text" class="form-control search-input border-0" placeholder="Search..."
                                   aria-label="Search..." />
                            <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
                        </div>
                    </div>
                </nav>
                <!-- / Navbar -->

                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Menu -->
                        <aside id="layout-menu"
                               class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
                            <div class="container-xxl d-flex h-100">
                                <ul class="menu-inner">
                                    <!-- MENU-->
                                    @include('templates/menus/admin')
                                    <!-- END MENU -->
                                </ul>
                            </div>
                        </aside>
                        <!-- / Menu -->

                        <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">

                            @yield('content')

                        </div>
                        <!--/ Content -->

                        <!-- Footer -->
                        <footer class="content-footer footer bg-footer-theme">
                            <div class="container-xxl">
                                <div
                                    class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column"
                                >
                                    <div>
                                        ©
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script>
                                        , made with ❤️ by <a href="https://putr.sumedangkab.go.id" target="_blank" class="fw-semibold">Dinas PUTR Kabupaten Sumedang</a>
                                    </div>
                                    <div>
                                        <a
                                            href="#"
                                            target="_blank"
                                            class="footer-link me-4"
                                        >Dokumentasi</a>

                                        <a href="#" target="_blank" class="footer-link d-none d-sm-inline-block">Bantuan</a>
                                    </div>
                                </div>
                            </div>
                        </footer>
                        <!-- / Footer -->

                        <div class="content-backdrop fade"></div>
                    </div>
                    <!--/ Content wrapper -->
                </div>

                <!--/ Layout container -->
            </div>
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </body>
</html>
