<!DOCTYPE html>
<html lang="en">
<head>
    <title>Visualizar Bombas</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/plugins/dataTables.bootstrap4.min.css") }}">



</head>
<body class="">
    @include('dashboard.sidebar.sidebar')
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
        @include('dashboard.header.header')
    </header>
<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Visualizar Bombas</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboardAdmin')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Visualizar Bombas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Bombas de incêndio</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="order-table" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Sigla</th>
                                        <th>Localização</th>
                                        <th>Name</th>
                                        <th>01</th>
                                        <th>02</th>
                                        <th>03</th>
                                        <th>04</th>
                                        <th>05</th>
                                        <th>06</th>
                                        <th>07</th>
                                        <th>08</th>
                                        <th>09</th>
                                        <th>10</th>
                                        <th>Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bombs as $bomb)
                                        <tr>
                                            <td>{{$bomb->initials}}</td>
                                            <td>{{$bomb->localization}}</td>
                                            <td>{{$bomb->name}}</td>
                                            <td>{{$bomb->question_01}}</td>
                                            <td>{{$bomb->question_02}}</td>
                                            <td>{{$bomb->question_03}}</td>
                                            <td>{{$bomb->question_04}}</td>
                                            <td>{{$bomb->question_05}}</td>
                                            <td>{{$bomb->question_06}}</td>
                                            <td>{{$bomb->question_07}}</td>
                                            <td>{{$bomb->question_08}}</td>
                                            <td>{{$bomb->question_09}}</td>
                                            <td>{{$bomb->question_10}}</td>
                                            <td>
                                                <a href="{{ route('bombs.edit', $bomb->id) }}">Editar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>


                </div>
        </div>

        <!-- [ Main Content ] end -->
    </div>

</section>
    <!-- Required Js -->
    <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ripple.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset("assets/css/plugins/dataTables.bootstrap4.min.css") }}"></script>

    <script src="{{ asset("assets/js/plugins/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("assets/js/plugins/dataTables.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("assets/js/pages/data-basic-custom.js") }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>
</html>
