<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    // Buy a Ticket
    public function buyTicket(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'event_id' => 'required|integer|exists:events,id',
                'zone_id' => 'required|integer|exists:zones,id',
            ]
        );
        if ($validator->fails()) {
            return $validator->errors();
        } else {

            $event = Event::find($request['event_id']);
            $numberOfTicket = Ticket::select('tickets.*')
                ->join('events', 'events.id', '=', 'tickets.event_id')
                ->where('tickets.event_id', '=', $request['event_id'])->get()->count();
            if($numberOfTicket >= intval($event['ticket_number'])){
                return 'ticket fully';
            }else{
                Ticket::create($validator->validated());
                return response()->json(['message'=>'Ticket has been created.'],200);
            }
        }
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
