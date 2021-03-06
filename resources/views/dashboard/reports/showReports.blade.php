<!DOCTYPE html>
<html lang="en">
<head>
    <title>Visualizar relatório</title>

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
                            <h5 class="m-b-10">Visualizar Relatórios</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboardAdmin')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Visualizar Relatórios</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Relatórios</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="order-table" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Número da inspeção</th>
                                        <th>Visualizar relatório</th>
                                        <th>Aprovar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clients as $client)
                                        @foreach ($client->reports as $report)
                                            <tr>
                                                <td>{{$report->user->name}}</td>
                                                <td>{{$report->user->email}}</td>
                                                <td>{{$report->inspection_number}}</td>

                                                <td>
                                                    <a target="_blank" href="{{route('reports.show', $report->id)}}">
                                                        Visualizar Relatório
                                                    </a>
                                                </td>

                                                <td>
                                                    @if($report->user->perfil)
                                                        ADMIN
                                                    @else
                                                        <div class="switch m-r-10">
                                                            <input type="checkbox" {{$report->approved ? 'checked' : ""}} onchange=" changeReportStatus({{$report->id}})" class="switcher-input" name="perfil" id="{{"switch-". $report->id}}">
                                                            <label for="{{"switch-". $report->id}}" selected class="cr switchForTable"></label>
                                                        </div>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach

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

    <script>
        function changeReportStatus(id)
        {
            axios.post('/admin/reports/change-status', {
                id: id
            });

        }


    </script>
</body>
</html>
