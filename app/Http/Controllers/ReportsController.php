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
use App\Trigger;
use App\Equipment;
use App\Sinalization;

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
        $triggers = $report->trigger;
        $sinalizations = $report->sinalization;
        $descriptionOfElements = $this->getDescriptionOfElements($report->description_of_elements);
        $descriptionOfElementSinalizations = $this->getDescriptionOfElements($report->description_of_elements_sinalization);

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
                    'triggers' => $triggers,
                    'sinalizations' => $sinalizations,
                    'descriptionOfElementSinalizations' => $descriptionOfElementSinalizations,
                    'descriptionOfElements' => $descriptionOfElements,

                ))
                ->setOption('margin-top', 5)
                ->setOption('margin-bottom', 18)
                ->setOption('margin-left', 2)
                ->setOption('margin-right', 1)
                ->setOption('footer-html', $footerHtml);

        return $pdf->stream('relatorio.pdf');
    }


    public function create()
    {
        $unities = Unity::all();
        $contractedCompanies = Company::whereNotNull('tecnical_responsable')->get();
        $equipments = Equipment::all();
        $triggers = Trigger::all();
        $sinalizations = Sinalization::all();
        return view('dashboard.reports.createReports', compact('unities', 'contractedCompanies', 'equipments', 'triggers','sinalizations'));
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
        $request['conclusion_image'] = $this->uploadFiles($request['conclusion_image_1']);
        $request['conclusion_image_trigger_1'] = $this->uploadFiles($request['conclusion_image_1']);
        $request['conclusion_image_trigger_2'] = $this->uploadFiles($request['conclusion_image_2']);
        $request['conclusion_image_sinalization_1'] = $this->uploadFiles($request['conclusion_image_1_sinalization']);
        $request['conclusion_image_sinalization_2'] = $this->uploadFiles($request['conclusion_image_2_sinalization']);
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
        $this->attachEquipment($report, $request);
        $this->attachTrigger($report, $request);
        $this->attachSinalization($report, $request);

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
