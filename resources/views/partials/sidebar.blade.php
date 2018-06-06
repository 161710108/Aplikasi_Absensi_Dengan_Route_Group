 <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/assets/admin/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Home</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/home') }}"><font size="5" color="magenta" face="AR DECODE">Home
                                    </font></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                           <a href="{{ route('kelas.index') }}">
                                <i class="fas fa-chart-bar"></i><font size="5" color="magenta" face="AR DECODE"> Kelas</font></a>
                        </li>
                        <li>
                            <a href="{{ route('keterangan.index') }}">
                                <i class="fas fa-table"></i><font size="5" color="magenta" face="AR DECODE"> Keterangan</font></a>
                        </li>
                        <li>
                             <a href="{{ route('siswa.index') }}">
                                <i class="far fa-check-square"></i><font size="5" color="magenta" face="AR DECODE"> Siswa</font></a>
                        </li>
                        <li>
                            <a href="{{ route('absensi.index') }}">
                                <i class="fas fa-calendar-alt"></i><font size="5" color="magenta" face="AR DECODE"> Absensi</font></a>
                        </li>
                        <li>
                             <a href="/assets/admin/map.html">
                                <i class="fas fa-map-marker-alt"></i><font size="5" color="magenta" face="AR DECODE"> Maps</font></a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i><font size="5" color="magenta" face="AR DECODE"> Pages</font></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/assets/admin/login.html">Login</a>
                                </li>
                                <li>
                                    <a href="/assets/admin/register.html">Register</a>
                                </li>
                                <li>
                                    <a href="/assets/admin/forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i><font size="5" color="magenta" face="AR DECODE"> UI Elements</font></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/assets/admin/button.html">Button</a>
                                </li>
                                <li>
                                    <a href="/assets/admin/badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="/assets/admin/tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="/assets/admin/card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="/assets/admin/alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="/assets/admin/progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="/assets/admin/modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="/assets/admin/switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="/assets/admin/grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="/assets/admin/fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="/assets/admin/typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>