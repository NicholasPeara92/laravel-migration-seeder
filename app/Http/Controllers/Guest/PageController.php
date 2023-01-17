<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    $trains = Train::whereDate('departure_time', date('y-m-d'))->get();
    
    return view('homepage', compact('trains'));
  }
}
