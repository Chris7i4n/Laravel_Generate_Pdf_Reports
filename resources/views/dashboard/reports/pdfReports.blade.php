<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        {{-- <link href="{{ public_path('assets/css/pdf.css') }}" rel="stylesheet" type="text/css"/> --}}
        <link href="{{ public_path('assets/css/pdf.css') }}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{ public_path('assets/bootstrap/bootstrap.min.css') }}" >

        <title>
            PDF
        </title>
    </head>
    <body>
        <table class="table-empregados table-small bordered table-width">
            <thead>
                <tr style="color:black;" bgcolor="white">

                    <th style="width: 3cm;">
                        <img
                            src="{{ public_path("storage/". $report->logoCompanyContracted) }}"
                            class = "logo-header"
                        >
                    </th>

                    <th style="width: 6cm;">Relatório Técnico de Inspeção de Sistemas de Proteção Contra Incêndio - {{$report->type}}
                        <div class = "separator"></div>
                        <div class = "clientDiv"> Cliente: {{$report->user->name}} </div>
                    </th>

                    <th style="width: 3cm;">
                        <img
                        src="{{ public_path("storage/". $report->logoCompanyContracting) }}"
                        class = "logo-header"
                        >
                    </th>

                </tr>
            </thead>
            <tbody>
                {{-- <tr>
                    <td></td>
                    <td>aaa</td>
                    <td>aaa</td>
                </tr> --}}
            </tbody>
        </table>

        <div class="pagebreak"></div>
    </body>

</html>
