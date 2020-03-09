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
        $companies = Company::whereNull('tecnical_responsable')->get();
        return view('dashboard.companies.showCompanies', compact('companies'));

    }

    public function indexContractedCompany()
    {
        $companies = Company::whereNotNull('tecnical_responsable')->get();
        return view('dashboard.companies.showContractedCompany', compact('companies'));
    }

    public function createContractedCompany()
    {
        $unities = Unity::all();

        return view('dashboard.companies.addContractedCompany', compact('unities'));
    }

    public function storeContractedCompany(CompanyContractedRequest $request)
    {
        
        $request['logo'] = $this->uploadFiles($request->file('logoContractedCompany'));
        $request['footer_logo_1'] = $request['logo_footer_1'] ? $this->uploadFiles($request->file('logo_footer_1')) : null;
        $request['footer_logo_2'] = $request['logo_footer_2'] ? $this->uploadFiles($request->file('logo_footer_2')) : null;
        $request['footer_logo_3'] = $request['logo_footer_3'] ? $this->uploadFiles($request->file('logo_footer_3')) : null;
        $request['footer_logo_4'] = $request['logo_footer_4'] ? $this->uploadFiles($request->file('logoContractedCompany')) : null;

        $request['user_id'] = Auth::user()->id;
        $company = Company::create($request->all());

        return redirect()->back()->with(['message' => 'Empresa adicionada com sucesso']);
    }

    public function store(CompaniesRequest $request)
    {
        
        $request['logo'] = $this->uploadFiles($request->file('logoContractingCompany'));
        $request['user_id'] = Auth::user()->id;
        $company = Company::create($request->all());
        $this->attachUnity($request,$company);
        return redirect()->back()->with(['message' => 'Empresa adicionada com sucesso']);
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
