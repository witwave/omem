<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Meetup;
use Illuminate\Http\Request;

class MeetupController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $meetups = Meetup::all();

        return view('meetups.index', compact('meetups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('meetups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $meetup = new Meetup();
        $meetup->pv = 0;
        $meetup->uv = 0;
        $meetup->join_count = 0;
        $meetup->name = $request->input("name");
        $meetup->summary = $request->input("summary");
        $meetup->content = $request->input("content");
        $meetup->end_time = $request->input("end_time");
        $meetup->max_count = $request->input("max_count", 0);
        $meetup->online = $request->input("online", 0);
        $meetup->price = $request->input("price", 0);
        $meetup->mark = $request->input("mark", '');
        $meetup->save();

        return redirect()->route('meetups.index')->with('message', 'Item created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $meetup = Meetup::findOrFail($id);

        return view('meetups.show', compact('meetup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $meetup = Meetup::findOrFail($id);
        return view('meetups.edit', compact('meetup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $meetup = Meetup::findOrFail($id);

        $meetup->name = $request->input("name");
        $meetup->summary = $request->input("summary");
        $meetup->content = $request->input("content");
        $meetup->end_time = $request->input("end_time");
        $meetup->online = $request->input("online", 0);
        $meetup->price = $request->input("price", 0);
        $meetup->mark = $request->input("mark");
        $meetup->save();
        return redirect()->route('meetups.index')->with('message', 'Item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $meetup = Meetup::findOrFail($id);
        $meetup->delete();

        return redirect()->route('meetups.index')->with('message', 'Item deleted successfully.');
    }

}
