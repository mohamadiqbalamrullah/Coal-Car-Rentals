<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  
  public function dashboard()
  {
    if(Auth::user()->name == 'Admin'){
      $datas = Rental::all();
      return view('/dashboard/dashboard', compact('datas'));
    }
    elseif(Auth::user()->name == 'Stakeholder'){
      $datas = Rental::where('status','0')->get();
      $items = Rental::where('status','1')->get();
      if($items){
        return view('/dashboard/dashboard', compact('datas','items'));
      }
      else {
        $items = Rental::where('status','2')->get();
        return view('/dashboard/dashboard', compact('datas','items'));
      }
    }
    else{
      $datas = Rental::where('status','1')->get();
      $items = Rental::where('status','2')->get();
      return view('/dashboard/dashboard', compact('datas','items'));
    }
      
  }
}
