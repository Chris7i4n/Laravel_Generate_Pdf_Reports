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
            $clients = User::all();
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
        $footerHtml = view()->make('dashboard.footer.pdfFooter', compact('report'))->render();
        $companyUserId = $report->unity->company->first()->user_id;
        $companyContracted = $report->company;

        // return view('dashboard.footer.pdfFooter', compact('report'));

        // for document number
        $codeNumberForDocumentNumber = $this->getCodeNumber($report);
        $yearNumberForDocumentNumber = $this->getYearNumber($report);
        $companyNameForDocumentNumber = $this->getCompanyName($report);
        // return view('dashboard.reports.pdfReports', compact('report', 'companyContracted', 'codeNumberForDocumentNumber', 'yearNumberForDocumentNumber','companyNameForDocumentNumber'));

        $pdf = PDF::loadView('dashboard.reports.pdfReports', array(

                    'report' => $report ,
                    'companyContracted' => $companyContracted,
                    'codeNumberForDocumentNumber' => $codeNumberForDocumentNumber,
                    'yearNumberForDocumentNumber' => $yearNumberForDocumentNumber,
                    'companyNameForDocumentNumber' => $companyNameForDocumentNumber,

                ))
                ->setOption('margin-top', 1)
                ->setOption('margin-bottom', 18)
                ->setOption('margin-left', 3)
                ->setOption('margin-right', 2)
                ->setOption('footer-html', $footerHtml);

        // return view('dashboard.reports.pdfReports', compact('report'));

        return $pdf->stream('relatorio.pdf');
    }


    public function create()
    {
        $unities = Unity::all();
        $contractedCompanies = Company::whereNotNull('tecnical_responsable')->get();
        return view('dashboard.reports.createReports', compact('unities', 'contractedCompanies'));
    }

    public function store(ReportRequest $request)
    {

        $company = $this->getCompany($request['unity_id']);

        if(!$company)
        {

            return redirect()->back()->with(['errorMessage' => 'A unidade precisa estar vinculada a uma empresa']);

        }

        if(!Company::whereNotNull('tecnical_responsable')->first())
        {
            return redirect()->back()->with(['errorMessage' => 'Uma empresa contratada precisa ser adicionada']);
        }

        $request['approved'] = 0;
        $request['user_id'] = Auth::user()->id;
        $request['logoCompanyContracted'] = $this->getLogoContractedCompany($request['company_id']);
        $request['logoCompanyContracting'] = $company->logo;
        $request['footer_logo_1'] = $this->uploadFiles($request['logo_footer_1']);
        $request['footer_logo_2'] = $this->uploadFiles($request['logo_footer_2']);
        $request['footer_logo_3'] = $this->uploadFiles($request['logo_footer_3']);


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
