<?php

namespace App\Http\Controllers;
use App\Train;


class TrainController extends Controller
{
    public function index() {

        $trains = Train::where('orario_di_partenza', 'LIKE','%2022-10-12%')->get();
        // dd($trains);
        return view('show', compact('trains'));
    }
}


