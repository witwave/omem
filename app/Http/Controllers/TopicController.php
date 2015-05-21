<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$topics = Topic::all();

		return view('topics.index', compact('topics'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('topics.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$topic = new Topic();

		$topic->title = $request->input("title");
        $topic->body = $request->input("body");
        $topic->cover = $request->input("cover");
        $topic->uid = $request->input("uid");
        $topic->pv = $request->input("pv");
        $topic->uv = $request->input("uv");
        $topic->user_count = $request->input("user_count");

		$topic->save();

		return redirect()->route('topics.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$topic = Topic::findOrFail($id);

		return view('topics.show', compact('topic'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$topic = Topic::findOrFail($id);

		return view('topics.edit', compact('topic'));
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
		$topic = Topic::findOrFail($id);

		$topic->title = $request->input("title");
        $topic->body = $request->input("body");
        $topic->cover = $request->input("cover");
        $topic->uid = $request->input("uid");
        $topic->pv = $request->input("pv");
        $topic->uv = $request->input("uv");
        $topic->user_count = $request->input("user_count");

		$topic->save();

		return redirect()->route('topics.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$topic = Topic::findOrFail($id);
		$topic->delete();

		return redirect()->route('topics.index')->with('message', 'Item deleted successfully.');
	}

}
