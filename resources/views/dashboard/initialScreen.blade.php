<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">

</head>
<body class="">
    @include('dashboard.menu-lateral.menu-lateral')
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
	    @include('dashboard.header.header')
	</header>

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- amount start -->
            <div class="col-md-6 col-xl-4">
                <div class="card amount-card overflow-hidden">
                    <div class="card-body">
                        <h2 class="f-w-400">23</h2>
                        <p class="text-muted f-w-600 f-16"><span class="text-c-blue">Relatórios</span> Esperando Aprovação</p>
                    </div>
                    <div id="amount-processed"></div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card amount-card overflow-hidden">
                    <div class="card-body">
                        <h2 class="f-w-400">4</h2>
                        <p class="text-muted f-w-600 f-16"><span class="text-c-green">Relatórios</span> Aprovados</p>
                    </div>
                    <div id="amount-spent"></div>
                </div>
            </div>
            @if(Auth::user()->perfil)
                <div class="col-md-12 col-xl-4">
                    <div class="card amount-card overflow-hidden">
                        <div class="card-body">
                            <h2 class="f-w-400">{{$numberOfClients}}</h2>
                                <p class="text-muted f-w-600 f-16"><span class="text-c-yellow">Clientes</span> Cadastrados
                            </p>
                        </div>
                        <div id="profit-processed"></div>
                    </div>
                </div>
            @endif


        </div>
        <!-- [ Main Content ] end -->

    </div>
</div>

    <!-- Required Js -->
    <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ripple.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset("assets/js/plugins/apexcharts.min.js") }}"></script>

<!-- custom-chart js -->
<script src="{{ asset("assets/js/pages/dashboard-analytics.js") }}"></script>

</body>

</html>
