<?php

namespace App\Http\Controllers\members;

use App\MemberRegistration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empId = session()->get('empId');
        $my_members = MemberRegistration::select('id', 'uid', 'first_name', 'last_name', 'dob', 'gender', 'house_no', 'village_or_rood_no',
            'post_office', 'sub_district', 'district', 'post_code', 'nid_or_birth_id', 'phone_number',
            'education_qualification', 'occupation', 'email', 'ref_id', 'key_id', 'photo')->where('ref_id', $empId)->paginate(10);
        return view('members.my_members')->with(compact('my_members', $my_members));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.member_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
