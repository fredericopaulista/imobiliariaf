<div class="footer-wrapper v1">
    <div class="footer-top-area">
        <div class="container">
            <div class="row nav-folderized">
                <div class="col-lg-4 col-md-12">
                    <div class="footer-logo">
                        <a href="index.html"> <img src="{{ asset('site/assets/images/logo-blue.png')}}" alt="logo"></a>
                        <div class="company-desc">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio excepturi nam totam sequi, ipsam consequatur repudiandae libero illum.
                            </p>
                            <ul class="list footer-list mt-20">
                                <li>
                                    <div class="contact-info">
                                        <div class="icon">
                                            <i class="fa fa-map-marker-alt"></i>
                                        </div>
                                        <div class="text">13th North Ave, Florida, USA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-info">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="text"><a href="#">info@sarchholm.com</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-info">
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="text">+44 078 767 595</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 text-center sm-left">
                    <div class="footer-content nav">
                        <h2 class="title">Maiores Buscas</h2>
                        <ul class="list res-list">
                            <li><a class="link-hov style2" href="#">Property for Rent</a></li>
                            <li><a class="link-hov style2" href="#">Property for Sale</a></li>
                            <li><a class="link-hov style2" href="#">Condominium for Sale</a></li>
                            <li><a class="link-hov style2" href="#">Resale Properties</a></li>
                            <li><a class="link-hov style2" href="#">Recent Properties</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 text-center sm-left">
                    <div class="footer-content nav">
                        <h2 class="title">Links Úteis</h2>
                        <ul class="list res-list">
                            <li><a class="link-hov style2" href="about.html">About us</a></li>
                            <li><a class="link-hov style2" href="contact.html">Contact us</a></li>
                            <li><a class="link-hov style2" href="faq.html">Privacy Policy</a></li>
                            <li><a class="link-hov style2" href="faq.html">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="footer-content">
                        <h4 class="title">Subscribe</h4>
                        <div class="value-input-wrap newsletter">
                            <form action="#">
                                <input type="text" placeholder="Your mail address ..">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                        <div class="footer-social-wrap">
                            <p>Siga-nos </p>
                            <ul class="social-buttons style2">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 offset-md-2">
                    <p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os Direitos Reservados </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Footer ends-->
    <!--login Modal starts-->
    <div class="modal fade" id="user-login-popup">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="lnr lnr-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <!--User Login section starts-->
                    <div class="user-login-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="ui-list nav nav-tabs mb-30" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#login" role="tab" aria-selected="true">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#register" role="tab" aria-selected="false">Register</a>
                                        </li>
                                    </ul>
                                    <div class="login-wrapper">
                                        <div class="ui-dash tab-content">
                                            <div class="tab-pane fade show active" id="login" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form id="login-form" action="#" method="post">
                                                            <div class="form-group">
                                                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="email" value="" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                                            </div>
                                                            <div class="row mt-20">
                                                                <div class="col-md-6 col-12 text-left">
                                                                    <div class="res-box">
                                                                        <input id="check-l" type="checkbox" name="check">
                                                                        <label for="check-l">Remember me</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12 text-right">
                                                                    <div class="res-box sm-left">
                                                                        <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="res-box text-center mt-30">
                                                                <button type="submit" class="btn v8"><span class="lnr lnr-exit"></span> Log In</button>
                                                            </div>
                                                        </form>
                                                        <div class="social-profile-login  text-left mt-20">
                                                            <h5>or Login with</h5>
                                                            <ul class="social-btn">
                                                                <li class="bg-fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                                <li class="bg-tt"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                                <li class="bg-ig"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="signup-wrapper">
                                                            <img src="{{ asset('site/assets/images/others/login-1.png')}}" alt="...">
                                                            <p>Welcome Back! Please Login to your Account for latest property listings.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="register" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form id="register-form" action="#" method="post">
                                                            <div class="form-group">
                                                                <input type="text" name="user_name" id="user_name" tabindex="1" class="form-control" placeholder="Username" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" name="user_password" id="user_password" tabindex="2" class="form-control" placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                                            </div>
                                                            <div class="res-box text-left">
                                                                <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                                <label for="remember">I've read and accept terms &amp; conditions</label>
                                                            </div>
                                                            <div class="res-box text-center mt-30">
                                                                <button type="submit" class="btn v8"><i class="lnr lnr-enter"></i>Sign Up</button>
                                                            </div>
                                                        </form>
                                                        <div class="social-profile-login  text-left mt-20">
                                                            <h5>or Sign Up with</h5>
                                                            <ul class="social-btn">
                                                                <li class="bg-fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                                <li class="bg-tt"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                                <li class="bg-ig"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="signup-wrapper">
                                                            <img src="{{ asset('site/assets/images/others/login-1.png')}}" alt="...">
                                                            <p>Create an account to find the best Property for you.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--User login section ends-->
                </div>
            </div>
        </div>
    </div>

    <!--login Modal ends-->
    <!--Scripts starts-->
    <!--plugin js-->
    <script src="{{ mix('site/assets/js/app.js') }}" defer></script>
    @yield('scripts')
    <!--Main js-->

    <!--Scripts ends-->
</body>

</html>
