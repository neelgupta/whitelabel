<!DOCTYPE html>
<html lang="en">
@php
$siteSetting = App\Helpers\Helper::getSiteSetting();
@endphp

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') || {{ !empty($siteSetting) && $siteSetting->title ? $siteSetting->title : env('APP_NAME') }}
    </title>
    <!-- Favicon -->
    <link rel="shortcut icon"
        href="@if (!empty($siteSetting) && isset($siteSetting->favicon) && file_exists(public_path('uploads/setting/' . $siteSetting->favicon))) {{ asset('uploads/setting/' . $siteSetting->favicon) }} @else{{ asset('assets/images/logo/favicon.png') }} @endif">
    <!-- page css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Core css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/common.css') }}">
</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            @include('company.includes.header')
            <!-- Header END -->
            <!-- Side Nav START -->
            @include('company.includes.sidebar')
            <!-- Side Nav END -->
            <!-- Page Container START -->
            <div class="page-container">
                <div class="container notification">
                    <div class="alert alert-danger alert-dismissible fade show">
                        <strong>Please purchase package</strong>. <a href="{{route('company.package.list')}}">Click</a>
                        here to buy package.
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-info">
                                Please update your profile!! <a href="{{route('company.edit_profile')}}">Click</a> here
                                update profile.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper START -->
                @yield('main-content')
                <!-- Content Wrapper END -->
                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0">Copyright © {{ date('Y') }}. All rights reserved.</p>
                    </div>
                </footer>
                <!-- Footer END -->
            </div>
            <!-- Page Container END -->
        </div>
    </div>
    <!--  Footer Scripts -->
    @include('company.includes.footer_scripts')
</body>

</html>