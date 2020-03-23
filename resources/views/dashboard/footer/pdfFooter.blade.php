<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="{{ public_path('assets/css/pdf.css') }}" rel="stylesheet" type="text/css"/>

    </head>
    <body onload="subst()">
        <footer class="section" id="footer">
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
                            <p id="pagination"></p>
                            
                            <p style="padding-top:7px;">{{ $report->footer_social_reason }}</p>
                            <p>{{ $report->footer_address }}</p>
                            <p>{{ $report->footer_phone }}</p>
                            <p>{{ $report->footer_site }}</p>
                        </td>
                    </tr>

                </tbody>
            </table>
        </footer>
    </body>
</html>

<script>
    function subst() {
       var vars = {};

       // explode the URL query string
       var x = document.location.search.substring(1).split('&');

       // loop through each query string segment and get keys/values
       for (var i in x)
       {
          var z = x[i].split('=',2);
          vars[z[0]] = unescape(z[1]);
       }
   
          // if current page equals total pages
        if(vars['page'] == 1){
            
            document.getElementById("footer").style.display = 'none';
        
        }
        document.querySelector('#pagination').textContent = "Página " + vars['page'] +" de "+ vars['sitepages'] ;
    }


 </script>

