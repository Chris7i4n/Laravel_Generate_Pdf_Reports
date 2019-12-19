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

    public function getYearNumber($report)
    {
        $yearNumberForDocumentNumber = substr($report->inspection_year, 2, 3);
        return $yearNumberForDocumentNumber;
    }

    public function getCompanyName($report)
    {
        $companyName = $report->unity->name;
        $companyNameForDocumentNumber = strtoupper(str_replace('-','', $companyName));
        $replacedSpaceCompanyName = preg_replace('/\s\s+/', ' ', $companyNameForDocumentNumber);
        $companyNameForDocumentNumber = str_replace(' ','-', $replacedSpaceCompanyName);

        return $companyNameForDocumentNumber;

    }

    public function getCodeNumber($report)
    {
         $codeNumberForDocumentNumber = $report->unity->company->first()->code_number;

         if(strlen($codeNumberForDocumentNumber) <= 2)
         {
             $codeNumberForDocumentNumber = "0". $codeNumberForDocumentNumber;
         }
        return $codeNumberForDocumentNumber;
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

        if(!$company)
        {

            return redirect()->back()->with(['errorMessage' => 'A unidade precisa ser adicionada a uma empresa']);

        }

        $request['approved'] = 0;
        $request['user_id'] = Auth::user()->id;

        if(!Company::where('user_id', Auth::user()->id)->whereNotNull('tecnical_responsable')->first())
        {
            return redirect()->back()->with(['errorMessage' => 'Uma empresa contratada precisa ser adicionada']);

        }
        $request['logoCompanyContracted'] = $this->getLogoContractedCompany();
        $request['logoCompanyContracting'] = $company->logo;

        Report::create($request->all());

        return redirect()->back()->with(['message' => 'Relatório gerado com sucesso']);
    }

    public function getLogoContractedCompany()
    {
        return Company::where('user_id', Auth::user()->id)->whereNotNull('tecnical_responsable')->first()->logo;
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
