<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportRequest;
use App\Report;
use App\Unity;
use App\User;
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
            $clients = User::where('perfil', 0)->get();
            return view('dashboard.reports.showReports', compact('clients'));

        }else{
            $reports = Auth::user()->reports;
            return view('dashboard.reports.showClientReports', compact('reports'));

        }
            // return view('dashboard.reports.pdfReports', compact('report'));


    }

    public function show(Report $report)
    {
        $footerHtml = view()->make('dashboard.footer.pdfFooter')->render();
        $pdf = PDF::loadView('dashboard.reports.pdfReports', array(
                'report' => $report ))
                ->setOption('margin-top', 1)
                // ->setOption('margin-bottom', 20)
                ->setOption('margin-left', 3)
                ->setOption('margin-right', 2);
                // ->setOption('footer-html', $footerHtml);

        // return view('dashboard.reports.pdfReports', compact('report'));

        return $pdf->stream('relatorio.pdf');
    }

    public function create()
    {
        $unities = Unity::all();
        return view('dashboard.reports.createReports', compact('unities'));
    }

    public function store(ReportRequest $request)
    {
        $unity = Unity::where('id',$request['unity_id'])->first();
        $company = $unity->company->first();
        $request['approved'] = 0;
        $request['user_id'] = Auth::user()->id;
        $request['logoCompanyContracted'] = $this->uploadFiles($request->file('logoContractedCompany'));
        $request['logoCompanyContracting'] = $company->logo;

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

    public function changeStatus(Request $request)
    {
        $report = Report::where('id', $request->id)->first();
        $report->approved = !$report->approved;
        $report->save();

        return $report;
    }

}
