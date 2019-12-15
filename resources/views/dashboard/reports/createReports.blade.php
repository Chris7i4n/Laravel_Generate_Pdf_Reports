<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="{{ asset('assets/css/pdf.css') }}" rel="stylesheet" type="text/css"/>
        <title>
        </title>
    </head>
    <body>
        <div class="textos-ppra">
            <div style="line-height:1.5;">
                <table class="table-empregados table-small bordered">
                    <thead>
                        <tr style="color:black;" bgcolor="white">
                            <th style="width: 4cm;">Logo da contrada</th>
                            <th style="width: 6cm;">Relatório Técnico de Inspeção de Sistemas de Proteção Contra Incêndio - SPCI
                                <div class = "separator"></div>
                                <div class = "clientDiv"> Cliente:  </div>
                            </th>
                            <th style="width: 3cm;">Logo da contratante</th>
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
