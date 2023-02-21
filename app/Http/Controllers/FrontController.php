<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\About;
use App\Models\Choose;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function about()
    {
        $about = About::all();

        return view('Front.about', compact('about'));
    }


    public function choose()
    {
        $choose = Choose::all();

        return view('Front.choose', compact('choose'));
    }

    public function services()
    {
        $services = Service::all();

        return view('Front.services', compact('services'));
    }
    public function team()
    {
        $teams = Team::all();

        return view('Front.team', compact('teams'));
    }
}
