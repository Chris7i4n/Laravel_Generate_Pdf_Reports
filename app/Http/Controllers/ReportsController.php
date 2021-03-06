<?php

namespace App\Http\Controllers;

use App\Bomb;
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
use App\Hydrant;
use App\Lighting;
use App\Recomendation;
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

        $aditionalItens = $this->showReportAditionalItens($report);

        $pdf = PDF::loadView('dashboard.reports.pdfReports', array(
                    'report' => $report ,
                    'companyContracted' => $aditionalItens[0],
                    'codeNumberForDocumentNumber' => $aditionalItens[1],
                    'yearNumberForDocumentNumber' => $aditionalItens[2],
                    'companyNameForDocumentNumber' => $aditionalItens[3],
                    'monthOfTheGoal' => $aditionalItens[4],
                    'equipments' => $aditionalItens[5],
                    'triggers' => $aditionalItens[6],
                    'sinalizations' => $aditionalItens[7],
                    'lightings' => $aditionalItens[8],
                    'descriptionOfElementLightings' => $aditionalItens[9],
                    'descriptionOfElementSinalizations' => $aditionalItens[10],
                    'descriptionOfElements' => $aditionalItens[11],
                    'bombs' => $aditionalItens[12],
                    'descriptionOfElementBombs' => $aditionalItens[13],
                    'hydrants' => $aditionalItens[14],
                    'descriptionOfElementHydrants' => $aditionalItens[15],
                    'recomendations' => $aditionalItens[16],
                    'endOfReport' => $aditionalItens[17],
                ))

                ->setOption('margin-top', 1)
                ->setOption('margin-bottom', 20)
                ->setOption('margin-left', 1)
                ->setOption('margin-right', 2)
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
        $lightings = Lighting::all();
        $bombs = Bomb::all();
        $hydrants = Hydrant::all();
        $recomendations = Recomendation::all();

        return view('dashboard.reports.createReports', compact('unities', 'contractedCompanies', 'equipments', 'triggers','sinalizations', 'lightings', 'bombs', 'hydrants','recomendations'));
    }

    public function store(ReportRequest $request)
    {

        $this->aditionalRequest($request);

        $report = Report::create($request->all());

        $this->attachEquipment($report, $request);
        $this->attachTrigger($report, $request);
        $this->attachSinalization($report, $request);
        $this->attachLighting($report, $request);
        $this->attachBomb($report, $request);
        $this->attachHydrant($report, $request);
        $this->attachRecomendation($report, $request);
        $this->attachEndOfReport($report, $request);

        return redirect()->back()->with(['message' => 'Relatório gerado com sucesso']);
    }

    public function edit(Report $report)
    {
        return view('dashboard.reports.createReports', compact('report'));
    }

    public function changeStatus(Request $request)
    {
        $report = Report::where('id', $request->id)->first();
        $report->approved = !$report->approved;
        $report->save();

        return $report;
    }

}
