<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class ReportsController extends Controller
{
    public function index()
    {
        return view('dashboard.reports.showReports');
    }

    public function create()
    {
        // $headerHtml = view()->make('dashboard.header.pdfHeader')->render();
        // $footerHtml = view()->make('dashboard.footer.pdfFooter')->render();
        // $cover      = view()->make('dashboard.cover.pdfCover')->render();
        $pdf = PDF::loadView('dashboard.reports.createReports');
                // ->setOption('margin-top', 30)
                // ->setOption('margin-bottom', 25)
                // ->setOption('margin-left', 11)
                // ->setOption('margin-right', 11);
                // ->setOption('header-html', $headerHtml)
                // ->setOption('footer-html', $footerHtml)
                // ->setOption('cover', $cover);

        return $pdf->download();
        return view('dashboard.reports.createReports');

    }
}
