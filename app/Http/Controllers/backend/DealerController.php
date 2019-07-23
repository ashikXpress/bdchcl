<?php

namespace App\Http\Controllers\backend;

use App\Area;
use App\Dealer;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DealerController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dealers = Dealer::select('id', 'uid', 'area_id', 'dealer_name', 'dealer_owner_name',
            'dealer_owner_phone', 'purchase_target', 'dealer_commission', 'description')->paginate(10);

        return view('backend.dealer.index', compact('dealers', $dealers));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::select('id', 'area_id', 'area_name')->get();
        return view('backend.dealer.add', compact('areas', $areas));
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
            'area_id' => 'required',
            'dealer_name' => 'required|string|min:3|max:100',
            'dealer_owner_name' => 'required|string|min:3|max:100',
            'dealer_owner_phone' => 'required|string|min:11|max:15',
            'purchase_target' => 'required',
            'dealer_commission' => 'required',
        ]);

        $dealer_uid = mt_rand(100000, 9999999);

        Dealer::create([
            'uid' => $dealer_uid,
            'area_id' => $request->input('area_id'),
            'dealer_name' => trim($request->input('dealer_name')),
            'dealer_owner_name' => trim($request->input('dealer_owner_name')),
            'dealer_owner_phone' => trim($request->input('dealer_owner_phone')),
            'purchase_target' => $request->input('purchase_target'),
            'dealer_commission' => $request->input('dealer_commission'),
            'description' => trim($request->input('description')),
        ]);

        session()->flash('message', 'Dealer Created Successfully. Dealer id is'.$dealer_uid);
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
        $areas = Area::select('id', 'area_id', 'area_name')->get();
        $dealer_edit = Dealer::select('id', 'uid', 'area_id', 'dealer_name', 'dealer_owner_name',
            'dealer_owner_phone', 'purchase_target', 'dealer_commission', 'description')->find($id);

        return view('backend.dealer.edit')
            ->with(compact('areas', $areas))
            ->with(compact('dealer_edit', $dealer_edit));
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
        $dealer_update = Dealer::find($id);
        $dealer_update->update([
            'area_id' => $request->input('area_id'),
            'dealer_name' => trim($request->input('dealer_name')),
            'dealer_owner_name' => trim($request->input('dealer_owner_name')),
            'dealer_owner_phone' => trim($request->input('dealer_owner_phone')),
            'purchase_target' => $request->input('purchase_target'),
            'dealer_commission' => $request->input('dealer_commission'),
            'description' => trim($request->input('description')),
        ]);
        session()->flash('message', 'Dealer Updated Successfully.');
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
        Dealer::find($id)->delete();
        session()->flash('message', 'Dealer Deleted Successfully.');
        return redirect()->route('dealer.list');
    }
}
