<header class="header transparent scroll-hide">
    <!--Header Top Section Starts-->
    {{-- <div class="header-top-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8 col-12">
                    <div class="header-top-left">
                        <ul>
                            <li><i class="fa fa-phone"></i> <a href="tel:4444356348">+444 435 6348</a></li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:info@sarchholm.com">info@sarchholm.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="menu-btn">
                        <ul class="user-btn">
                            <li><a href="#"><i class="fas fa-arrows-alt-h"></i></a>
                                <span>3</span>
                            </li>
                            <li><a href="#"><i class="lnr lnr-heart"></i></a>
                                <span>0</span>
                            </li>
                            <li><a href="#" data-toggle="modal" data-target="#user-login-popup"><i class="lnr lnr-user"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--Header Top Section Ends-->
    <!--Main Menu starts-->
    <div class="site-navbar-wrap v2">
        <div class="container">
            <div class="site-navbar">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-6 col-7">
                        <a class="navbar-brand" href="#"><img src="{{ asset('site/assets/images/logo-blue.png')}}" alt="logo" class="img-fluid"></a>
                    </div>
                    <div class="col-lg-6 col-md-1 col-1  order-2 order-lg-1 pl-xs-0">
                        <nav class="site-navigation text-right">
                            <div class="container">
                                <ul class="site-menu js-clone-nav d-none d-lg-block">
                                    <li class="has-children">
                                        <a class="active" href="{{ env('APP_URL') }}" title="Início">Início</a>

                                    </li>
                                    <li class="has-children">
                                        <a href="#">Listings</a>
                                        <ul class="dropdown">
                                            <li class="has-children">
                                                <a href="#">List Layout</a>
                                                <ul class="dropdown sub-menu">
                                                    <li><a href="list-fullwidth.html">Full Width</a></li>
                                                    <li><a href="list-fullwidth-map.html">Fullwidth with google map</a></li>
                                                    <li><a href="list-fullwidth-leaflet-map.html">Fullwidth with Leaflet map</a></li>
                                                    <li><a href="list-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a href="list-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-children">
                                                <a href="#">Grid Layout</a>
                                                <ul class="dropdown sub-menu">
                                                    <li><a href="grid-fullwidth.html">Full Width</a></li>
                                                    <li><a href="grid-fullwidth-map.html">Fullwidth with google map</a></li>
                                                    <li><a href="grid-fullwidth-leaflet-map.html">Fullwidth with leaflet map</a></li>
                                                    <li><a href="grid-two-column.html">Grid two column</a></li>
                                                    <li><a href="grid-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a href="grid-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-children">
                                                <a href="#">Map Layout - google</a>
                                                <ul class="dropdown sub-menu">
                                                    <li><a href="list-left-sidemap.html">List Left sidemap</a></li>
                                                    <li><a href="list-right-sidemap.html">List Right sidemap</a></li>
                                                    <li><a href="grid-left-sidemap.html">Grid Left sidemap</a></li>
                                                    <li><a href="grid-right-sidemap.html">Grid Right sidemap</a></li>
                                                    <li><a href="grid-search-half-map.html">advanced search</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-children">
                                                <a href="#">Tab Layout</a>
                                                <ul class="dropdown sub-menu">
                                                    <li><a href="tab-fullwidth.html">Tab fullwidth</a></li>
                                                    <li><a href="tab-left-sidebar.html">Tab left sidebar</a></li>
                                                    <li><a href="tab-right-sidebar.html">Tab right sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-children">
                                                <a href="#">Map Layout - Leaflet</a>
                                                <ul class="dropdown sub-menu">
                                                    <li><a href="list-left-leaflet-sidemap.html">List Left sidemap</a></li>
                                                    <li><a href="list-right-leaflet-sidemap.html">List Right sidemap</a></li>
                                                    <li><a href="grid-left-leaflet-sidemap.html">Grid Left sidemap</a></li>
                                                    <li><a href="grid-right-leaflet-sidemap.html">Grid Right sidemap</a></li>
                                                    <li><a href="grid-search-half-leafletmap.html">advanced search</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Property</a>
                                        <ul class="dropdown sub-menu">
                                            <li><a href="single-listing-one.html">Single Property Hero Header </a></li>
                                            <li><a href="single-listing-two.html">Single Property Video Header </a></li>
                                            <li><a href="single-listing-three.html">Single Property Parallax Header </a></li>
                                            <li><a href="single-listing-four.html">Single Property Slider Heade v1 </a></li>
                                            <li><a href="single-listing-five.html">Single Property Slider Header v2 </a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li class="has-children">
                                                <a href="#">Agents</a>
                                                <ul class="dropdown sub-menu">
                                                    <li><a href="agent-list.html">Agents List</a>
                                                    </li>
                                                    <li><a href="agent-grid.html">Agents Grid</a>
                                                    </li>
                                                    <li><a href="single-agent.html">Agent Profile</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-children">
                                                <a href="#">Agency</a>
                                                <ul class="dropdown sub-menu">
                                                    <li><a href="agency-list.html">Agency List</a>
                                                    </li>
                                                    <li><a href="agency-grid.html">Agency Grid</a>
                                                    </li>
                                                    <li><a href="single-agency.html">Agency Profile</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="db.html">Dashboard</a></li>
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="contact.html">Contact us</a></li>
                                            <li><a href="membership-package.html">Membership Packages</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                            <li><a href="404-page.html">404 error</a></li>
                                            <li><a href="add-listing.html">Add Listing</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">News</a>
                                        <ul class="dropdown">
                                            <li><a href="news-left-sidebar.html">News Left sidebar</a></li>
                                            <li><a href="news-right-sidebar.html">News right sidebar</a></li>
                                            <li><a href="news-without-sidebar.html">News without sidebar</a></li>
                                            <li><a href="single-news-one.html">Single News one</a></li>
                                            <li><a href="single-news-two.html">Single News two</a></li>
                                            <li><a href="single-news-three.html">Single News three</a></li>
                                        </ul>
                                    </li>
                                    <li class="d-lg-none"><a class="btn v3" href="add-listing.html"><i class="lnr lnr-home"></i>Add Listing </a>
                                    </li>
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
                    <div class="col-lg-4 col-md-5 col-4 order-1 order-lg-2 text-right pr-xs-0">
                        <div class="menu-btn">
                            <div class="add-list">
                                <a class="btn v1" href="add-listing.html"><i class="lnr lnr-home"></i>Anuncie Grátis </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Main Menu ends-->
</header>
