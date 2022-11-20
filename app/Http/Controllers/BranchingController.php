<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchingController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function output(request $request)
    {
        $a = $request->input('a');
        $n = $request->input('n');
        $option = $request->input('option');
        switch ($option) {
            case 'arit':
                $b = $request->input('b');
                $result = $a + ($n - 1) * $b;
                return view('arithmetic', [
                    'result' => ($result)
                ]);
            case 'geo':
                $r = $request->input('b');
                $n = $n - 1;
                $result = $a * pow($r, $n);
                return view('geometry', [
                    'result' => ($result)
                ]);
            default:
                echo "Enter Input in http://127.0.0.1:8000/input";
        }
    }
}
