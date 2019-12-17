<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        {{-- <link href="{{ public_path('assets/css/pdf.css') }}" rel="stylesheet" type="text/css"/> --}}
        <link href="{{ asset('assets/css/pdf.css') }}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}" >

        <title>
            PDF
        </title>
    </head>
    <body>
        <table class="table-reports table-small table-width">
            <thead>
                <tr class="table-empregados-head">
                    <th>
                        <img
                            src="{{ asset("storage/". $report->logoCompanyContracted) }}"
                            class = "logo-header"
                        >
                    </th>
                    <th>
                        {{-- <div class="row">
                            <div class="col-12">

                            </div>
                        </div> --}}
                        <div class="table-title">
                            <h2>Relatório Técnico de Inspeção de Sistemas de Proteção Contra Incêndio - {{$report->type}}
                            </h2>
                        </div>
                        <div class = "clientDiv">
                            <div class="inspecao">
                                <span>Inspeção: </span>
                                <h3>{{$report->user->name}}</h3>
                            </div>
                            <div class="periodo">
                                <span>Periodo:</span>
                                <p>J-A-S</p>
                        </div>
                    </th>
                    <th>
                        <img
                            src="{{ asset("storage/". $report->logoCompanyContracting) }}"
                            class = "logo-header"
                        >
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr class="table-id-fields">
                    <td>
                        <span>Unidade:</span>
                        <h3>Nome da Unidade</h3>
                    </td>
                    <td>
                        <span>Número Documento:</span>
                        <h3>2342342341423</h3>
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
                            <li><span><b>EMPRESA:</b></span>Empresa X</li>
                            <li><span><b>ENDEREÇO:</b></span>Rua Tal</li>
                            <li><span><b>CNPJ:</b></span>2398473242</li>
                            <li><span><b>TELEFONE:</b></span>85 9832242</li>
                            <li><span><b>RESPONSÁVEL TÉCNICO:</b></span>Yasmin Demoin</li>
                        </ul>
                    </td>
                    <td>
                        <h3>Dados Contratante</h3>
                        <ul>
                            <li><span><b>EMPRESA:</b></span>Empresa X</li>
                            <li><span><b>ENDEREÇO:</b></span>Rua Tal</li>
                            <li><span><b>CNPJ:</b></span>2398473242</li>
                            <li><span><b>TELEFONE:</b></span>85 9832242</li>
                            <li><span><b>RESPONSÁVEL TÉCNICO:</b></span>Yasmin Demoin</li>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="pagebreak"></div>
    </body>

</html>
