@extends('layouts.app')

@section('script')
    {!! $calendar->script() !!}
    <script>
        function eventClick(date, jsEvent, view){
            console.log('eventClick',date, jsEvent, view);
        }

        function dayClick(date, jsEvent, view){
            console.log('dayClick',date, jsEvent, view);
        }

        function selectClick(start, end, jsEvent, view){
            console.log('select',start, end);
        }
        function eventDrop(event, delta, revertFunc, jsEvent, ui, view){
            console.log('eventDrop',event, delta, revertFunc, jsEvent, ui, view);
        }
        function eventResize(event, delta, revertFunc, jsEvent, ui, view){
            console.log('eventResize',event, delta, revertFunc, jsEvent, ui, view);
        }
    </script>
@endsection
@section('style')
@endsection

@section('content')
    {!! $calendar->calendar() !!}
@endsection