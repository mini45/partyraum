<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use MaddHatter\LaravelFullcalendar\Calendar;
use MaddHatter\LaravelFullcalendar\IdentifiableEvent;

class Event extends Model implements IdentifiableEvent {
    //
    protected $table = 'events';

    protected $fillable = ['start','end','user_id','title','description','allDay'];

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function isAllDay()
    {
        return $this->allDay;
    }

//    public function getEventOptions()
//    {
//        return [
//            'title' => $this->title,
//            'allDay' => $this->allDay,
//            'start' => $this->start,
//            'end' => $this->end,
//            'id' => $this->id
//        ];
//    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function calendarEvent()
    {
        return Calendar::event($this->title,$this->allDay,$this->start,$this->end,$this->id);
    }
    
}
