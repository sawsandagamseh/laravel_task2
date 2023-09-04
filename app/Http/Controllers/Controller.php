<?php

namespace App\Http\Controllers;
use App\Models\Capital;
use App\Models\Country;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index2(Request $request)
    {
        $cont = Country::find(2)->name;
  
        dd($cont);
    }
}
