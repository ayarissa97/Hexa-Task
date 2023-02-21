<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\About;
use App\Models\Choose;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        $services = Service::all();
        $about = About::all();
        $choose = Choose::all();
        $teams = Team::all();
        $contact = Contact::all();
        return view('Front.index', compact('settings','services','about', 'choose', 'teams','contact'));
    }


}
