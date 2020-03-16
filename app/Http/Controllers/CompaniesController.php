<?php

namespace App\Http\Controllers;

use App\Unity;
use App\Equipment;
use App\Bomb;
use App\Hydrant;
use App\Sinalization;
use App\Trigger;
use App\Lighting;
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
        $equipments = Equipment::all();
        $bombs = Bomb::all();
        $hydrants = Hydrant::all();
        $sinalizations = Sinalization::all();
        $triggers = Trigger::all();
        $lightings = Lighting::all();
        return view('dashboard.companies.addUnity',compact('equipments','bombs',
                                                            'hydrants','sinalizations',
                                                            'triggers','lightings'));
    }

    public function storeUnities(UnitiesRequest $request)
    {

        $unity = Unity::create($request->all());
        $this->attachBomb($unity, $request);
        $this->attachEquipment($unity, $request);
        $this->attachTrigger($unity, $request);
        $this->attachSinalization($unity, $request);
        $this->attachLighting($unity, $request);
        $this->attachHydrant($unity, $request);
       

        return redirect()->back()->with(['message' => 'Unidade cadastrada com sucesso']);

    }

}
