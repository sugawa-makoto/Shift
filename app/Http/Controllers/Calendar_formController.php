<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class Calendar_formController extends Controller
{
    public function getCalendarDates(){
        
        return view('top');
    }
}
