<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = Event::all();

		return view('events.index', compact('events'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('events.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$event = new Event();

		$event->id = $request->input("id");
        $event->member_id = $request->input("member_id");
        $event->type = $request->input("type");
        $event->content = $request->input("content");
        $event->mark = $request->input("mark");

		$event->save();

		return redirect()->route('events.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$event = Event::findOrFail($id);

		return view('events.show', compact('event'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$event = Event::findOrFail($id);

		return view('events.edit', compact('event'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$event = Event::findOrFail($id);

		$event->id = $request->input("id");
        $event->member_id = $request->input("member_id");
        $event->type = $request->input("type");
        $event->content = $request->input("content");
        $event->mark = $request->input("mark");

		$event->save();

		return redirect()->route('events.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$event = Event::findOrFail($id);
		$event->delete();

		return redirect()->route('events.index')->with('message', 'Item deleted successfully.');
	}

}
