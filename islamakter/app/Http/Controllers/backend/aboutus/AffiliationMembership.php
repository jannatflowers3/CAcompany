<?php

namespace App\Http\Controllers\backend\aboutus;

use App\Http\Controllers\Controller;
use App\Models\aboutus\Affiliationmembershop;
use Illuminate\Http\Request;

class AffiliationMembership extends Controller
{
   public function affiliationindex(){
    $affiliation = Affiliationmembershop::all();
    return view('backend.aboutuspages.affiliation.index',compact('affiliation'));
   }
   public function affiliationcreate(){
    return view('backend.aboutuspages.affiliation.create');
   }
   public function affiliationstore(Request $request){
    $affiliation = new Affiliationmembershop();
    $affiliation->affiliation_title = $request->affiliation_title;
    $affiliation->affiliation_subheading = $request->affiliation_subheading;
    $affiliation->affiliation_heading = $request->affiliation_heading;
    $affiliation->affiliation_paragraph1 = $request->affiliation_paragraph1;
    $affiliation->affiliation_paragraph2 = $request->affiliation_paragraph2;
    if ($request->file('affiliation_image')) {
        $imageName = time() . '.' . $request->affiliation_image->extension();
        $request->affiliation_image->move(public_path('/backendsite/images/aboutus/'), $imageName);
        $affiliation->affiliation_image = $imageName;
    } else {
        unset($affiliation->affiliation_image);
    }

    $affiliation->save();

    return redirect()->route('affiliation.index');
   }

   public function affiliationedit($id)
   {
       $affiliationedite =  Affiliationmembershop::find($id);
       return view('backend.aboutuspages.affiliation.edit',compact('affiliationedite'));
   }

   public function affiliationupdate(Request $request)
   {
       $affiliation =  Affiliationmembershop::find($request->id);

       $affiliation->affiliation_title = $request->affiliation_title;
       $affiliation->affiliation_subheading = $request->affiliation_subheading;
       $affiliation->affiliation_heading = $request->affiliation_heading;
       $affiliation->affiliation_paragraph1 = $request->affiliation_paragraph1;
       $affiliation->affiliation_paragraph2 = $request->affiliation_paragraph2;
       if ($request->file('affiliation_image')) {
           $imageName = time() . '.' . $request->affiliation_image->extension();
           $request->affiliation_image->move(public_path('/backendsite/images/aboutus/'), $imageName);
           $affiliation->affiliation_image = $imageName;
       } else {
           unset($affiliation->affiliation_image);
       }

       $affiliation->save();

       return redirect()->route('affiliation.index');
   }
   public function affiliationdestroy($id)
   {
      $deleteslider = Affiliationmembershop::find($id);
      $deleteslider->delete();
      return redirect()->route('affiliation.index');

   }

}
