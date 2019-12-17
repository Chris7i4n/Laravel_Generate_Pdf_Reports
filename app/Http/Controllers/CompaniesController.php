<?php

namespace App\Http\Controllers;

use App\Unity;
use Illuminate\Http\Request;
use Storage;
use App\Company;
class CompaniesController extends Controller
{
    public function index()
    {
        $unities = Unity::all();
        return view('dashboard.companies.addCompany', compact('unities'));
    }

    public function store(Request $request)
    {
        $request['logo'] = $this->uploadFiles($request->file('logoContractedCompany'));

        $company = Company::create($request->all());
        $company->unity()->attach($request['unity_id']);

        return redirect()->back()->with(['message' => 'Empresa adicionada com sucesso']);
    }

    public function uploadFiles($file)
    {
        $fileUploaded = Storage::putFileAs('public/', $file , $file->getClientOriginalName());
        $fileNameExploaded = explode("/", $fileUploaded);
        $fileName = end($fileNameExploaded);
        return $fileName;
    }

    public function indexUnities()
    {
        return view('dashboard.companies.addUnity');
    }

    public function storeUnities(Request $request)
    {
        Unity::create($request->all());
        return redirect()->back()->with(['message' => 'Unidade cadastrada com sucesso']);

    }
}
