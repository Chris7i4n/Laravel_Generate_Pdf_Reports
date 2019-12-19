<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="{{ public_path('assets/css/pdf.css') }}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{ public_path('assets/bootstrap/bootstrap.min.css') }}" >

        <title>
            PDF
        </title>
    </head>
    <body>
        <table class="table-reports table-small table-width" >
            <thead>
                <tr class="table-empregados-head" >
                    <th>
                        <img
                            src="{{ public_path("storage/". $report->logoCompanyContracted) }}"
                            class = "logo-header"
                        >
                    </th>
                    <th>
                        <div class="table-title" >
                            <h2>Relatório Técnico de Inspeção de Sistemas de Proteção Contra Incêndio - {{$report->type}}
                            </h2>
                        </div>
                        <div class = "clientDiv" >
                            <div class="inspecao " >
                                <span>Inspeção: </span>
                                <h3>{{$report->inspection_number}}ª  INSPEÇÃO - {{$report->inspection_year}}</h3>
                            </div>
                            <div class="periodo" >
                                <span>Periodo:</span>
                                <p>{{$report->period}}</p>
                        </div>
                    </th>
                    <th>
                        <img
                            src="{{ public_path("storage/". $report->logoCompanyContracting) }}"
                            class = "logo-header"
                        >
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr class="table-id-fields">
                    <td >
                        <span >Unidade:</span>
                        <h3>{{$report->unity->name}}</h3>
                    </td>
                    <td>
                        <span>Número Documento:</span>
                        <h3>US{{$yearNumberForDocumentNumber}}-RTSPCI-{{$codeNumberForDocumentNumber}}-{{$companyNameForDocumentNumber}}</h3>
                    </td>
                    <td>
                        <span>Folha:</span>
                        <h3>Página 1 de 21</h3>
                    </td>
                </tr>
                <tr class="table-data">
                    <td>
                        <h3>Dados Contratada</h3>
                        <ul>
                            <li><span><b>EMPRESA:</b></span>{{$companyContracted->company}}</li>
                            <li><span><b>ENDEREÇO:</b></span>{{$companyContracted->address}}</li>
                            <li><span><b>CNPJ:</b></span>{{$companyContracted->cnpj}}</li>
                            <li><span><b>TELEFONE:</b></span>{{$companyContracted->phone}}</li>
                            <li><span><b>RESPONSÁVEL TÉCNICO:</b></span>{{$companyContracted->tecnical_responsable}}</li>
                        </ul>
                    </td>
                    <td>
                        <h3>Dados Contratante</h3>
                        <ul>
                            <li><span><b>EMPRESA:</b></span> {{$report->unity->company->first()->company }} </li>
                            <li><span><b>ENDEREÇO:</b></span>{{$report->unity->address }} </li>
                            <li><span><b>CNPJ:</b></span>{{$report->unity->cnpj }} </li>
                            <li><span><b>TELEFONE:</b></span>{{$report->unity->phone }} </li>
                            <li><span><b>RESPONSÁVEL CONTRATANTE:</b></span>{{$report->unity->contracting_responsable }} </li>
                    </td>
                </tr>
                <tr class="indice-de-revisoes">
                    <td>
                        <h3>Índice de revisões</h3>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="pagebreak"></div>
    </body>

</html>

{{-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="{{ public_path('assets/css/pdf.css') }}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{ public_path('assets/bootstrap/bootstrap.min.css') }}" >

        <title>
            PDF
        </title>
    </head>
    <body>
        <table class="table-reports table-small table-width">
            <thead>
                <tr class="">
                    <th >
                        <div class="row">
                            <div class="col-12">
                                <img
                                    src="{{ public_path("storage/". $report->logoCompanyContracted) }}"
                                    class = "logo-header"
                                >
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="row">
                            <div class="col-12">
                                <div class="">
                                    <h2>Relatório Técnico de Inspeção de Sistemas de Proteção Contra Incêndio - {{$report->type}}
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-8">
                                <span>Inspeção: </span>
                                <h3>{{$report->inspection_number}}ª  INSPEÇÃO - {{$report->inspection_year}}</h3>
                            </div>
                            <div class="col-4">
                                <span>Periodo:</span>
                                <p>{{$report->period}}</p>
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="row">
                            <div class="col-12">
                                <img
                                    src="{{ public_path("storage/". $report->logoCompanyContracting) }}"
                                    class = "logo-header">
                            </div>
                        </div>
                    </th>

                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

        <div class="pagebreak"></div>
    </body>

</html> --}}

