<?php

namespace App\Http\Controllers\backend;

use App\TeamSetup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = TeamSetup::select('id', 'emp_id', 'reference_id')->paginate(10);
        return view('backend.employee.show_team')
            ->with(compact('teams', $teams));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.employee.team_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'emp_id' => 'required',
            'reference_id' => 'required',
        ]);

        TeamSetup::create([
            'emp_id' => $request->input('emp_id'),
            'reference_id' => $request->input('reference_id'),
        ]);

        session()->flash('message', 'Team Setup Complete');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teams = TeamSetup::select('id', 'emp_id', 'reference_id')->find($id);
        return view('backend.employee.edit_team')
            ->with(compact('teams', $teams));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'emp_id' => 'required',
            'reference_id' => 'required',
        ]);

        TeamSetup::find($id)->update([
            'emp_id' => $request->input('emp_id'),
            'reference_id' => $request->input('reference_id'),
        ]);

        session()->flash('message', 'Team Setup Updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TeamSetup::find($id)->delete();
        session()->flash('message', 'Team Member Deleted');
        return redirect()->back();
    }
}
