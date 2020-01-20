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
        <div class="pagebreak"></div>
        @include('dashboard.reports.pageFourReportsPdf')
        <div class="pagebreak"></div>
        @include('dashboard.reports.pageFiveReportsPdf')
        <div class="pagebreak"></div>
        @include('dashboard.reports.pageSixReportsPdf')
        <div class="pagebreak"></div>
        @include('dashboard.reports.pageSevenReportsPdf')
        <div class="pagebreak"></div>
        @include('dashboard.reports.pageEightReportsPdf')
        <div class="pagebreak"></div>
        @include('dashboard.reports.pageNineReportsPdf')
        <div class="pagebreak"></div>
        @include('dashboard.reports.pageTenReportsPdf')
        <div class="pagebreak"></div>
        @include('dashboard.reports.pageElevenReportsPdf')
        <div class="pagebreak"></div>
        @include('dashboard.reports.pageTwelveReportsPdf')
    </body>

</html>
