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
use App\Equipment;

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
        $companyContracted = $report->company;
        $monthOfTheGoal = $this->getMonth($report->data_goals);
        $equipments = $report->equipment;
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
                    'monthOfTheGoal' => $monthOfTheGoal,
                    'equipments' => $equipments,

                ))
                ->setOption('margin-top', 1)
                ->setOption('margin-bottom', 18)
                ->setOption('margin-left', 3)
                ->setOption('margin-right', 2)
                ->setOption('footer-html', $footerHtml);

        return $pdf->stream('relatorio.pdf');
    }


    public function create()
    {
        $unities = Unity::all();
        $contractedCompanies = Company::whereNotNull('tecnical_responsable')->get();
        $equipments = Equipment::all();
        return view('dashboard.reports.createReports', compact('unities', 'contractedCompanies', 'equipments'));
    }

    public function store(ReportRequest $request)
    {

        $company = $this->getCompany($request['unity_id']);
        $contractedCompany = $this->getContractedCompany($request['company_id']);

        if(!$company)
        {

            return redirect()->back()->with(['errorMessage' => 'A unidade precisa estar vinculada a uma empresa']);

        }

        if(!Company::whereNotNull('tecnical_responsable')->first())
        {
            return redirect()->back()->with(['errorMessage' => 'Uma empresa contratada precisa ser adicionada']);
        }

        //for create report
        if(Auth::user()->perfil == 1){$request['approved'] = 1;}
        else $request['approved'] = 0;
        $request['user_id'] = Auth::user()->id;
        $request['logoCompanyContracted'] = $this->getLogoContractedCompany($request['company_id']);
        $request['logoCompanyContracting'] = $company->logo;
        $request['conclusion_image'] = $this->uploadFiles($request['image_of_conclusion']);
        $request['footer_logo_1'] = $contractedCompany->logo;
        $request['footer_logo_2'] = $contractedCompany->footer_logo_1;
        $request['footer_logo_3'] = $contractedCompany->footer_logo_2;
        $request['footer_logo_4'] = $contractedCompany->footer_logo_3;
        $request['footer_logo_5'] = $contractedCompany->footer_logo_4;
        $request['footer_address'] = $contractedCompany->address;
        $request['footer_site'] = $contractedCompany->footer_site;
        $request['footer_social_reason'] = $contractedCompany->footer_social_reason;
        $request['footer_phone'] = $contractedCompany->phone;

        $report = Report::create($request->all());

        foreach($request['equipment_id'] as $equipment_id)
        {

            $report->equipment()->attach($equipment_id);

        }
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
