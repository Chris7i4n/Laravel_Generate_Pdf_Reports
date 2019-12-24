<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="{{ public_path('assets/css/pdf.css') }}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <footer>
            <table class="footer-table">
                {{-- <thead> --}}
                    <tr>
                        <th  class= "separator" ></th>
                        <th class="separator-two"></th>
                        <th  class= "separator-tree"></th>
                    </tr>
                {{-- </thead> --}}
                <tbody>
                    <tr>
                        <td>
                            <img
                                src="{{ public_path("storage/". $report->footer_logo_1) }}"
                                class = "logo-footer"
                            >
                            <img
                                src="{{ public_path("storage/". $report->footer_logo_2) }}"
                                class = "logo-footer"
                            >
                            <img
                                src="{{ public_path("storage/". $report->footer_logo_3) }}"
                                class = "logo-footer"
                            >
                        </td>
                        <td></td>
                        <td class="company-datas">
                            <p>{{ $report->footer_social_reason }}</p>
                            <p>{{ $report->footer_address }}</p>
                            <p>{{ $report->footer_phone }}</p>
                            <p> {{ $report->footer_site }}</p>
                        </td>
                    </tr>

                </tbody>
            </table>
            {{-- <table style="border-color: #9ccc65;">
                <tr style="border-color: #9ccc65; !important">
                    <td class="text-left" style="padding: 0 !important;">

                    </td>
                    <td class="text-center" style="padding: 0 !important;">
                    </td>

                    <td class="text-right" style="padding: 0 !important;">
                    </td>
                </tr>

                <tr>
                    <td class="text-left" style="padding: 0 !important;">

                    </td>
                    <td class="text-center" style="padding: 0 !important;">
                    </td>

                    <td class="text-right" style="padding: 0 !important;">
                    </td>
                </tr>

            </table> --}}
        </footer>
    </body>
</html>


