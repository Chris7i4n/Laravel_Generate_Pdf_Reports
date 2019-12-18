<?php

namespace App\Http\Controllers;

use App\Unity;
use Illuminate\Http\Request;
use Storage;
use App\Company;
use App\Http\Requests\CompaniesRequest;
use App\Http\Requests\CompanyContractedRequest;
use App\Http\Requests\UnitiesRequest;
use Auth;
class CompaniesController extends Controller
{
    public function create()
    {
        $unities = Unity::all();
        return view('dashboard.companies.addCompany', compact('unities'));
    }

    public function index()
    {
        $companies = Company::where('user_id', Auth::user()->id)->whereNull('tecnical_responsable')->get();
        return view('dashboard.companies.showCompanies', compact('companies'));

    }

    public function indexContractedCompany()
    {
        $company = Company::where('user_id', Auth::user()->id)->whereNotNull('tecnical_responsable')->first();
        return view('dashboard.companies.showContractedCompany', compact('company'));
    }

    public function createContractedCompany()
    {
        $unities = Unity::all();

        return view('dashboard.companies.addContractedCompany', compact('unities'));
    }

    public function storeContractedCompany(CompanyContractedRequest $request)
    {
        if(Company::where('user_id', Auth::user()->id)->whereNotNull('tecnical_responsable')->first())
        {
            return redirect()->back()->with(['errorMessage' => 'Empresa contratada já existe']);
        }
        $request['logo'] = $this->uploadFiles($request->file('logoContractedCompany'));
        $request['user_id'] = Auth::user()->id;
        $company = Company::create($request->all());

        return redirect()->back()->with(['message' => 'Empresa adicionada com sucesso']);
    }

    public function store(CompaniesRequest $request)
    {
        $request['logo'] = $this->uploadFiles($request->file('logoContractingCompany'));
        $request['user_id'] = Auth::user()->id;
        $company = Company::create($request->all());
        foreach($request['unity_id'] as $unity_id)
        {

            $company->unity()->attach($unity_id);

        }

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

    public function storeUnities(UnitiesRequest $request)
    {
        Unity::create($request->all());
        return redirect()->back()->with(['message' => 'Unidade cadastrada com sucesso']);

    }
}
