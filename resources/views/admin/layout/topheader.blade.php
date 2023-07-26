<div class="dash-content-wrap">
    <!-- Top header starts-->
    <header class="db-top-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-9 col-sm-6 col-4">
                    <div class="site-navbar-wrap v2 style2">
                        <div class="site-navbar">
                            <nav class="site-navigation">
                                <div class="container">
                                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                                        <li class="has-children">
                                            <a href="{{  route('dashboard') }}">Dashboard</a>

                                        </li>
                                        <li class="has-children">
                                            <a href="#">Listings</a>

                                        </li>
                                        <li class="has-children">
                                            <a href="#">Property</a>

                                        </li>
                                        <li class="has-children">
                                            <a href="#">Pages</a>

                                        </li>
                                        {{-- <li class="has-children">
                                            <a href="#">News</a>
                                            <ul class="dropdown">
                                                <li><a href="news-left-sidebar.html">News Left sidebar</a></li>
                                                <li><a href="news-right-sidebar.html">News right sidebar</a></li>
                                                <li><a href="news-without-sidebar.html">News without sidebar</a></li>
                                                <li><a href="single-news-one.html">Single News one</a></li>
                                                <li><a href="single-news-two.html">Single News two</a></li>
                                                <li><a href="single-news-three.html">Single News three</a></li>
                                            </ul>
                                        </li> --}}
                                    </ul>
                                </div>
                            </nav>
                            <div class="d-lg-none sm-right">
                                <a href="#" class="mobile-bar js-menu-toggle">
                                    <span class="lnr lnr-menu"></span>
                                </a>
                            </div>
                            <!--mobile-menu starts -->
                            <div class="site-mobile-menu">
                                <div class="site-mobile-menu-header">
                                    <div class="site-mobile-menu-close  js-menu-toggle">
                                        <span class="lnr lnr-cross"></span> </div>
                                </div>
                                <div class="site-mobile-menu-body"></div>
                            </div>
                            <!--mobile-menu ends-->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-8">
                    <div class="header-button">
                        <div class="header-button-item has-noti js-item-menu">
                            <i class="ion-ios-bell-outline"></i>
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__item">
                                    <div class="content">
                                        <p>Your Property <b>Villa On Hartford</b> has been approved!</p>
                                        <span class="date">5 min ago</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="content">
                                        <p>You have 3 unread Messages</p>
                                        <span class="date">5 min ago</span>
                                    </div>
                                </div>
                                <div class="notify-bottom text-center py-20">
                                    <a href="#">View All Notification</a>
                                </div>
                            </div>
                        </div>
                        <div class="header-button-item js-sidebar-btn">
                            <img src="{{ asset('admin/images/dashboard/agent_db_1.jpg') }}" alt="{{ Auth::user()->name }}">
                            <span>{{ Auth::user()->name }} <i class="ion-arrow-down-b"></i></span>
                        </div>
                        <div class="setting-menu js-right-sidebar d-none d-lg-block">
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="{{ route('profile.edit', Auth::user()->id ) }}">
                                        Perfil</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="{{ route('logout') }}">
                                        Sair</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Top header ends-->
