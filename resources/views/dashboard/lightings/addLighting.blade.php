<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adicionar Iluminação</title>

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
                            <h5 class="m-b-10">Iluminação</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                            @if(isset($lighting))
                                <li class="breadcrumb-item"><a href="{{route('lightings.index')}}">Lista de Iluminação</a></li>
                            @else
                                <li class="breadcrumb-item"><a href="#!">Cadastro de Iluminação</a></li>
                            @endif
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
                        @if(isset($lighting))
                            <form method="POST" class="form-login" enctype="multipart/form-data" action="{{ route('lightings.update', $lighting->id) }}" >
                                @method('put')
                        @else
                            <form method="POST" class="form-login" enctype="multipart/form-data" action="{{ route('lightings.store') }}" >
                        @endif
                            @csrf
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Nome do sinalizador</label>
                                        <input type="text" class="form-control" name="name" value="{{isset($lighting) ? $lighting->name : ""}}" placeholder="Nome da iluminação">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Sigla</label>
                                        <input type="text" class="form-control" name="initials" value="{{isset($lighting) ? $lighting->initials : ""}}" placeholder="Ex: AC">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Localização</label>
                                        <input type="text" class="form-control" name="localization" value="{{isset($lighting) ? $lighting->localization : ""}}" placeholder="Localização">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Há projeto?</label>
                                        <select class="form-control" name="question_01">
                                            @if(isset($lighting))
                                                <option @if($lighting->question_01 == "C") selected @endif value="C">C</option>
                                                <option @if($lighting->question_01 == "NC") selected @endif value="NC">NC</option>
                                                <option @if($lighting->question_01 == "NR") selected @endif value="NR">NR</option>
                                                <option @if($lighting->question_01 == "N/A") selected @endif value="N/A">N/A</option>
                                            @else
                                                <option value="C" selected >C</option>
                                                <option value="NC">NC</option>
                                                <option value="NR">NR</option>
                                                <option value="N/A">N/A</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Atende aclaramento?</label>
                                        <select class="form-control" name="question_02">
                                            @if(isset($lighting))
                                                <option @if($lighting->question_02 == "C") selected @endif value="C">C</option>
                                                <option @if($lighting->question_02 == "NC") selected @endif value="NC">NC</option>
                                                <option @if($lighting->question_02 == "NR") selected @endif value="NR">NR</option>
                                                <option @if($lighting->question_02 == "N/A") selected @endif value="N/A">N/A</option>
                                            @else
                                                <option value="C" selected >C</option>
                                                <option value="NC">NC</option>
                                                <option value="NR">NR</option>
                                                <option value="N/A">N/A</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Atende balizamento?</label>
                                        <select class="form-control" name="question_03">
                                            @if(isset($lighting))
                                                <option @if($lighting->question_03 == "C") selected @endif value="C">C</option>
                                                <option @if($lighting->question_03 == "NC") selected @endif value="NC">NC</option>
                                                <option @if($lighting->question_03 == "NR") selected @endif value="NR">NR</option>
                                                <option @if($lighting->question_03 == "N/A") selected @endif value="N/A">N/A</option>
                                            @else
                                                <option value="C" selected >C</option>
                                                <option value="NC">NC</option>
                                                <option value="NR">NR</option>
                                                <option value="N/A">N/A</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Luminância > 5 lux?</label>
                                        <select class="form-control" name="question_04">
                                            @if(isset($lighting))
                                                <option @if($lighting->question_04 == "C") selected @endif value="C">C</option>
                                                <option @if($lighting->question_04 == "NC") selected @endif value="NC">NC</option>
                                                <option @if($lighting->question_04 == "NR") selected @endif value="NR">NR</option>
                                                <option @if($lighting->question_04 == "N/A") selected @endif value="N/A">N/A</option>
                                            @else
                                                <option value="C" selected >C</option>
                                                <option value="NC">NC</option>
                                                <option value="NR">NR</option>
                                                <option value="N/A">N/A</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Espaçamento < 15m?</label>
                                        <select class="form-control" name="question_05">
                                            @if(isset($lighting))
                                                <option @if($lighting->question_05 == "C") selected @endif value="C">C</option>
                                                <option @if($lighting->question_05 == "NC") selected @endif value="NC">NC</option>
                                                <option @if($lighting->question_05 == "NR") selected @endif value="NR">NR</option>
                                                <option @if($lighting->question_05 == "N/A") selected @endif value="N/A">N/A</option>
                                            @else
                                                <option value="C" selected >C</option>
                                                <option value="NC">NC</option>
                                                <option value="NR">NR</option>
                                                <option value="N/A">N/A</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">A altura é adequada?</label>
                                        <select class="form-control" name="question_06">
                                            @if(isset($lighting))
                                                <option @if($lighting->question_06 == "C") selected @endif value="C">C</option>
                                                <option @if($lighting->question_06 == "NC") selected @endif value="NC">NC</option>
                                                <option @if($lighting->question_06 == "NR") selected @endif value="NR">NR</option>
                                                <option @if($lighting->question_06 == "N/A") selected @endif value="N/A">N/A</option>
                                            @else
                                                <option value="C" selected >C</option>
                                                <option value="NC">NC</option>
                                                <option value="NR">NR</option>
                                                <option value="N/A">N/A</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Mantém 2h após interrupção de energia?</label>
                                        <select class="form-control" name="question_07">
                                            @if(isset($lighting))
                                                <option @if($lighting->question_07 == "C") selected @endif value="C">C</option>
                                                <option @if($lighting->question_07 == "NC") selected @endif value="NC">NC</option>
                                                <option @if($lighting->question_07 == "NR") selected @endif value="NR">NR</option>
                                                <option @if($lighting->question_07 == "N/A") selected @endif value="N/A">N/A</option>
                                            @else
                                                <option value="C" selected >C</option>
                                                <option value="NC">NC</option>
                                                <option value="NR">NR</option>
                                                <option value="N/A">N/A</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Após a interrupção de energia, ela liga?</label>
                                        <select class="form-control" name="question_08">
                                            @if(isset($lighting))
                                                <option @if($lighting->question_08 == "C") selected @endif value="C">C</option>
                                                <option @if($lighting->question_08 == "NC") selected @endif value="NC">NC</option>
                                                <option @if($lighting->question_08 == "NR") selected @endif value="NR">NR</option>
                                                <option @if($lighting->question_08 == "N/A") selected @endif value="N/A">N/A</option>
                                            @else
                                                <option value="C" selected >C</option>
                                                <option value="NC">NC</option>
                                                <option value="NR">NR</option>
                                                <option value="N/A">N/A</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">As tomadas de plug estão ok?</label>
                                        <select class="form-control" name="question_09">
                                            @if(isset($lighting))
                                                <option @if($lighting->question_09 == "C") selected @endif value="C">C</option>
                                                <option @if($lighting->question_09 == "NC") selected @endif value="NC">NC</option>
                                                <option @if($lighting->question_09 == "NR") selected @endif value="NR">NR</option>
                                                <option @if($lighting->question_09 == "N/A") selected @endif value="N/A">N/A</option>
                                            @else
                                                <option value="C" selected >C</option>
                                                <option value="NC">NC</option>
                                                <option value="NR">NR</option>
                                                <option value="N/A">N/A</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">O sistema de fixação está ok?</label>
                                        <select class="form-control" name="question_10">
                                            @if(isset($lighting))
                                                <option @if($lighting->question_10 == "C") selected @endif value="C">C</option>
                                                <option @if($lighting->question_10 == "NC") selected @endif value="NC">NC</option>
                                                <option @if($lighting->question_10 == "NR") selected @endif value="NR">NR</option>
                                                <option @if($lighting->question_10 == "N/A") selected @endif value="N/A">N/A</option>
                                            @else
                                                <option value="C" selected >C</option>
                                                <option value="NC">NC</option>
                                                <option value="NR">NR</option>
                                                <option value="N/A">N/A</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Observação</label>
                                        <input type="text" class="form-control" name="note" value="{{isset($lighting) ? $lighting->note : "APROVADO"}}" placeholder="Ex: APROVADO">
                                    </div>
                                </div>
                            </div>
                            @if(isset($lighting))
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            @else
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            @endif

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
