<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gerar relatório</title>

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
                            <h5 class="m-b-10">Relatório</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Gerar Relatório</a></li>
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
                        <form method="POST" class="form-login" enctype="multipart/form-data"  action="{{ route('reports.store') }}" >
                            @csrf
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Tipo de relatório</label>
                                        <select class="form-control" name="type">
                                            <option selected disabled>Selecione...</option>
                                            <option value="SPCI">SPCI</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Unidade</label>
                                        <select class="form-control"  name="unity_id">
                                            <option selected disabled>Selecione...</option>
                                            @foreach ($unities as $unity )
                                                <option value={{$unity->id}}>{{$unity->name}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Período</label>
                                        <select class="form-control" name="period">
                                            <option selected disabled>Selecione...</option>
                                            <option value="JAN-FEV-MAR">JAN-FEV-MAR</option>
                                            <option value="ABR-MAI-JUN">ABR-MAI-JUN</option>
                                            <option value="JUL-AGO-SET">JUL-AGO-SET</option>
                                            <option value="OUT-NOV-DEZ">OUT-NOV-DEZ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label"> Número da inspeção</label>
                                        <select class="form-control" name="inspection_number">
                                            <option selected disabled>Selecione...</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                        </select>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Ano da inspeção</label>
                                        <select class="form-control" name="inspection_year">
                                            <option selected disabled>Selecione...</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                        </select>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Empresa Contratada</label>
                                        <select class="form-control"  name="company_id">
                                            <option selected disabled>Selecione...</option>
                                            @foreach ($contractedCompanies as $contractedCompany )
                                                <option value={{$contractedCompany->id}}>{{$contractedCompany->company}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="card-header card-header-space" >
                                <h5>1. Objetivo</h5>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Data para o objetivo</label>
                                        <input type="date" class="form-control" name="data_goals">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Artigo para o objetivo</label>
                                        <input type="text" class="form-control" name="article_goals" placeholder="Artigo dos objetivos">
                                    </div>
                                </div>

                            </div>

                            <div class="card-header card-header-space" >
                                <h5>4. Responsabilidades</h5>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Funcionário que revisou o relatório:</label>
                                        <input type="text" class="form-control" name="reviewed_for" placeholder="Funcionário que revisou o relatório">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Função do funcionário que revisou o relatório:</label>
                                        <input type="text" class="form-control" name="reviewed_for_function" placeholder="Função do funcionário que revisou o relatório">
                                    </div>
                                </div>

                            </div>

                            <div class="card-header card-header-space" >
                                <h5>6.1 Central de Detecção e Alarme</h5>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Descrição do Sistema</label>
                                        <input type="text" class="form-control" name="description_of_system" placeholder="Descrição do Sistema">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Equipamentos</label>
                                        <select class="js-example-basic-multiple col-sm-12" multiple="multiple" name="equipment_id[]" >
                                            @foreach ($equipments as $equipment)
                                                <option value="{{$equipment->id}}">{{$equipment->localization}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Descrição da conclusão</label>
                                        <input type="text" class="form-control" name="description_of_conclusion" placeholder="Descrição da conclusão">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Imagem da conclusão</label>
                                        <input type="file" class="form-control" name="image_of_conclusion">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Legenda da conclusão</label>
                                        <input type="text" class="form-control" name="legend_of_conclusion" placeholder="Legenda da conclusão">
                                    </div>
                                </div>

                            </div>

                            <div class="card-header card-header-space" >
                                <h5>6.2 Acionadores Manuais e Sirenes Audiovisuais</h5>
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Descrição dos elementos</label>
                                        <input type="text" class="form-control" name="description_of_elements" placeholder="Ex: Descrição 1, descrição 2">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Acionadores</label>
                                        <select class="js-example-basic-multiple col-sm-12" multiple="multiple" name="trigger_id[]" >
                                            @foreach ($triggers as $trigger)
                                                <option value="{{$trigger->id}}">{{$trigger->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Conclusão</label>
                                        <input type="text" class="form-control" name="conclusion_of_trigger" placeholder="Conclusão do acionador">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Imagem para a conclusão</label>
                                        <input type="file" class="form-control" name="conclusion_image_1">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Segunda imagem para a conclusão</label>
                                        <input type="file" class="form-control" name="conclusion_image_2">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Legenda</label>
                                        <input type="text" class="form-control" name="conclusion_legend" placeholder="Legenda da conclusão">
                                    </div>
                                </div>

                            </div>

                            <div class="card-header card-header-space" >
                                <h5>6.3 Sinalizações</h5>
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Descrição dos elementos</label>
                                        <input type="text" class="form-control" name="description_of_elements_sinalization" placeholder="Ex: Descrição 1, descrição 2">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Sinalizações</label>
                                        <select class="js-example-basic-multiple col-sm-12" multiple="multiple" name="sinalization_id[]" >
                                            @foreach ($sinalizations as $sinalization)
                                                <option value="{{$sinalization->id}}">{{$sinalization->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Conclusão</label>
                                        <input type="text" class="form-control" name="conclusion_of_sinalization" placeholder="Conclusão dos sinalizadores">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Imagem para a conclusão</label>
                                        <input type="file" class="form-control" name="conclusion_image_1_sinalization">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Segunda imagem para a conclusão</label>
                                        <input type="file" class="form-control" name="conclusion_image_2_sinalization">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Legenda</label>
                                        <input type="text" class="form-control" name="conclusion_legend_sinalization" placeholder="Legenda da conclusão">
                                    </div>
                                </div>

                            </div>

                            <div class="card-header card-header-space" >
                                <h5>6.4 Iluminação de Emergência</h5>
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Descrição dos elementos</label>
                                        <input type="text" class="form-control" name="description_of_elements_lighting" placeholder="Ex: Descrição 1, descrição 2">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Iluminações</label>
                                        <select class="js-example-basic-multiple col-sm-12" multiple="multiple" name="lighting_id[]" >
                                            @foreach ($lightings as $lighting)
                                                <option value="{{$lighting->id}}">{{$lighting->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Conclusão</label>
                                        <input type="text" class="form-control" name="conclusion_of_lighting" placeholder="Conclusão das iluminações">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Imagem para a conclusão</label>
                                        <input type="file" class="form-control" name="conclusion_image_1_lighting">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Segunda imagem para a conclusão</label>
                                        <input type="file" class="form-control" name="conclusion_image_2_lighting">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Legenda</label>
                                        <input type="text" class="form-control" name="conclusion_legend_lighting" placeholder="Legenda da conclusão">
                                    </div>
                                </div>

                            </div>



                            <div class="card-header card-header-space" >
                                <h5>Primeira Revisão</h5>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Data da primeira revisão</label>
                                        <input type="date" class="form-control" name="data_first_revision" placeholder="Responsável contratado da unidade">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Descrição: </label>
                                        <input type="text" class="form-control" name="description_first_revision" value = "Emissão Original para Aprovação" placeholder="Emissão Original para Aprovação">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Inspecionado por: </label>
                                        <input type="text" class="form-control" name="first_inspector_first_revision" placeholder="Nome do funcionário que inspecionou">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Função do funcionário que inspecionou: </label>
                                        <input type="text" class="form-control" name="first_inspector_function_first_revision" placeholder="Função do funcionário que inspecionou">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Inspecionado por: </label>
                                        <input type="text" class="form-control" name="second_inspector_first_revision" placeholder="Nome do funcionário que inspecionou">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Função do funcionário que inspecionou: </label>
                                        <input type="text" class="form-control" name="second_inspector_function_first_revision" placeholder="Função do segundo funcionário que inspecionou">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Elaborado por: </label>
                                        <input type="text" class="form-control" name="elaborator_first_revision" placeholder="Nome do funcionário que elaborou a revisão">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Função do funcionário que elaborou: </label>
                                        <input type="text" class="form-control" name="elaborator_function_first_revision" placeholder="Função do funcionário que elaborou">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Aprovado por: </label>
                                        <input type="text" class="form-control" name="approved_for_first_revision" placeholder="Nome do funcionário que aprovou a revisão">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Função do funcionário que aprovou: </label>
                                        <input type="text" class="form-control" name="approved_for_function_first_revision" placeholder="Função do funcionário que elaborou">
                                    </div>
                                </div>
                            </div>

                            <div class="card-header card-header-space" >
                                <h5>Segunda Revisão</h5>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Data da segunda revisão</label>
                                        <input type="date" class="form-control" name="data_second_revision" placeholder="Responsável contratado da unidade">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Descrição: </label>
                                        <input type="text" class="form-control" name="description_second_revision" placeholder="Emissão Original para Aprovação">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Inspecionado por: </label>
                                        <input type="text" class="form-control" name="first_inspector_second_revision" placeholder="Nome do funcionário que inspecionou">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Inspecionado por: </label>
                                        <input type="text" class="form-control" name="second_inspector_second_revision" placeholder="Nome do funcionário que inspecionou">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Elaborado por: </label>
                                        <input type="text" class="form-control" name="elaborator_second_revision" placeholder="Nome do funcionário que elaborou a revisão">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Aprovado por: </label>
                                        <input type="text" class="form-control" name="approved_for_second_revision" placeholder="Nome do funcionário que aprovou a revisão">
                                    </div>
                                </div>
                            </div>

                            <div class="card-header card-header-space" >
                                <h5>Terceira Revisão</h5>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Data da terceira revisão</label>
                                        <input type="date" class="form-control" name="data_third_revision" placeholder="Responsável contratado da unidade">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Descrição: </label>
                                        <input type="text" class="form-control" name="description_third_revision" placeholder="Emissão Original para Aprovação">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Inspecionado por: </label>
                                        <input type="text" class="form-control" name="first_inspector_third_revision" placeholder="Nome do funcionário que inspecionou">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Inspecionado por: </label>
                                        <input type="text" class="form-control" name="second_inspector_third_revision" placeholder="Nome do funcionário que inspecionou">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Elaborado por: </label>
                                        <input type="text" class="form-control" name="elaborator_third_revision" placeholder="Nome do funcionário que elaborou a revisão">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Aprovado por: </label>
                                        <input type="text" class="form-control" name="approved_for_third_revision" placeholder="Nome do funcionário que aprovou a revisão">
                                    </div>
                                </div>
                            </div>

                            <div class="card-header card-header-space" >
                                <h5>Quarta Revisão</h5>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Data da quarta revisão</label>
                                        <input type="date" class="form-control" name="data_fourth_revision" placeholder="Responsável contratado da unidade">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Descrição: </label>
                                        <input type="text" class="form-control" name="description_fourth_revision" placeholder="Emissão Original para Aprovação">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Inspecionado por: </label>
                                        <input type="text" class="form-control" name="first_inspector_fourth_revision" placeholder="Nome do funcionário que inspecionou">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Inspecionado por: </label>
                                        <input type="text" class="form-control" name="second_inspector_fourth_revision" placeholder="Nome do funcionário que inspecionou">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Elaborado por: </label>
                                        <input type="text" class="form-control" name="elaborator_fourth_revision" placeholder="Nome do funcionário que elaborou a revisão">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Aprovado por: </label>
                                        <input type="text" class="form-control" name="approved_for_fourth_revision" placeholder="Nome do funcionário que aprovou a revisão">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Salvar Relatório</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @if(\Session::has('message'))
            <input id = "notification" value = "{{\Session::get('message')}}" type = "hidden" class="btn notifications btn-success" data-type="success" data-from="bottom" data-align="right"/>
        @endif

        @if(\Session::has('errorMessage'))
            <input id = "notification" value = "{{\Session::get('errorMessage')}}" type = "hidden" class="btn notifications btn-danger" data-type="danger" data-from="bottom" data-align="right"/>
        @endif


        @if($errors->first())

            <input id = "notification" value = "{{$errors->first()}}" type = "hidden" class="btn notifications btn-danger" data-type="danger" data-from="bottom" data-align="right"/>

        @endif
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
