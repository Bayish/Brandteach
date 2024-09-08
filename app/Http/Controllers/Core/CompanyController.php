<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyContactLink;
use App\Models\CompanyContentMediaLink;
use App\Models\ContactLink;
use App\Models\Country;
use App\Models\Membership;
use App\Models\SocialMedia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $companies = Company::all();

        return Inertia::render('Core/Company/list', [
            'user' => $user,
            'companies' => $companies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        $memberships = Membership::all();
        $countries = Country::all();
        $socialMedias = SocialMedia::all();

        return Inertia::render('Core/Company/create', [
            'user' => $user,
            'memberships' => $memberships,
            'socialMedias' => $socialMedias,
            'countries' => $countries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user();

//        $request->validate([
//            'name' => 'required|string',
//            'email' => 'required|string',
//            'description' => 'required|string',
//            'active' => 'required|boolean',
//            'membership_id' => 'required',
//            'membership_until' => 'required',
//        ]);

        $imagePath = $request->file('logo')->storeAs("logos", $request->file('logo')->getClientOriginalName(), 'public');

        $company = Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'logo' => $imagePath,
            'description' => $request->description,
            'active' => $request->active,
            'membership_id' => $request->membership_id,
            'membership_until' => Carbon::parse($request->membership_until),
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'street' => $request->street,
            'house_number' => $request->house_number,
            'phone_number' => $request->phone_number,
        ]);

        foreach ($request->contactLinks as $contact) {
            CompanyContactLink::create([
                'company_id' => $company->id,
                'social_media_id' => $contact['social_media_id'],
                'link' => $contact['link'],
            ]);
        }

        //TODO: here try to add all content files

        foreach ($request->file('content_files') as $image) {
            $imagePath = $image->storeAs(
                "contents/{$company->name}",
                $image->getClientOriginalName(),
                'public'
            );

            $companyContent = new CompanyContentMediaLink();
            $companyContent->company_id = $company->id;
            $companyContent->path = $imagePath;
            $companyContent->save();
        }

        $companies = Company::all();

        return Inertia::render('Core/Company/list', [
            'user' => $user,
            'companies' => $companies,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        $user = auth()->user();
        $memberships = Membership::all();
        $countries = Country::all();
        $socialMedias = SocialMedia::all();

        return Inertia::render('Core/Company/edit', [
            'user' => $user,
            'memberships' => $memberships,
            'socialMedias' => $socialMedias,
            'countries' => $countries,
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
