<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visits;

class VisitController extends Controller
{
    public function auto_add_visitor (Request $request){
        $visits = new Visits;
        $visits->save();
        return view('client.index');
    }

}
