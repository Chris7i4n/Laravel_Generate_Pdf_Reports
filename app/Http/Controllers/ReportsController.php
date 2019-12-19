<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportRequest;
use App\Report;
use App\Unity;
use App\User;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Auth;
use App\Company;

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

            foreach($reports as $report)
            {
                $report['codeNumberForDocumentNumber'] =  $this->getCodeNumber($report);
                $report['yearNumberForDocumentNumber'] =  $this->getYearNumber($report);
                $report['companyNameForDocumentNumber'] =  $this->getCompanyName($report);

            }

            return view('dashboard.reports.showClientReports', compact('reports'));

        }

    }

    public function show(Report $report)
    {
        $footerHtml = view()->make('dashboard.footer.pdfFooter')->render();
        $companyUserId = $report->unity->company->first()->user_id;
        $companyContracted = Company::where('user_id', $companyUserId)->whereNotNull('tecnical_responsable')->first();

        // for document number
        $codeNumberForDocumentNumber = $this->getCodeNumber($report);
        $yearNumberForDocumentNumber = $this->getYearNumber($report);
        $companyNameForDocumentNumber = $this->getCompanyName($report);

        $pdf = PDF::loadView('dashboard.reports.pdfReports', array(

                    'report' => $report ,
                    'companyContracted' => $companyContracted,
                    'codeNumberForDocumentNumber' => $codeNumberForDocumentNumber,
                    'yearNumberForDocumentNumber' => $yearNumberForDocumentNumber,
                    'companyNameForDocumentNumber' => $companyNameForDocumentNumber,

                ))
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

        $company = $this->getCompany($request['unity_id']);

        if(!Company::where('user_id', Auth::user()->id)->whereNotNull('tecnical_responsable')->first())
        {
            return redirect()->back()->with(['errorMessage' => 'Uma empresa contratada precisa ser adicionada']);

        }

        $request['approved'] = 0;
        $request['user_id'] = Auth::user()->id;
        $request['logoCompanyContracted'] = $this->getLogoContractedCompany();
        $request['logoCompanyContracting'] = $company->logo;

        Report::create($request->all());

        return redirect()->back()->with(['message' => 'Relatório gerado com sucesso']);
    }


    public function changeStatus(Request $request)
    {
        $report = Report::where('id', $request->id)->first();
        $report->approved = !$report->approved;
        $report->save();

        return $report;
    }

}
