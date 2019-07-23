<?php

namespace App\Http\Controllers\backend;

use App\Area;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AreaController extends Controller
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
        $areas = Area::select('id', 'area_id', 'area_name', 'description')->paginate(10);
        return view('backend.area.index', compact('areas', $areas));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.area.add');
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
            'area_id' => 'required|string|min:5|max:255',
            'area_name' => 'required|string|min:5|max:255',
        ]);

        Area::create([
            'area_id' => trim($request->input('area_id')),
            'area_name' => trim($request->input('area_name')),
            'description' => trim($request->input('description'))
        ]);

        session()->flash('message', 'Area Created Successfully');

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
        $areas_edit = [];
        $areas_edit['areas_edit'] = Area::select('id', 'area_id', 'area_name', 'description')->find($id);
        return view('backend.area.edit', $areas_edit);
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
            'area_id' => 'required|string|min:5|max:255',
            'area_name' => 'required|string|min:5|max:255',
        ]);

        $area_update = Area::findOrFail($id);

        $area_update->update([
            'area_id' => trim($request->input('area_id')),
            'area_name' => trim($request->input('area_name')),
            'description' => trim($request->input('description'))
        ]);
        session()->flash('message', 'Area Updated Successfully');

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
        Area::find($id)->delete();
        session()->flash('message', 'area is deleted');
        return redirect()->back();
    }
}
