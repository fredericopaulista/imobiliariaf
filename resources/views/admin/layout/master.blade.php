<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">

<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders" />
    <!-- Links -->
    <link rel="icon" type="image/png" href="#" />
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="{{ url('admin/css/plugin.css') }}" rel="stylesheet" />
    <!-- Perfect scrollbar CSS-->
    <link href="{{ url('admin/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <!-- style CSS -->
    <link href="{{ url('admin/css/style.css') }}" rel="stylesheet" />
    <!-- Dashboard CSS -->
    <link href="{{ url('admin/css/dashboard.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>

	 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Document Title -->
    <title>@yield('title')</title>
</head>

<body>
    <div class="page-wrapper">
        <!--Sidebar Menu Starts-->
        @include('admin.layout.sidebar')
        <!--Sidebar Menu ends-->
        @include('admin.layout.topheader')
        <!--Dashboard content Wrapper starts-->
       @yield('content')

            <!--Dashboard content ends-->
            <!--Dashboard footer starts-->
            <div class="dash-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>© 2019 SarchHolm . All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Dashboard footer ends-->
        </div>
        <!--Dashboard content Wrapper ends-->
    </div>
    <!-- Plugin JS-->
    <script src="{{ url('admin/js/plugin.js') }}"></script>
    <!--Perfect Scrollbar JS-->
    <script src="{{ url('admin/js/perfect-scrollbar.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ url('admin/js/chart.js') }}"></script>
    <!-- Main JS-->
    <script src="{{ url('admin/js/main.js') }}"></script>
    <!-- Dashboard JS-->
    <script src="{{ url('admin/js/dashboard.js') }}"></script>
</body>

</html>
