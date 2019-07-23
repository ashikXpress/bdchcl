<?php

namespace App\Http\Controllers\backend;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::select('id', 'department_name')->paginate(10);
        return view('backend.department.index')->with(compact('departments', $departments));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.department.add');
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
            'department_name' => 'required|min:3',
        ]);

        Department::create([
            'department_name' => trim($request->input('department_name')),
            'description' => trim($request->input('description')),
        ]);
        session()->flash('message', 'Department Created Successfully');
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
        $departments = Department::select('id', 'department_name', 'description')->find($id);
        return view('backend.department.edit')->with(compact('departments', $departments));
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
        $department = Department::findOrFail($id);

        $department->update([
            'department_name' => trim($request->input('department_name')),
            'description' => trim($request->input('description')),
        ]);
        session()->flash('message', 'Department Updated Successfully');
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
        Department::find($id)->delete();
        return redirect()->back();
    }
}
