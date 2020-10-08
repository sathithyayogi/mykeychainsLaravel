<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.2.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="en">
  <head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mykeychains</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="assets/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
  </head>
  <body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none">
        {{-- <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg> --}}
        <h2>MyKeychains</h2>
        {{-- <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg> --}}
      </div>
      <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="assets/svg/free.svg#cil-speedometer"></use>
            </svg> Dashboard<span class="badge badge-info"></span></a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/mkc/paid">
                <svg class="c-sidebar-nav-icon">
                  <use xlink:href="assets/svg/free.svg#cil-speedometer"></use>
                </svg> Paid<span class="badge badge-info"></span></a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/mkc/unpaid">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="assets/svg/free.svg#cil-speedometer"></use>
            </svg> UnPaid<span class="badge badge-info"></span></a></li>

      </ul>

      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>
    <div class="c-wrapper c-fixed-components">
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
          <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
            <svg class="c-icon c-icon-lg">
              <use xlink:href="assets/svg/free.svg#cil-menu"></use>
            </svg>
          </button><a class="c-header-brand d-lg-none" href="#">
            {{-- <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg> --}}
            <h4>MyKeychains</h4>
        </a>
          <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
            <svg class="c-icon c-icon-lg">
              <use xlink:href="assets/svg/free.svg#cil-menu"></use>
            </svg>
          </button>
          {{-- <ul class="c-header-nav d-md-down-none">
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="/">Dashboard</a></li>
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="/tenant">Tenants</a></li>
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="/house">Houses</a></li>
          </ul> --}}
          <ul class="c-header-nav ml-auto mr-4">
            <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                {{-- <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"></div> --}}
                <svg class="c-icon">
                    <use xlink:href="assets/svg/free.svg#cil-user"></use>
                  </svg>
              </a>

              {{-- <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg class="c-icon">
                  <use xlink:href="assets/svg/free.svg#cil-settings"></use>
                </svg>
              </button> --}}

              <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                {{-- <a class="dropdown-item" href="#">
                  <svg class="c-icon mr-2">
                    <use xlink:href="assets/svg/free.svg#cil-account-logout"></use>
                  </svg> Logout</a> --}}

                   <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                 <svg class="c-icon mr-2">
                                    <use xlink:href="assets/svg/free.svg#cil-account-logout"></use>
                                  </svg>
                   {{ __('Logout') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   @csrf
               </form>

              </div>
            </li>
          </ul>
  {{-- @include('inc.messages') --}}
  @yield('content')
  <footer class="c-footer">
          {{-- <div><a href="https://coreui.io">CoreUI</a> © 2020 creativeLabs.</div> --}}
          {{-- <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div> --}}
        </footer>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="assets/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="assets/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->
    <!-- Plugins and scripts required by this view-->
    <script src="assets/@coreui/chartjs/js/coreui-chartjs.bundle.js"></script>
    <script src="assets/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
