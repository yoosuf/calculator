<?php

namespace Finetick\Calculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    //
    public function add($a, $b){
        $result = $a + $b;
        return view('calculator::index', compact('result'));
    }

    public function subtract($a, $b){
        $result = $a - $b;
        return view('calculator::index', compact('result'));
    }
}
