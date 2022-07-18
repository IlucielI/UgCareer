<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class EventsController extends Controller
{
  public function events()
  {
    return view('frontend.pages.events.events');
  }
  public function subevent()
  {
    return view('frontend.pages.events.SubEvent');
  }
  public function eventdetails()
  {
    return view('frontend.pages.events.EventDetails');
  }
  public function notfound()
  {
    return view('frontend.pages.events.notfound');
  }
}
