<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="{{ asset('assets/css/pdf.css') }}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div style="text-align: center;">
            <table style="margin:0px auto; padding: 2cm;">
                <tr>
                    {{-- <td width="50%" class="text-center"><img src="{{ public_path() . $documento->empresa->getLogo(true) }}" style="max-width: 360px; max-height:130px;"></td> --}}
                    <td style="padding:1cm;"></td>
                    {{-- <td class="text-center"><img src="{{ public_path() . $documento->empresa->getClinica()->getLogo(true) }}" style="max-width: 360px; max-height:130px;"></td> --}}
                </tr>
            </table>

            <h1 style="margin-top: 1.5cm; margin-bottom: 0; font-size: 55px; color: #555555;">NR-9 PPRA</h1>
            <h2 style="margin-top: 0; margin-bottom: 3cm; font-size: 21px; font-weight: normal; color: #555555;">Programa de Prevenção de Riscos Ambientais</h2>

            <h2>Documento Base</h2>

            <h3 style="margin-top: 1.5cm; font-weight: normal;">
                <strong>Periodicidade Anual</strong><br>
                Validade:
                {{-- Validade: {{ date('d/m/Y', strtotime($documento->revisoes->first()->created_at->addMonths(12))) }} --}}
            </h3>

            <h3 style="margin-top:1.5cm; font-weight: normal;">
            <strong>Razão Social</strong><br>

            </h3>
            <strong>CNPJ: </strong>
            <h3 style="margin-top:1.5cm; font-weight: normal;">
                <strong>Nome Fantasia</strong><br>

            </h3>
            <h4 style="margin-top:1.5cm; font-weight: normal;">
                <strong>CNAE: </strong>
                <span style="display: inline-block; width: 2cm;"></span>
               <strong>Grau de Risco: </strong>
            </h4>
            <h3 style="margin-top:1.5cm; font-weight: normal;">

            </h3>
        </div>
    </body>
</html>
