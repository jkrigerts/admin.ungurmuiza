<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where("published", true)
                         ->orderByRaw("-order_number DESC")
                        //  ->orderByRaw("-date ASC")
                         ->get();

        return $events;
    }
    public function show($id)
    {
        $event = Event::where("id", $id)
                         ->first();
        return $event;
    }
}
