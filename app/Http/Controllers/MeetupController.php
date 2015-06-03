<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use App\Meetup;
use Illuminate\Http\Request;
use App\Joiner;
use Session;

class MeetupController extends Controller
{

    public function main()
    {
        $meetups = Meetup::all()->sortByDesc('created_at');
        return view('meetup.index', compact('meetups'));
    }

    public function detail($id)
    {
        $meetup = Meetup::findOrFail($id);
        return view('meetup.detail', compact('meetup'));
    }

    /**
     * 前台用户报名参家活动
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function join(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:10',
            'mobile' => 'required|numeric|digits:11'
        ]);
        $joiner = new Joiner();
        $joiner->meetup_id = $id;
        $joiner->member_id = Session::get('member_id', 0);
        $joiner->name = $request->input("name");
        $joiner->mobile = $request->input("mobile");
        $joiner->meetup_name = $request->input("meetup_name");
        $joiner->signed = 0;
        if ($joiner->save())
            return Redirect::back()->with('msg', '报名成功，请您准时参加');
        else
            return Redirect::back()->withInput();
    }

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
        $this->validate($request, [
            'title' => 'required|max:120',
            'summary' => 'required|max:500',
            'content' => 'required|max:4000',
            'end_time' => 'required|date',
            'max_count' => 'sometimes|required|numeric',
            'price' => 'sometimes|required|numeric'
        ]);

        $meetup = new Meetup();
        $meetup->pv = 0;
        $meetup->uv = 0;
        $meetup->join_count = 0;
        $meetup->name = $request->input("title");
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
        $this->validate($request, [
            'title' => 'required|max:120',
            'summary' => 'required|max:500',
            'content' => 'required|max:4000',
            'end_time' => 'required|date',
            'max_count' => 'sometimes|required|numeric',
            'price' => 'sometimes|required|numeric'
        ]);
        $meetup = Meetup::findOrFail($id);
        $meetup->name = $request->input("title");
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
