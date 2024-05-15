<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request, $slug)
    {
        $event =Event::fetch($slug);
        return view('frontend.details',compact('event'));
    }
}
