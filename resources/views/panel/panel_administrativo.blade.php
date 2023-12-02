<!DOCTYPE html>
<html lang="es">
<head>
    <title>Invitados</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="es_ES" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/iconos/favicon.ico') }}">


    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/global/plugins.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.bundle.css') }}">

    <script src="{{ asset('lightAndDarkMode.js') }}"></script>

    @yield('styles')

    <style>
        td, th{
            padding-left: 5px !important;
        }

        .text-right {
            text-align: right !important;
        }

        div.space-inicial {
            min-height: calc(91vh - 50px);
        }

        .menu-item .menu-link .menu-icon {
            margin-right: 0.8rem;
        }

        a.volver {
            padding: 6px 15px 6px 10px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            color: rgb(128, 128, 128);
            border: 1px solid transparent;
            transition: .2s;
        }

        a.volver:hover {
            border: 1px solid #eaeaea;
            transition: .2s;
        }

        a.volver svg {
            margin-right: 8px;
        }

        .badge.badge-warning {
            color: #2b2b2b !important;
        }

        .badge.badge-blue {
            background-color: #009ef7 !important;
        }
    </style>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">

    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <div id="app_general">

            <!-- Contenido principal de la página -->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid space-inicial">

                    @yield('contenido')

                </div>
                <!--end::Content wrapper-->

                <!--begin::Footer-->
                <div id="kt_app_footer" class="app-footer">
                    <!--begin::Footer container-->
                    <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1 ">
                            <span class="text-muted fw-semibold me-1">{{ date('Y') }}&copy;</span>
                            <a href="#" target="_blank" class="text-gray-800 text-hover-primary justify-content-center">Smart Biz - Andres Escobar</a>
                        </div>
                        <!--end::Copyright-->
                    </div>
                    <!--end::Footer container-->
                </div>
                <!--end::Footer-->

            </div>
            <!-- ./Contenido principal de la página -->

            <!-- Modales -->
            @yield('modales')
            <!-- ./ Modales -->

        </div>
    </div>
    <!--end::Page-->
</div>
<!--end::App-->

@vite(['resources/js/app.js'])

<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

<script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="{{ asset('assets/js/externos/amcharts/index.js') }}"></script>
<script src="{{ asset('assets/js/externos/amcharts/xy.js') }}"></script>
<script src="{{ asset('assets/js/externos/amcharts/percent.js') }}"></script>
<script src="{{ asset('assets/js/externos/amcharts/radar.js') }}"></script>
<script src="{{ asset('assets/js/externos/amcharts/animated.js') }}"></script>
<script src="{{ asset('assets/js/externos/amcharts/map.js') }}"></script>
<script src="{{ asset('assets/js/externos/amcharts/worldLow.js') }}"></script>
<script src="{{ asset('assets/js/externos/amcharts/continentsLow.js') }}"></script>
<script src="{{ asset('assets/js/externos/amcharts/usaLow.js') }}"></script>
<script src="{{ asset('assets/js/externos/amcharts/worldTimeZonesLow.js') }}"></script>
<script src="{{ asset('assets/js/externos/amcharts/worldTimeZoneAreasLow.js') }}"></script>
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>

@yield('scripts')

</body>
</html>
