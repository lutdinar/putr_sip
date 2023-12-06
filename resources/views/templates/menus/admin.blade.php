                                    <!-- Dashboards -->
                                    <li class="menu-item {{ Request::is('/') ? 'active' : '' }}">
                                        <a href="{{ url('/') }}" class="menu-link">
                                            <i class="menu-icon tf-icons ti ti-smart-home"></i>
                                            <div data-i18n="Dashboards">Dashboards</div>
                                        </a>
                                    </li>

                                    <li class="menu-item {{ (Request::is('tasks') || Request::is('tasks/detail')) ? 'active' : '' }}">
                                        <a href="{{ url('tasks')}}" class="menu-link">
                                            <i class="menu-icon tf-icons ti ti-list-check"></i>
                                            <div data-i18n="Kegiatan">Kegiatan</div>
                                        </a>
                                    </li>

                                    <!-- Penyedia Jasa -->
                                    <li class="menu-item {{ Request::is('consultants') ? 'active' : '' }}">
                                        <a href="{{ url('consultants') }}" class="menu-link">
                                            <i class="menu-icon tf-icons ti ti-id"></i>
                                            <div data-i18n="Penyedia Jasa">Penyedia Jasa</div>
                                        </a>
                                    </li>

                                    <!-- Users -->
                                    <li class="menu-item {{ (Request::is('users') || Request::is('users/forgot')) ? 'active' : '' }}">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons ti ti-user-circle"></i>
                                            <div data-i18n="Kelola Pengguna">Kelola Pengguna</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li
                                                class="menu-item ">
                                                <a href="{{ url('users') }}" class="menu-link">
                                                    <i class="menu-icon tf-icons ti ti-users"></i>
                                                    <div data-i18n="Daftar Pengguna">Daftar Pengguna</div>
                                                </a>
                                            </li>
                                            <li
                                                class="menu-item ">
                                                <a href="{{ url('users/forgot') }}" class="menu-link">
                                                    <i class="menu-icon tf-icons ti ti-lock"></i>
                                                    <div data-i18n="Daftar Lupa Password">Daftar Lupa Password</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
