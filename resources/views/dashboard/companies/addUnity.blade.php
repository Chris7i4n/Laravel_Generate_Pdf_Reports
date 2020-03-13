<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adicionar unidade</title>

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
                                <h5 class="m-b-10">Unidades</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Cadastro de Unidades</a></li>
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
                            <form method="POST" class="form-login" action="{{ route('unities.store') }}">
                                @csrf
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Nome da unidade</label>
                                            <input type="text" class="form-control" name="name" placeholder="Nome da unidade">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Cnpj</label>
                                            <input type="text" class="form-control" name="cnpj" placeholder="CNPJ da unidade">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Endereço</label>
                                            <input type="text" class="form-control" name="address" placeholder="Endereço da unidade">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Telefone da unidade</label>
                                            <input type="text" class="form-control" name="phone" placeholder="Telefone da unidade">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Responsável Contratante</label>
                                            <input type="text" class="form-control" name="contracting_responsable" placeholder="Responsável contratado da unidade">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Código da unidade</label>
                                            <input type="text" class="form-control" name="code_number" placeholder="Ex:10">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Equipamentos</label>
                                            <select class="js-example-basic-multiple col-sm-12" multiple="multiple" name="equipment_id[]" id="equipments">
                                                @foreach ($equipments as $equipment)
                                                <option value="{{$equipment->id}}">{{$equipment->localization}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Hidrantes</label>
                                            <select class="js-example-basic-multiple col-sm-12" multiple="multiple" name="hydrant_id[]" id="hydrant">
                                                @foreach ($hydrants as $hydrant)
                                                <option value="{{$hydrant->id}}">{{$hydrant->initials}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Bombas</label>
                                            <select class="js-example-basic-multiple col-sm-12" multiple="multiple" name="bomb_id[]" id="bomb">
                                                @foreach ($bombs as $bomb)
                                                <option value="{{$bomb->id}}">{{$bomb->initials}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Sinalizações</label>
                                            <select class="js-example-basic-multiple col-sm-12" multiple="multiple" name="sinalization_id[]" id="sinalization">
                                                @foreach ($sinalizations as $sinalization)
                                                <option value="{{$sinalization->id}}">{{$sinalization->initials}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Acionadores</label>
                                            <select class="js-example-basic-multiple col-sm-12" multiple="multiple" name="trigger_id[]" id="trigger">
                                                @foreach ($triggers as $trigger)
                                                <option value="{{$trigger->id}}">{{$trigger->initials}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Iluminações</label>
                                            <select class="js-example-basic-multiple col-sm-12" multiple="multiple" name="lighting_id[]" id="lighting">
                                                @foreach ($lightings as $lighting)
                                                <option value="{{$lighting->id}}">{{$lighting->initials}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </form>
                            {{-- Notifications  --}}
                            @if(\Session::has('message'))
                            <input id="notification" value="{{\Session::get('message')}}" type="hidden" class="btn notifications btn-success" data-type="success" data-from="bottom" data-align="right" />
                            @endif

                            @if($errors->first())

                            <input id="notification" value="{{$errors->first()}}" type="hidden" class="btn notifications btn-danger" data-type="danger" data-from="bottom" data-align="right" />

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

    <script src="{{ asset('assets/js/plugins/select2.full.min.js')}}"></script>
    <!-- form-select-custom Js -->
    <script src="{{ asset('assets/js/pages/form-select-custom.js')}}"></script>




</body>
</html>
