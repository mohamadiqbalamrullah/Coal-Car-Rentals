<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
class DashboardController extends Controller
{
  
  public function dashboard()
  {
    $datas = Rental::all();
    return view('/dashboard/dashboard', compact('datas'));
  }
}
