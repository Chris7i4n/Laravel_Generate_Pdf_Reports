<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adicionar empresa contratante</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <!-- select2 css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/select2.min.css') }}">

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
                            <h5 class="m-b-10">Empresas</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Cadastro de Empresas Contratantes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Form Validation ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" class="form-login" enctype="multipart/form-data" action="{{ route('companies.store') }}" >
                            @csrf
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Logo da empresa</label>
                                        <input type="file" class="form-control" name="logoContractingCompany">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Nome da empresa</label>
                                        <input type="text" class="form-control" name="company" placeholder="Nome da empresa">
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Unidades</label>
                                        <select class="js-example-basic-multiple col-sm-12" multiple="multiple" name="unity_id[]" >
                                            @foreach ($unities as $unity)
                                                <option value="{{$unity->id}}">{{$unity->name}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Código para o número do documento</label>
                                        <input type="text" class="form-control" name="code_number" placeholder="Ex:10">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                    {{-- Notifications  --}}
                    @if(\Session::has('message'))
                        <input id = "notification" value = "{{\Session::get('message')}}" type = "hidden" class="btn notifications btn-success" data-type="success" data-from="bottom" data-align="right"/>
                    @endif

                    @if($errors->first())

                        <input id = "notification" value = "{{$errors->first()}}" type = "hidden" class="btn notifications btn-danger" data-type="danger" data-from="bottom" data-align="right"/>

                    @endif
                    </div>
                </div>
            </div>
            <!-- [ Form Validation ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>

<script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/ripple.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>

<script src="{{ asset('assets/js/plugins/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset("assets/js/pages/ac-notification.js") }}"></script>

<!-- jquery-validation Js -->
<script src="{{ asset('assets/js/plugins/jquery.validate.min.js') }}"></script>
<!-- form-picker-custom Js -->
<script src="{{ asset('assets/js/pages/form-validation.js') }}"></script>

<!-- select2 Js -->
<script src="{{ asset('assets/js/plugins/select2.full.min.js')}}"></script>
<!-- form-select-custom Js -->
<script src="{{ asset('assets/js/pages/form-select-custom.js')}}"></script>



</body>
</html>
