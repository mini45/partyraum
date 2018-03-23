<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Model\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use MaddHatter\LaravelFullcalendar\Calendar;
use MaddHatter\LaravelFullcalendar\EventCollection;


//use Calendar;

class CalendarController extends Controller
{
    public function index()
    {

//        dd(\Auth::id());
//        $start = Carbon::now();
//        $end = Carbon::now();
//        $end = $end->addDay(1);
//
//        Event::create([
//            'start' => ''.$start,
//            'end' => ''.$end,
//            'title' => 'db1',
//            'allDay' => true,
//            'user_id' => \Auth::id(),
//        ]);


        $eventCollection = new EventCollection();
        $events = Event::all();
        foreach ($events as $e){
            $eventCollection->push($e->calendarEvent());
        }


        $calendar = new Calendar(view(), $eventCollection);
        $calendar->setCallbacks(
            [ //set fullcalendar callback options (will not be JSON encoded)
                'dayClick' => 'dayClick',
                'eventClick' => 'eventClick',
                'select' => 'selectClick',
                'eventDrop' => 'eventDrop',
                'eventResize' => 'eventResize'
            ]
        )->setOptions([
            'editable'=> true,
            'selectable'=> true,
            'themeSystem' => 'standard',
        ]);


        $x = 1;
//        $eloquentEvent = EventModel::first(); //EventModel implements MaddHatter\LaravelFullcalendar\Event

//        $calendar = new Calendar('calendar', $events);
//        $calendar->addEvents()
//        $calendar = Calendar::addEvents($events) //add an array with addEvents
//        ->setOptions([ //set fullcalendar options
//            'firstDay' => 1
//        ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
//            'viewRender' => 'function() {alert("Callbacks!");}'
//        ]);


        return view('calendar', compact('calendar'));
    }
}