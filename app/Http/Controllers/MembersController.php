<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Member;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::getAll();

        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request)
    {
        return Member::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Member $member
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        $member->load('accounts');

        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Member $member
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Member              $member
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Member $member
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
    }
}
