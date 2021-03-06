<?php

namespace App\Http\Controllers;

use App\Company;
use App\Project;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', ['companies'=> $companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //

        $company = Company::find($company-> id);
        return view('companies.show', ['company'=> $company]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //

        $company = Company::find($company->id);
        return view('companies.edit', ['company'=>$company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
        $companyUpdate = Company::where('id', $company->id)->update(
            [
                'name'=> $request->input('name'),
                'description'=>$request->input('description')

                ]);

        if ($companyUpdate){
            return redirect()->route('companies.show', ['company'=>$company->id])->with('success', 'Company Updated Successfully!');
        }

        return back()->wwithInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //

        $findCompany = Company::find( $company->id);
        if($findCompany->delete()){

            //redirect
            return redirect()->route('companies.index')
                ->with('success' , 'Company deleted successfully');
        }
        return back()->withInput()->with('error' , 'Company could not be deleted');


    }
}
