<?php

namespace App\Http\Controllers;

use App\Models\ThemeOptions;
use Illuminate\Http\Request;
use App\Models\aboutus\Affiliationmembershop;
class FrontendController extends Controller
{

    public function companyprofile()
    {$seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.aboutus.company-profile',compact('seeting'));
    }
    public function meetourteam()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.aboutus.meetourteam',compact('seeting'));
    }
    public function affiliation(Request $request)
    {
        $seeting = ThemeOptions::findOrFail(1);
        $affiliationdata = Affiliationmembershop::find($request->id);
        return view('frontend.pages.aboutus.affiliation',compact('seeting','affiliationdata'));
    }
    public function enlistment()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.aboutus.enlistment',compact('seeting'));
    }
    public function membership()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.aboutus.membership',compact('seeting'));
    }
    public function auditassurance()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.auditassurance',compact('seeting'));
    }
    public function taxationvat()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.taxationvat',compact('seeting'));
    }
    public function advisory()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.advisory',compact('seeting'));
    }
    public function secretariallicensingcompliance()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.secretariallicensingcompliance',compact('seeting'));
    }
    public function businessservice()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.businessservice',compact('seeting'));
    }
    public function humanresource()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.humanresource',compact('seeting'));
    }

    public function trainingdevelopment()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.trainingdevelopment',compact('seeting'));
    }
    // client menu page start
    public function financialinstitutions()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.client.financialinstitutions',compact('seeting'));
    }
    public function listedcompanies()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.client.listedcompanies',compact('seeting'));
    }
    public function internationalclients()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.client.internationalclients',compact('seeting'));
    }
    public function japaneseclient()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.client.japaneseclient',compact('seeting'));
    }
    public function newsletter()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.media.newsletter',compact('seeting'));
    }
    public function blog()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.media.blog',compact('seeting'));
    }
    public function publications()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.media.publications',compact('seeting'));
    }
    public function gallery()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.media.gallery',compact('seeting'));
    }
    public function event()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.media.event',compact('seeting'));
    }
    public function professional()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.career.professional',compact('seeting'));
    }
    public function articleship()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.career.articleship',compact('seeting'));
    }
    public function regulators()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.regulators',compact('seeting'));
    }
    public function contactus()
    {
        $seeting = ThemeOptions::findOrFail(1);
        return view('frontend.contactus',compact('seeting'));
    }

}
