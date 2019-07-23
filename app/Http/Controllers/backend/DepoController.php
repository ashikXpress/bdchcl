<?php

namespace App\Http\Controllers\backend;

use App\Area;
use App\Depo;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepoController extends Controller
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
        $depos = Depo::select('id', 'uid', 'area_id', 'depo_name', 'depo_owner_name',
            'depo_owner_phone', 'purchase_target', 'depo_commission', 'description')->paginate(10);

        return view('backend.depo.index', compact('depos', $depos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::select('id', 'area_id', 'area_name')->get();
        return view('backend.depo.add', compact('areas', $areas));
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
            'depo_name' => 'required|string|min:3|max:100',
            'depo_owner_name' => 'required|string|min:3|max:100',
            'depo_owner_phone' => 'required|string|min:11|max:15',
            'purchase_target' => 'required',
            'depo_commission' => 'required',
        ]);

        $depo_uid = mt_rand(100000, 9999999);

        Depo::create([
            'uid' => $depo_uid,
            'area_id' => $request->input('area_id'),
            'depo_name' => trim($request->input('depo_name')),
            'depo_owner_name' => trim($request->input('depo_owner_name')),
            'depo_owner_phone' => trim($request->input('depo_owner_phone')),
            'purchase_target' => $request->input('purchase_target'),
            'depo_commission' => $request->input('depo_commission'),
            'description' => trim($request->input('description')),
        ]);

        session()->flash('message', 'depo Created Successfully. depo id is'.$depo_uid);
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
        $areas = Area
            ::select('id', 'area_id', 'area_name')->get();
        $depo_edit = Depo::select('id', 'uid', 'area_id', 'depo_name', 'depo_owner_name',
            'depo_owner_phone', 'purchase_target', 'depo_commission', 'description')->find($id);

        return view('backend.depo.edit')
            ->with(compact('areas', $areas))
            ->with(compact('depo_edit', $depo_edit));
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
        $depo_update = Depo::find($id);
        $depo_update->update([
            'area_id' => $request->input('area_id'),
            'depo_name' => trim($request->input('depo_name')),
            'depo_owner_name' => trim($request->input('depo_owner_name')),
            'depo_owner_phone' => trim($request->input('depo_owner_phone')),
            'purchase_target' => $request->input('purchase_target'),
            'depo_commission' => $request->input('depo_commission'),
            'description' => trim($request->input('description')),
        ]);
        session()->flash('message', 'depo Updated Successfully.');
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
        depo::find($id)->delete();
        session()->flash('message', 'depo Deleted Successfully.');
        return redirect()->route('depo.list');
    }
}
