<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        return view('pdam.index');
    }

    public function jumlah(Request $request)
    {
        $guna = $request->input('guna');
        $tagih = 0;

        if ($guna <= 25) {
            $tagih = $guna * 150;
        } elseif ($guna <= 50) {
            $tagih = (25 * 150) + (($guna - 25) * 170);
        } elseif ($guna <= 75) {
            $tagih = (25 * 150) + (25 * 170) + (($guna - 50) * 210);
        } else {
            $tagih = (25 * 150) + (25 * 170) + (25 * 210) + (($guna - 75) * 250);
        }

        return view('pdam.index', [
            'guna' => $guna,
            'tagih' => $tagih
        ]);
    }
}
