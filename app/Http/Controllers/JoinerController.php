<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Joiner;
use Illuminate\Http\Request;

class JoinerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$joiners = Joiner::all();

		return view('joiners.index', compact('joiners'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('joiners.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$joiner = new Joiner();

		$joiner->meetup_id = $request->input("meetup_id");
        $joiner->member_id = $request->input("member_id");
        $joiner->name = $request->input("name");
        $joiner->mobile = $request->input("mobile");
        $joiner->meetup_name = $request->input("meetup_name");
        $joiner->signed = $request->input("signed");
        $joiner->signed_time = $request->input("signed_time");

		$joiner->save();

		return redirect()->route('joiners.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$joiner = Joiner::findOrFail($id);

		return view('joiners.show', compact('joiner'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$joiner = Joiner::findOrFail($id);

		return view('joiners.edit', compact('joiner'));
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
		$joiner = Joiner::findOrFail($id);

		$joiner->meetup_id = $request->input("meetup_id");
        $joiner->member_id = $request->input("member_id");
        $joiner->name = $request->input("name");
        $joiner->mobile = $request->input("mobile");
        $joiner->meetup_name = $request->input("meetup_name");
        $joiner->signed = $request->input("signed");
        $joiner->signed_time = $request->input("signed_time");

		$joiner->save();

		return redirect()->route('joiners.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$joiner = Joiner::findOrFail($id);
		$joiner->delete();

		return redirect()->route('joiners.index')->with('message', 'Item deleted successfully.');
	}

}
