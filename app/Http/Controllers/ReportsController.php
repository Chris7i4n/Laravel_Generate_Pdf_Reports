<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Auth;
use Storage;
class ReportsController extends Controller
{
    public function index()
    {

        if(Auth::user()->perfil == 1)
        {
            return view('dashboard.reports.showReports');
        }else{

            return view('dashboard.reports.showClientReports');

        }
            // return view('dashboard.reports.pdfReports', compact('report'));
            // $pdf = PDF::loadView('dashboard.reports.pdfReports', array(
            //     'report' => $report
            // ));
                // ->setOption('margin-top', 30)
                // ->setOption('margin-bottom', 25)
                // ->setOption('margin-left', 11)
                // ->setOption('margin-right', 11)
                // ->setOption('header-html', $headerHtml)
                // ->setOption('footer-html', $footerHtml)
                // ->setOption('cover', $cover);

            // return $pdf->stream('relatorio.pdf');

    }

    public function create()
    {
        // dd($report->logoCompanyContracted);
        return view('dashboard.reports.createReports');
    }

    // public function create()
    // {
        // $headerHtml = view()->make('dashboard.header.pdfHeader')->render();
        // $footerHtml = view()->make('dashboard.footer.pdfFooter')->render();
        // $cover      = view()->make('dashboard.cover.pdfCover')->render();
    //     $pdf = PDF::loadView('dashboard.reports.createReports');
    //             // ->setOption('margin-top', 30)
    //             // ->setOption('margin-bottom', 25)
    //             // ->setOption('margin-left', 11)
    //             // ->setOption('margin-right', 11)
    //             // ->setOption('header-html', $headerHtml)
    //             // ->setOption('footer-html', $footerHtml)
    //             // ->setOption('cover', $cover);

    //     // return view('dashboard.reports.createReports');
    //     return $pdf->stream('nome-arquivo-pdf-gerado.pdf');

    // }

    public function store(Request $request)
    {
        $request['approved'] = 0;
        $request['user_id'] = Auth::user()->id;

        if($request->file('logoContractedCompany'))
        {
            $fileUploaded = Storage::putFileAs('public/', $request->file('logoContractedCompany'), $request->file('logoContractedCompany')->getClientOriginalName());
            $fileNameExploaded = explode("/", $fileUploaded);
            $fileName = end($fileNameExploaded);

            $request['logoCompanyContracted'] = $fileName;
        }

        if($request->file('logoContractingCompany'))
        {
            $fileUploaded = Storage::putFileAs('public/', $request->file('logoContractingCompany'), $request->file('logoContractingCompany')->getClientOriginalName());
            $fileNameExploaded = explode("/", $fileUploaded);
            $fileName = end($fileNameExploaded);

            $request['logoCompanyContracting'] = $fileName;
        }
        Report::create($request->all());

        return redirect()->back()->with(['message' => 'Relatório gerado com sucesso']);
    }
}
