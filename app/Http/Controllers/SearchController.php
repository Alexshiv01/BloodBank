<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donor;

class SearchController extends Controller
{

  public function search(Request $request)
  {
    $donors = donor::all();

    return view('pages.search', [
      'donors' => $donors
    ]);
  }

  public function search_data(Request $request)
  {
    
    $city = $request->city;
    $blood_group = $request->blood_group;
    if ($city != " ") {
      //where 
      $donors = donor::where('city', 'LIKE', "%$city%")->where('blood_group', 'LIKE', "%$blood_group%")->get();
    } else {

      $donors = donor::all();
    }


    return view('pages.search', [
      'donors' => $donors
    ]);
  }
}
