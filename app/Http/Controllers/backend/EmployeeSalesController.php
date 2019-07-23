<?php

namespace App\Http\Controllers\backend;

use App\EmployeeSalesModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeSalesController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesHistory = EmployeeSalesModel::select('id', 'emp_id', 'position', 'achieve_member', 'total_payment',
            'achieve_hcp', 'hcp_commission', 'due_payment', 'withdraw_payment')->paginate(10);
        return view('backend.sales.index')->with(compact('salesHistory', $salesHistory));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sales.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//        $request->validate([
//            'emp_id' => 'required',
//            'achieve_member' => 'required|numeric',
//            'achieve_hcp' => 'required|numeric',
//            'due_hcp' => 'required|numeric',
//            'earn_commission' => 'required|numeric'
//        ]);
//
//        EmployeeSalesModel::create([
//            'emp_id' => $request->input('emp_id'),
//            'achieve_member' => $request->input('achieve_member'),
//            'achieve_hcp' => $request->input('achieve_hcp'),
//            'due_hcp' => $request->input('due_hcp'),
//            'earn_commission' => $request->input('earn_commission')
//        ]);
//
//        session()->flash('message', 'Sales History Create');
//
//        return redirect()->back();
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        $salesHistory = EmployeeSalesModel::select('id', 'emp_id', 'achieve_member', 'achieve_hcp', 'due_hcp', 'earn_commission')->get();
//        return view('backend.sales.edit')->with(compact('salesHistory', $salesHistory));
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        $request->validate([
//            'emp_id' => 'required',
//            'achieve_member' => 'required|numeric',
//            'achieve_hcp' => 'required|numeric',
//            'due_hcp' => 'required|numeric',
//            'earn_commission' => 'required|numeric'
//        ]);
//
//        EmployeeSalesModel::find($id)->update([
//            'emp_id' => $request->input('emp_id'),
//            'achieve_member' => $request->input('achieve_member'),
//            'achieve_hcp' => $request->input('achieve_hcp'),
//            'due_hcp' => $request->input('due_hcp'),
//            'earn_commission' => $request->input('earn_commission')
//        ]);
//
//        session()->flash('message', 'Sales History Updated');
//
//        return redirect()->back();
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        EmployeeSalesModel::find($id)->delete();
//
//        session()->flash('message', 'Sales History Deleted');
//
//        return redirect()->back();
//    }
}
