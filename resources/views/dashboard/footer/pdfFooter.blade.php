<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="{{ asset('assets/css/pdf.css') }}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        {{--  {{ dd($documento->empresa) }}  --}}
        <footer>
            <table style="border-color: blue;">
                <tr>
                    <td class="text-left" style="padding: 0 !important;">

                    </td>
                    <td class="text-center" style="padding: 0 !important;">
                    </td>

                    <td class="text-right" style="padding: 0 !important;">
                        Página <span id="page"></span> de <span id="topage"></span>
                    </td>
                </tr>
            </table>
        </footer>
        @if(!env('WKHTMLTOPDF_WINDOWS', false))
        <script type="text/javascript">
            var vars={};
            var x=window.location.search.substring(1).split('&');
            for (var i in x) {
                var z=x[i].split('=',2);
                vars[z[0]] = unescape(z[1]);
            }
            document.getElementById('page').innerHTML = vars.page;
            document.getElementById('topage').innerHTML = vars.topage;
            document.getElementById('date').innerHTML = vars.date;
            document.getElementById('time').innerHTML = vars.time;
        </script>
        @endif
    </body>
</html>
