<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Company;
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
        $descriptionOfElementsWithOutSpace = str_replace(' ', '', $descriptionOfElements);
        $descriptionOfElementsArray = explode(",", $descriptionOfElementsWithOutSpace);
        return  $descriptionOfElementsArray;

    }
}
