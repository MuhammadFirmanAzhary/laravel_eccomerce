<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\View\View;

class HomeController extends Controller
{
 
    public function index(): View
    {  
        $events= $this->fetchEvent();
        $categories = $this->fetchCategory();
        dd($categories);
        return view('frontend.index');
    }

   //fetch data event
   private function fetchEvent(){
    $category = request()->query('category');
    $event = Event::upcoming();
   
    //limit event 6
    if(!request()->query('all_events')){
        $event->limit(6);
    }

    if($category){
        $event->withCategory($category);
    }
    return $event->get();
   }
   

   //fetch data category
   private function fetchCategory(){
    $categories =Category::sortByMostEvents();
     //limit category 4
     if(!request()->query('all_categories')){
        $categories->limit(4);
    }
    return $categories->get();
   }
}