<?php

namespace App\Http\Controllers\backend;

use App\Positions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = Positions::select('id', 'position_name', 'min_member', 'min_hcp', 'commission', 'team_commission',
            'life_fund_commission', 'company_profit_share_commission', 'description')->paginate();
        return view('backend.position.index')->with(compact('positions', $positions));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.position.add');
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
            'position_name' => 'required|string',
            'min_member' => 'required|numeric',
            'min_hcp' => 'required|numeric',
            'commission' => 'required|numeric',
            'team_commission' => 'required|numeric',
            'life_fund_commission' => 'required|numeric',
            'company_profit_share_commission' => 'required|numeric',
        ]);

        Positions::create([
            'position_name' => trim($request->input('position_name')),
            'min_member' => $request->input('min_member'),
            'min_hcp' => $request->input('min_hcp'),
            'commission' => $request->input('min_hcp'),
            'team_commission' => $request->input('team_commission'),
            'life_fund_commission' => $request->input('life_fund_commission'),
            'company_profit_share_commission' => $request->input('life_fund_commission'),
            'description' => trim($request->input('description'))
        ]);

        session()->flash('message', 'Positions Created Successfully');
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
        $positions = Positions::select('id', 'position_name', 'min_member', 'min_hcp', 'commission', 'team_commission',
            'life_fund_commission', 'company_profit_share_commission', 'description')->find($id);
        return view('backend.position.edit')->with(compact('positions', $positions));
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
            'position_name' => 'required|string',
            'min_member' => 'required|numeric',
            'min_hcp' => 'required|numeric',
            'commission' => 'required|numeric',
            'team_commission' => 'required|numeric',
            'life_fund_commission' => 'required|numeric',
            'company_profit_share_commission' => 'required|numeric',
        ]);

        Positions::find($id)->update([
            'position_name' => trim($request->input('position_name')),
            'min_member' => $request->input('min_member'),
            'min_hcp' => $request->input('min_hcp'),
            'commission' => $request->input('commission'),
            'team_commission' => $request->input('team_commission'),
            'life_fund_commission' => $request->input('life_fund_commission'),
            'company_profit_share_commission' => $request->input('life_fund_commission'),
            'description' => trim($request->input('description'))
        ]);
        session()->flash('message', 'Positions Updated Successfully');
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
        Positions::find($id)->delete();
        session()->flash('message', 'Positions Deleted Successfully');
        return redirect()->back();
    }
}
