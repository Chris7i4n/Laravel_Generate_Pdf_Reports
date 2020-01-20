<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Company;
use App\EndOfReport;
use App\Unity;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


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

    public function getLogoContractedCompany($companyId)
    {
        return Company::where('id', $companyId)->first()->logo;
    }

    public function getContractedCompany($companyId)
    {
        return Company::where('id', $companyId)->first();
    }

    public function uploadFiles($file)
    {
        $fileUploaded = Storage::putFileAs('public/', $file , $file->getClientOriginalName());
        $fileNameExploaded = explode("/", $fileUploaded);
        $fileName = end($fileNameExploaded);
        return $fileName;
    }

    public function getCompany($unity)
    {
        $unity = Unity::where('id',$unity)->first();
        $company = $unity->company->first();
        return $company;
    }

    public function getMonth($date)
    {

        $englishMonth = date('F', strtotime($date));

        if($englishMonth == "January") return $month = "janeiro";
        if($englishMonth == "February") return $month = "fevereiro";
        if($englishMonth == "March") return $month = "março";
        if($englishMonth == "April") return $month = "abril";
        if($englishMonth == "May") return $month = "maio";
        if($englishMonth == "June") return $month = "junho";
        if($englishMonth == "July") return $month = "julho";
        if($englishMonth == "August") return $month = "agosto";
        if($englishMonth == "September") return $month = "setembro";
        if($englishMonth == "October") return $month = "outubro";
        if($englishMonth == "Novemer") return $month = "novembro";
        if($englishMonth == "December") return $month = "dezembro";

    }

    public function getDescriptionOfElements($descriptionOfElements)
    {
        $descriptionOfElementsArray = explode(",", $descriptionOfElements);
        return  $descriptionOfElementsArray;

    }

    public function attachEquipment($report, $request)
    {
        foreach($request['equipment_id'] as $equipment_id)
        {

            $report->equipment()->attach($equipment_id);

        }
        return;
    }

    public function attachTrigger($report, $request)
    {
        foreach($request['trigger_id'] as $trigger_id)
        {

            $report->trigger()->attach($trigger_id);

        }

        return;
    }

    public function attachSinalization($report, $request)
    {
        foreach($request['sinalization_id'] as $sinalization_id)
        {

            $report->sinalization()->attach($sinalization_id);

        }
        return;
    }

    public function attachLighting($report, $request)
    {
        foreach($request['lighting_id'] as $lighting_id)
        {

            $report->lighting()->attach($lighting_id);

        }
        return;
    }

    public function attachBomb($report, $request)
    {
        foreach($request['bomb_id'] as $bomb_id)
        {

            $report->bomb()->attach($bomb_id);

        }
        return;
    }

    public function attachHydrant($report, $request)
    {
        foreach($request['hydrant_id'] as $hydrant_id)
        {

            $report->hydrant()->attach($hydrant_id);

        }
        return;
    }


    public function attachRecomendation($report, $request)
    {
        foreach($request['recomendation_id'] as $recomendation_id)
        {

            $report->recomendation()->attach($recomendation_id);

        }
        return;
    }

    public function attachEndOfReport($report, $request)
    {
        $request['report_id'] = $report->id;
        EndOfReport::create($request->all());
        return;
    }

    public function aditionalRequest($request)
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
        $request['conclusion_image_lighting_1'] = $this->uploadFiles($request['conclusion_image_1_lighting']);
        $request['conclusion_image_lighting_2'] = $this->uploadFiles($request['conclusion_image_2_lighting']);
        $request['conclusion_image_bomb_1'] = $this->uploadFiles($request['conclusion_image_1_bomb']);
        $request['conclusion_image_bomb_2'] = $this->uploadFiles($request['conclusion_image_2_bomb']);
        $request['conclusion_image_hydrant_1'] = $this->uploadFiles($request['conclusion_image_1_hydrant']);
        $request['conclusion_image_hydrant_2'] = $this->uploadFiles($request['conclusion_image_2_hydrant']);
        $request['end_of_report_signature'] = $this->uploadFiles($request['conclusion_signature']);
        $request['footer_logo_1'] = $contractedCompany->logo;
        $request['footer_logo_2'] = $contractedCompany->footer_logo_1;
        $request['footer_logo_3'] = $contractedCompany->footer_logo_2;
        $request['footer_logo_4'] = $contractedCompany->footer_logo_3;
        $request['footer_logo_5'] = $contractedCompany->footer_logo_4;
        $request['footer_address'] = $contractedCompany->address;
        $request['footer_site'] = $contractedCompany->footer_site;
        $request['footer_social_reason'] = $contractedCompany->footer_social_reason;
        $request['footer_phone'] = $contractedCompany->phone;

        return;
    }

    public function showReportAditionalItens($report)
    {
        $companyContracted = $report->company;
        $monthOfTheGoal = $this->getMonth($report->data_goals);
        $equipments = $report->equipment;
        $triggers = $report->trigger;
        $sinalizations = $report->sinalization;
        $lightings = $report->lighting;
        $bombs = $report->bomb;
        $hydrants = $report->hydrant;
        $recomendations = $report->recomendation;
        $endOfReport = $report->endOfReport;

        $descriptionOfElements = $this->getDescriptionOfElements($report->description_of_elements);
        $descriptionOfElementSinalizations = $this->getDescriptionOfElements($report->description_of_elements_sinalization);
        $descriptionOfElementLightings = $this->getDescriptionOfElements($report->description_of_elements_lighting);
        $descriptionOfElementBombs = $this->getDescriptionOfElements($report->description_of_elements_bomb);
        $descriptionOfElementHydrants = $this->getDescriptionOfElements($report->description_of_elements_hydrant);

        // for document number
        $codeNumberForDocumentNumber = $this->getCodeNumber($report);
        $yearNumberForDocumentNumber = $this->getYearNumber($report);
        $companyNameForDocumentNumber = $this->getCompanyName($report);
        return array(
                        $companyContracted,
                        $codeNumberForDocumentNumber,
                        $yearNumberForDocumentNumber,
                        $companyNameForDocumentNumber,
                        $monthOfTheGoal,
                        $equipments,
                        $triggers,
                        $sinalizations,
                        $lightings,
                        $descriptionOfElementLightings,
                        $descriptionOfElementSinalizations,
                        $descriptionOfElements,
                        $bombs,
                        $descriptionOfElementBombs,
                        $hydrants,
                        $descriptionOfElementHydrants,
                        $recomendations,
                        $endOfReport,
                );
    }
}
