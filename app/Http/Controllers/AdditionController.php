<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdditionController extends Controller
{
    public function index(){
       
        
        return view('sum.addition');
    }
    
    public function result(Request $request){

        $a = $request->a;

        $b = $request->b;

        $sum = $a + $b;

        return view('sum.addAnswer', compact('a','b','sum'));
    }

    public function multi(){
        
        return view('multiply.multiply');
    }
    
    public function multiply(Request $request){

        $a = $request->a;

        $b = $request->b;

        $multi = $a * $b;
        
        return view('multiply.result', compact('a','b','multi'));
    }

    public function racine(){
        
        return view('sqrt.squareRoot');
    }
    
    public function squareRootOf(Request $request){
        $number = $request->a;
        $squareRoot = sqrt($number);
        return view('sqrt.result',compact('number', 'squareRoot'));
    }
}
