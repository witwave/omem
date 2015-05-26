<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$members = Member::all();

		return view('members.index', compact('members'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('members.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$member = new Member();

		$member->id = $request->input("id");
        $member->pid = $request->input("pid");
        $member-> openid = $request->input(" openid");
        $member-> wechat = $request->input(" wechat");
        $member-> qq = $request->input(" qq");
        $member-> avatar = $request->input(" avatar");
        $member-> name = $request->input(" name");
        $member-> nickname = $request->input(" nickname");
        $member-> sex = $request->input(" sex");
        $member-> email = $request->input(" email");
        $member-> company_name = $request->input(" company_name");
        $member-> company_site = $request->input(" company_site");
        $member-> position = $request->input(" position");
        $member-> industry = $request->input(" industry");
        $member-> born_date = $request->input(" born_date");
        $member-> born_location = $request->input(" born_location");
        $member-> live_city = $request->input(" live_city");
        $member-> address = $request->input(" address");
        $member-> sign = $request->input(" sign");
        $member-> mark = $request->input(" mark");
        $member-> deleted_at = $request->input(" deleted_at");

		$member->save();

		return redirect()->route('members.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$member = Member::findOrFail($id);

		return view('members.show', compact('member'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$member = Member::findOrFail($id);

		return view('members.edit', compact('member'));
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
		$member = Member::findOrFail($id);

		$member->id = $request->input("id");
        $member->pid = $request->input("pid");
        $member-> openid = $request->input(" openid");
        $member-> wechat = $request->input(" wechat");
        $member-> qq = $request->input(" qq");
        $member-> avatar = $request->input(" avatar");
        $member-> name = $request->input(" name");
        $member-> nickname = $request->input(" nickname");
        $member-> sex = $request->input(" sex");
        $member-> email = $request->input(" email");
        $member-> company_name = $request->input(" company_name");
        $member-> company_site = $request->input(" company_site");
        $member-> position = $request->input(" position");
        $member-> industry = $request->input(" industry");
        $member-> born_date = $request->input(" born_date");
        $member-> born_location = $request->input(" born_location");
        $member-> live_city = $request->input(" live_city");
        $member-> address = $request->input(" address");
        $member-> sign = $request->input(" sign");
        $member-> mark = $request->input(" mark");
        $member-> deleted_at = $request->input(" deleted_at");

		$member->save();

		return redirect()->route('members.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$member = Member::findOrFail($id);
		$member->delete();

		return redirect()->route('members.index')->with('message', 'Item deleted successfully.');
	}

}
