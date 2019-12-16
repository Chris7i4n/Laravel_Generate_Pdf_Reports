<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="{{ public_path('/assets/css/pdf.css')}}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <table>
                <tr>
                    <td>
                        Revisão: 12<br>
                        Data da elaboração: 12
                    </td>
                    <td style="text-align: right;">
                        {{-- <img src="{{ public_path() . $documento->empresa->getLogo(true) }}" height="35"> --}}
                    <td>
                </tr>
            </table>

            <hr style="border-color: white;">

            <table>
                <tr>
                    <td style="padding: 0 !important;">Programa de Prevenção de Riscos Ambientais - PPRA</td>
                    <td style="padding: 0 !important; text-align: center;">Portaria MTE 3.214/78 – NR 9</td>
                    <td style="padding: 0 !important; text-align: right;"></td>
                </tr>
            </table>
        </header>
    </body>
</html>
