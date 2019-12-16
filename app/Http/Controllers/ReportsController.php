<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportRequest;
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
            $reports = Auth::user()->reports;
            return view('dashboard.reports.showClientReports', compact('reports'));

        }
            // return view('dashboard.reports.pdfReports', compact('report'));


    }

    public function show(Report $report)
    {
        $pdf = PDF::loadView('dashboard.reports.pdfReports', array(
                'report' => $report
                ));
        // return view('dashboard.reports.pdfReports', compact('report'));

        return $pdf->stream('relatorio.pdf');
    }

    public function create()
    {
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

    public function store(ReportRequest $request)
    {
        dd($request->all());
        $request['approved'] = 0;
        $request['user_id'] = Auth::user()->id;

        $request['logoCompanyContracted'] = $this->uploadFiles($request->file('logoContractedCompany'));
        $request['logoCompanyContracting'] = $this->uploadFiles($request->file('logoContractingCompany'));

        Report::create($request->all());

        return redirect()->back()->with(['message' => 'Relatório gerado com sucesso']);
    }

    public function uploadFiles($file)
    {
        $fileUploaded = Storage::putFileAs('public/', $file , $file->getClientOriginalName());
        $fileNameExploaded = explode("/", $fileUploaded);
        $fileName = end($fileNameExploaded);
        return $fileName;
    }

}
