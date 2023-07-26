@extends('admin.layout.master')

@section('title', 'Dashboard')

@section('content')

    <div class="dash-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="recent-activity">
                        <div class="act-title">
                            <h5>Atividades Recentes</h5>
                        </div>
                        {{-- <ul class="act-wrap">
                            <li class="alert br-o fade show">
                                Your Property <span class="review-stat">Villa On Hartford</span> has been approved!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="ion-android-close"></i></span>
                                </button>
                                <p>30 mins ago</p>
                            </li>
                            <li class="alert br-o fade show">
                                <span class="review-stat">Andrew</span> sends a Booking request for <span class="review-stat">Villa on Sunbury</span> Property!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="ion-android-close"></i></span>
                                </button>
                                <p>5 hours ago</p>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard Statistics starts-->
    <div class="statistic-wrap mt-10">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="statistic__item item--red">
                        <h2 class="counter-value">21</h2>
                        <span class="desc">Imóveis Publicados</span>
                        <div class="icon">
                            <img src="{{ asset('admin/images/dashboard/home.png') }}" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="statistic__item item--blue">
                        <h2 class="counter-value">90</h2>
                        <span class="desc">Total Reviews</span>
                        <div class="icon">
                            <img src="{{ asset('admin/images/dashboard/review.png') }}" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="statistic__item item--orange">
                        <h2 class="counter-value">734</h2>
                        <span class="desc">Total Views</span>
                        <div class="icon">
                            <img src="{{ asset('admin/images/dashboard/bar-chart.png') }}" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="statistic__item item--green">
                        <h2 class="counter-value">21</h2>
                        <span class="desc">times Bookmarked</span>
                        <div class="icon">
                            <img src="{{ asset('admin/images/dashboard/like.png') }}" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard Statistics ends-->
    <!--Dashboard content starts-->
    <div class="dash-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="act-title">
                        <h5>Property view Statistics</h5>
                    </div>
                    <div class="page_view_chart">
                        <canvas id="buyers"></canvas>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="popular-listing">
                        <div class="act-title">
                            <h5>Imóveis Mais Vistos</h5>
                        </div>
                        <div class="viewd-item-wrap">
                            <div class="most-viewed-item">
                                <div class="most-viewed-img">
                                    <a href="#"><img src="{{ asset('admin/images/property/property_1.jpg') }}" alt="..."></a>
                                    <ul class="feature_text v2">
                                        <li class="feature_or"><span>For Sale</span></li>
                                    </ul>
                                </div>
                                <div class="most-viewed-detail">
                                    <h3><a href="single-listing-one.html">Villa on Hartford</a></h3>
                                    <p class="list-address"><i class="fas fa-map-marker-alt"></i>2854 Meadow View Drive, Hartford, USA</p>
                                    <div class="trend-open">
                                        <p><span class="per_sale">starts from</span>$25000</p>
                                    </div>
                                    <div class="ratings">
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star-half"></i>
                                    </div>
                                    <div class="views">Views : <span>178</span></div>
                                </div>
                            </div>
                            <div class="most-viewed-item">
                                <div class="most-viewed-img">
                                    <a href="#"><img src="{{ asset('admin/images/property/property_3.jpg') }}" alt="..."></a>
                                    <ul class="feature_text v2">
                                        <li class="feature_or"><span>For Rent</span></li>
                                    </ul>
                                </div>
                                <div class="most-viewed-detail">
                                    <h3><a href="single-listing-one.html">Family home in Glasgow</a></h3>
                                    <p class="list-address"><i class="fas fa-map-marker-alt"></i>60 High St, Glasgow, London</p>
                                    <div class="trend-open">
                                        <p>$7500<span class="per_month">month</span></p>
                                    </div>
                                    <div class="ratings">
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star-half"></i>
                                    </div>
                                    <div class="views">Views : <span>124</span></div>
                                </div>
                            </div>
                            <div class="most-viewed-item">
                                <div class="most-viewed-img">
                                    <a href="#"><img src="{{ asset('admin/images/property/property_6.jpg') }}" alt="..."></a>
                                    <ul class="feature_text v2">
                                        <li class="feature_or"><span>For Rent</span></li>
                                    </ul>
                                </div>
                                <div class="most-viewed-detail">
                                    <h3><a href="single-listing-one.html">Apartment in Cecil Lake</a></h3>
                                    <p class="list-address"><i class="fas fa-map-marker-alt"></i>131 midlas , Cecil Lake, BC</p>
                                    <div class="trend-open">
                                        <p>$9000<span class="per_month">month</span></p>
                                    </div>
                                    <div class="ratings">
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star-half"></i>
                                    </div>
                                    <div class="views">Views : <span>114</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

