<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    $trains = Train::whereDay('departure_time', date('d'))->get();
    
    return view('homepage', compact('trains'));
  }
}
