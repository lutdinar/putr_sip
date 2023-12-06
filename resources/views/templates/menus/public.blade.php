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
