<footer >
    <table class="footer-table">
        <tr>
            <th  class= "separator" ></th>
            <th class="separator-two"></th>
            <th  class= "separator-tree"></th>
        </tr>
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
                    @if($report->footer_logo_4)
                        <img
                            src="{{ public_path("storage/". $report->footer_logo_4) }}"
                            class = "logo-footer"
                        >
                    @endif
                    @if($report->footer_logo_5)
                        <img
                            src="{{ public_path("storage/". $report->footer_logo_5) }}"
                            class = "logo-footer"
                        >
                    @endif
                    <p>{{ $report->footer_social_reason }}</p>
                    <p>{{ $report->footer_address }}</p>
                    <p>{{ $report->footer_phone }}</p>
                    <p> {{ $report->footer_site }}</p>
                </td>
            </tr>

        </tbody>
    </table>
</footer>


