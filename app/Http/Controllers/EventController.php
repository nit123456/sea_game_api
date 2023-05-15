<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events= Event::all();
        if($events->isNotEmpty()){
            return response()->json(['message'=>'There are all events.', 'data'=>$events],200);
        };
        return response()->json(['message'=>'There are no event.']);
    }

    // Search Event
    public function search( string $eventName){
        $events = Event::where('name', 'LIKE', '%'.$eventName.'%')->get();
        if($events->isNotEmpty()){
            return response()->json(['message'=>'Event name has found', 'data'=>$events],200);
        };
        return response()->json(['message'=>'Event name has not found!']);
    }

    // Get all detail of Event
    public function detailEvent($id){
        $events = Event::leftJoin('competitions', 'events.id', '=', 'competitions.event_id')
                        ->leftJoin('teams', 'competitions.id','=','teams.competition_id')
                        ->select('events.*', 'competitions.*', 'teams.*')
                        ->where('events.id', $id)
                        ->get();
        if($events->isNotEmpty()){
            return response()->json(['message'=>'There are all events.', 'data'=>$events],200);
        };
        return response()->json(['message'=>'There are no event!']);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
