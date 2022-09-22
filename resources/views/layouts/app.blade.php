 <!doctype html>
 <html lang="en">

 <head>

     <meta charset="utf-8" />
     <title>{{ config('app.name', 'Unifiedtransform') }}</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
     <meta content="Themesdesign" name="author" />
     <!-- App favicon -->
     <link rel="shortcut icon" href="assets/images/favicon.ico">

     <!-- Bootstrap Css -->
     <link href=" {{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
     <!-- Icons Css -->
     <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
     <!-- App Css-->
     <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
     <!-- Custom Css -->
     <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />

 </head>

 <body data-sidebar="dark">

     <!-- Begin page -->
     <div id="layout-wrapper">

         <header id="page-topbar">
             <div class="navbar-header">
                 <div class="d-flex">
                     <!-- LOGO -->
                     <div class="navbar-brand-box">
                         <a href="index.html" class="logo logo-dark">
                             <span class="logo-sm">
                                 <img src="{{ asset('assets/images/logo-sm-dark.png') }}" alt="logo-sm-dark"
                                     height="22">
                             </span>
                             <span class="logo-lg">
                                 <img src="{{ asset('assets/images/logo-dark.png') }}" alt="logo-dark" height="20">
                             </span>
                         </a>

                         <a href="index.html" class="logo logo-light">
                             <span class="logo-sm">
                                 <img src="{{ asset('assets/images/logo-sm-light.png') }}" alt="logo-sm-light"
                                     height="22">
                             </span>
                             <span class="logo-lg">
                                 <img src="{{ asset('assets/images/logo-light.png') }}" alt="logo-light" height="20">
                             </span>
                         </a>
                     </div>

                     <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                         id="vertical-menu-btn">
                         <i class="ri-menu-2-line align-middle"></i>
                     </button>

                     <!-- App Search-->
                     <form class="app-search d-none d-lg-block">
                         <div class="position-relative">
                             <input type="text" class="form-control" placeholder="Search...">
                             <span class="ri-search-line"></span>
                         </div>
                     </form>


                 </div>

                 <div class="d-flex">

                     <div class="dropdown d-inline-block d-lg-none ms-2">
                         <button type="button" class="btn header-item noti-icon waves-effect"
                             id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                             aria-expanded="false">
                             <i class="ri-search-line"></i>
                         </button>
                         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                             aria-labelledby="page-header-search-dropdown">

                             <form class="p-3">
                                 <div class="mb-3 m-0">
                                     <div class="input-group">
                                         <input type="text" class="form-control" placeholder="Search ...">
                                         <div class="input-group-append">
                                             <button class="btn btn-primary" type="submit"><i
                                                     class="ri-search-line"></i></button>
                                         </div>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>







                     <div class="dropdown d-inline-block">
                         <button type="button" class="btn header-item noti-icon waves-effect"
                             id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                             <i class="ri-notification-3-line"></i>
                             <span class="noti-dot"></span>
                         </button>
                         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                             aria-labelledby="page-header-notifications-dropdown">
                             <div class="p-3">
                                 <div class="row align-items-center">
                                     <div class="col">
                                         <h6 class="m-0"> Notifications </h6>
                                     </div>
                                     <div class="col-auto">
                                         <a href="#!" class="small"> View All</a>
                                     </div>
                                 </div>
                             </div>
                             <div data-simplebar style="max-height: 230px;">
                                 <a href="" class="text-reset notification-item">
                                     <div class="d-flex">
                                         <div class="avatar-xs me-3">
                                             <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                 <i class="ri-shopping-cart-line"></i>
                                             </span>
                                         </div>
                                         <div class="flex-1">
                                             <h6 class="mt-0 mb-1">Your order is placed</h6>
                                             <div class="font-size-12 text-muted">
                                                 <p class="mb-1">If several languages coalesce the grammar</p>
                                                 <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                             </div>
                                         </div>
                                     </div>
                                 </a>

                             </div>
                             <div class="p-2 border-top">
                                 <div class="d-grid">
                                     <a class="btn btn-sm btn-link font-size-14 text-center"
                                         href="javascript:void(0)">
                                         <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="dropdown d-inline-block user-dropdown">
                         <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                             data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <img class="rounded-circle header-profile-user"
                                 src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="Header Avatar">
                             <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->first_name }}
                                 {{ Auth::user()->last_name }}</span>
                             <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                         </button>
                         <div class="dropdown-menu dropdown-menu-end">
                             <!-- item-->
                             <a class="dropdown-item" href="{{ route('password.edit') }}"><i
                                     class="ri-user-line align-middle me-1"></i> Change Password</a>



                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                 <i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                             </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                         </div>
                     </div>

                     <div class="dropdown d-inline-block">
                         <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                             <i class="ri-settings-2-line"></i>
                         </button>
                     </div>

                 </div>
             </div>
         </header>
         @include('layouts.left-menu')




         <!-- ============================================================== -->
         <!-- Start right Content here -->
         <!-- ============================================================== -->
         <div class="main-content">

             @yield('content')
         </div>
         <!-- end main content-->
         @include('layouts.footer')

     </div>
     <!-- END layout-wrapper -->

     <!-- Right Sidebar -->
     <div class="right-bar">
         <div data-simplebar class="h-100">
             <div class="rightbar-title d-flex align-items-center px-3 py-4">

                 <h5 class="m-0 me-2">Settings</h5>

                 <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                     <i class="mdi mdi-close noti-icon"></i>
                 </a>
             </div>

             <!-- Settings -->
             <hr class="mt-0" />
             <h6 class="text-center mb-0">Choose Layouts</h6>

             <div class="p-4">
                 <div class="mb-2">
                     <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                 </div>

                 <div class="form-check form-switch mb-3">
                     <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                     <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                 </div>

                 <div class="mb-2">
                     <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                 </div>
                 <div class="form-check form-switch mb-3">
                     <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch"
                         data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                     <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                 </div>

                 <div class="mb-2">
                     <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                 </div>
                 <div class="form-check form-switch mb-5">
                     <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch"
                         data-appStyle="assets/css/app-rtl.min.css">
                     <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                 </div>


             </div>

         </div> <!-- end slimscroll-menu-->
     </div>
     <!-- /Right-bar -->

     <!-- Right bar overlay-->
     <div class="rightbar-overlay"></div>

     <!-- JAVASCRIPT -->
     {{-- <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script> --}}
     <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
     <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
     <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
     <script src="{{ asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
     <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

     <!-- App js -->
     <script src="{{ asset('assets/js/app.js') }}"></script>
     {{-- <script src="{{ asset('assets/js/ajax.js') }}"></script> --}}

 </body>

 </html>
