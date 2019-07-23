<?php

namespace App\Http\Controllers\backend;

use App\Area;
use App\Department;
use App\Employee;
use App\Traits\ImgUploadTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    use ImgUploadTrait;

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
        $employees = Employee::select('id', 'uid', 'area_id', 'first_name', 'last_name', 'dob',
            'gender', 'department_id', 'upline_id', 'house_no', 'village_or_rood_no',
            'post_office', 'sub_district', 'district', 'post_code', 'nid_or_birth_id',
            'phone_number', 'email', 'password',
            'photo')->paginate(10);

        return view('backend.employee.index', compact('employees', $employees));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::select('id', 'area_id', 'area_name')->get();
        $departments = Department::select('id', 'department_name')->get();
        return view('backend.employee.add')
            ->with(compact('areas', $areas))
            ->with(compact('departments', $departments));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'dob' => 'required',
            'gender' => 'required',
            'department_id' => 'required',
            'upline_id' => 'required|numeric',
            'area_id' => 'required',
            'house_no' => 'required',
            'village_or_rood_no' => 'required',
            'post_office' => 'required',
            'sub_district' => 'required',
            'district' => 'required',
            'post_code' => 'required',
            'nid_or_birth_id' => 'required',
            'phone_number' => 'required|min:11|max:15',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'photo' => 'required|max:1024'
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $name = Str::slug($request->input('first_name')) . '_' . time();
            $folder = "/images/";
            $filePath = $folder . $name . '.' . $photo->getClientOriginalExtension();
            $this->uploadImg($photo, $folder, 'public', $name);
        }


        $area_id = $request->input('area_id');

        $area_select = Area::select('id', 'area_id', 'area_name')->find($area_id);

        $emp_area = $area_select->area_id;
        $area = $area_select->id;

        $emp_id = $emp_area.'-'.mt_rand(100000, 999999);

        Employee::create([
            'uid' => $emp_id,
            'area_id' => $area,
            'first_name' => trim($request->input('first_name')),
            'last_name' => trim($request->input('last_name')),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'department_id' => $request->input('department_id'),
            'upline_id' => $request->input('upline_id'),
            'house_no' => trim($request->input('house_no')),
            'village_or_rood_no' => trim($request->input('village_or_rood_no')),
            'post_office' => trim($request->input('post_office')),
            'sub_district' => trim($request->input('sub_district')),
            'district' => trim($request->input('district')),
            'post_code' => trim($request->input('post_code')),
            'nid_or_birth_id' => trim($request->input('nid_or_birth_id')),
            'phone_number' => trim($request->input('phone_number')),
            'education_qualification_ssc' => trim($request->input('education_qualification_ssc')),
            'education_qualification_hsc' => trim($request->input('education_qualification_hsc')),
            'education_qualification_hons' => trim($request->input('education_qualification_hons')),
            'education_qualification_others' => trim($request->input('education_qualification_others')),
            'email' => trim($request->input('email')),
            'password' => trim($request->input('password')),
            'photo' => $filePath,
        ]);

        session()->flash('message', 'Employee Inserted Successfully, Employee id ' . $emp_id);

        return redirect()->back();
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
     * @param string $uid
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $areas = Area::select('id', 'area_id', 'area_name')->get();
        $departments = Department::select('id', 'department_name')->get();

        $emps_edit = Employee::select('id','uid', 'area_id', 'first_name', 'last_name', 'dob',
            'gender', 'department_id', 'upline_id', 'house_no', 'village_or_rood_no',
            'post_office', 'sub_district', 'district', 'post_code', 'nid_or_birth_id',
            'phone_number', 'education_qualification_ssc',
            'education_qualification_hsc', 'education_qualification_hons',
            'education_qualification_msc', 'education_qualification_others', 'email',
            'photo')->find($id);


        return view('backend.employee.edit')
            ->with(compact('emps_edit', $emps_edit))
            ->with(compact('areas', $areas))
            ->with(compact('departments', $departments));
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
        $request->validate([
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'dob' => 'required',
            'gender' => 'required',
            'department_id' => 'required',
            'upline_id' => 'required|numeric',
            'house_no' => 'required',
            'village_or_rood_no' => 'required',
            'post_office' => 'required',
            'sub_district' => 'required',
            'district' => 'required',
            'post_code' => 'required',
            'nid_or_birth_id' => 'required',
            'phone_number' => 'required|min:11|max:15',
            'photo' => 'required|max:1024'
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $name = Str::slug($request->input('first_name')) . '_' . time();
            $folder = "/images/";
            $filePath = $folder . $name . '.' . $photo->getClientOriginalExtension();
            $this->uploadImg($photo, $folder, 'public', $name);
        }

        $emp_update = Employee::find($id);
        $emp_update->update([
            'first_name' => trim($request->input('first_name')),
            'last_name' => trim($request->input('last_name')),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'department_id' => $request->input('department_id'),
            'upline_id' => $request->input('upline_id'),
            'house_no' => trim($request->input('house_no')),
            'village_or_rood_no' => trim($request->input('village_or_rood_no')),
            'post_office' => trim($request->input('house_no')),
            'sub_district' => trim($request->input('post_office')),
            'district' => trim($request->input('district')),
            'post_code' => trim($request->input('post_code')),
            'nid_or_birth_id' => trim($request->input('nid_or_birth_id')),
            'phone_number' => trim($request->input('phone_number')),
            'education_qualification_ssc' => trim($request->input('education_qualification_ssc')),
            'education_qualification_hsc' => trim($request->input('education_qualification_hsc')),
            'education_qualification_hons' => trim($request->input('education_qualification_hons')),
            'education_qualification_others' => trim($request->input('education_qualification_others')),
            'email' => trim($request->input('email')),
            'password' => trim($request->input('password')),
            'photo' => $filePath,
        ]);

        session()->flash('status', 'true');
        session()->flash('message', 'Employee Updated Successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emp = Employee::where('uid', $id);
        $emp->delete();
        session()->flash('status', 'true');
        session()->flash('message', 'Employee Deleted Successfully');
        return redirect()->back();
    }

}
