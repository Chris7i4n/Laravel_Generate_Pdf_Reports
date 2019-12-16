<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="{{ public_path('assets/css/pdf.css') }}" rel="stylesheet" type="text/css"/>
        {{-- <link href="{{ asset('assets/css/pdf.css') }}" rel="stylesheet" type="text/css"/> --}}
        <title>
        </title>
    </head>
    <body>
        <div class="textos-ppra">
            <div style="line-height:1.5;">
                <table class="table-empregados table-small bordered">
                    <thead>
                        <tr style="color:black;" bgcolor="white">
                            <th style="width: 4cm;">
                                <img
                                    src="{{ public_path("storage/". $report->logoCompanyContracted) }}"
                                    class = "logo-header"
                                    style=
                                >
                            </th>
                            <th style="width: 6cm;">Relatório Técnico de Inspeção de Sistemas de Proteção Contra Incêndio - SPCI
                                <div class = "separator"></div>
                                <div class = "clientDiv"> Cliente: {{Auth::user()->name}} </div>
                            </th>
                            <th style="width: 3cm;">
                                <img
                                src="{{ public_path("storage/". $report->logoCompanyContracting) }}"
                                class = "logo-header"
                                style="height: 60px; width: auto; padding: 5px; margin-top: 5px;"
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

            </div>
        </div>
    </body>
</html>
