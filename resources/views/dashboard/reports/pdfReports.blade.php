<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="{{ public_path('assets/css/pdf.css') }}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{ public_path('assets/bootstrap/bootstrap.min.css') }}" >
        <title>
            PDF
        </title>
    </head>
    <body>
        @include('dashboard.reports.pageOneReportsPdf')
        <div class="pagebreak"></div>
        @include('dashboard.reports.pageTwoReportsPdf')
        <div class="pagebreak"></div>
        @include('dashboard.reports.pageThreeReportsPdf')
    </body>

</html>
