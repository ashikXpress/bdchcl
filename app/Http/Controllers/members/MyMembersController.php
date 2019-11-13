<?php

namespace App\Http\Controllers\members;

use App\EmployeeSalesModel;
use App\Keytoken;
use App\MemberRegistration;
use App\Traits\ImgUploadTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MyMembersController extends Controller
{
    use ImgUploadTrait;
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



        return view('members.my_members')
            ->with(compact('my_members', $my_members));
       // ['mySales', EmployeeSalesModel::all()->where('emp_id', $empId)]
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
        $request->validate([
            'first_name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            'dob' => 'required',
            'gender' => 'required',
            'house_no' => 'required|max:10',
            'village_or_rood_no' => 'required|min:1|max:50',
            'post_office' => 'required|min:1|max:50',
            'sub_district' => 'required|min:3|max:50',
            'district' => 'required|min:3|max:50',
            'post_code' => 'required|min:3|max:50',
            'nid_or_birth_id' => 'required|min:3|max:50',
            'phone_number' => 'required|min:11|max:15',
            'ref_id' => 'required|max:50',
            'key_id' => 'required|max:50',
            'photo' => 'required|max:1048576',
        ]);

        $refer_id = DB::table('key_tokens')->where('ref_id', $request->input('ref_id'))->value('ref_id');
        $key_token = DB::table('key_tokens')->where('key_id', $request->input('key_id'))->value('key_id');
        $check_uses = DB::table('members')->where('key_id', $request->input('key_id'))->value('key_id');
        $id = DB::table('key_tokens')->where('key_id', $request->input('key_id'))->value('id');

        if ($request->has('photo')) {
            $photo = $request->file('photo');
            $name = Str::slug($request->input('first_name')) . '_' . time();
            $folder = '/images/';
            $filePath = $folder . $name . '.' . $photo->getClientOriginalExtension();
            $this->uploadImg($photo, $folder, 'public', $name);
        }

        if (($refer_id == $request->input('ref_id'))
            && ($key_token == $request->input('key_id'))) {
            if ($check_uses != $request->input('key_id')) {

                $uid = mt_rand(999999, 10000000000);

                MemberRegistration::create([
                    'uid' => $uid,
                    'first_name' => trim($request->input('first_name')),
                    'last_name' => trim($request->input('last_name')),
                    'dob' => trim($request->input('dob')),
                    'gender' => trim($request->input('gender')),
                    'house_no' => trim($request->input('house_no')),
                    'village_or_rood_no' => trim($request->input('village_or_rood_no')),
                    'post_office' => trim($request->input('post_office')),
                    'sub_district' => trim($request->input('sub_district')),
                    'district' => trim($request->input('district')),
                    'post_code' => trim($request->input('post_code')),
                    'nid_or_birth_id' => trim($request->input('nid_or_birth_id')),
                    'phone_number' => trim($request->input('phone_number')),
                    'education_qualification' => trim($request->input('education_qualification')),
                    'occupation' => trim($request->input('occupation')),
                    'email' => trim($request->input('email')),
                    'ref_id' => $request->input('ref_id'),
                    'key_id' => $request->input('key_id'),
                    'photo' => $filePath,
                ]);

                $key_update = Keytoken::find($id);
                $key_update->update([
                    'has_use' => 1,
                    'member_uid' => $request->input('uid')
                ]);

                $memberCount = MemberRegistration::select('ref_id')->where('ref_id', $request->input('ref_id'))->count();
                $hasEmpRef = DB::table('employee_sales')->where('emp_id', $request->input('ref_id'))->value('emp_id');

                $empSales = new EmployeeSalesModel();

                if ($hasEmpRef == $request->input('ref_id')) {

                    //find member position for promotion

                    $memberPosition = EmployeeSalesModel::select('achieve_hcp')->where('emp_id', $request->input('ref_id'))->get();

                    //if employee in database

                    $updateMemberCount = EmployeeSalesModel::where('emp_id', $request->input('ref_id'));
                    $updateMemberCount->update(['achieve_member' => $memberCount]);

                    if ($memberCount >= 0 && $memberCount <= 7) {

                        $updateMemberCount->update([
                            'position' => 'No Position',
                            'total_payment' => ($memberCount * 1000),
                            'achieve_hcp' => ($memberCount * 500),
                            'hcp_commission' => ((($memberCount * 500) * 30) / 100)
                        ]);

                    } elseif ($memberCount >= 8 && $memberCount <= 15) {

                        $updateMemberCount->update([
                            'position' => 'Business Honor',
                            'total_payment' => ($memberCount * 1000),
                            'achieve_hcp' => ($memberCount * 500),
                            'hcp_commission' => ((($memberCount * 500) * 30) / 100)
                        ]);
                    } elseif ($memberCount >= 16 && $memberCount <= 199) {

                        $updateMemberCount->update([
                            'position' => 'Asst Manager',
                            'total_payment' => ($memberCount * 1000),
                            'achieve_hcp' => ($memberCount * 500),
                            'hcp_commission' => ((($memberCount * 500) * 10) / 100)
                        ]);
                    } elseif ($memberCount >= 200 && $memberCount <= 1499) {

                        $updateMemberCount->update([
                            'position' => 'Manager',
                            'total_payment' => ($memberCount * 1000),
                            'achieve_hcp' => ($memberCount * 500),
                            'hcp_commission' => ((($memberCount * 500) * 6) / 100)
                        ]);
                    } elseif ($memberCount >= 1251 && $memberCount <= 12560) {

                        $updateMemberCount->update([
                            'position' => 'Regional Sales Manager',
                            'total_payment' => ($memberCount * 1000),
                            'achieve_hcp' => ($memberCount * 500),
                            'hcp_commission' => ((($memberCount * 500) * 4) / 100)
                        ]);
                    } elseif ($memberCount >= 12561 && $memberCount <= 125600) {

                        $updateMemberCount->update([
                            'position' => 'General Manager',
                            'total_payment' => ($memberCount * 1000),
                            'achieve_hcp' => ($memberCount * 500),
                            'hcp_commission' => ((($memberCount * 500) * 2) / 100)
                        ]);
                    } elseif ($memberCount >= 125601) {

                        $updateMemberCount->update([
                            'position' => 'Project Director',
                            'total_payment' => ($memberCount * 1000),
                            'achieve_hcp' => ($memberCount * 500),
                            'hcp_commission' => ((($memberCount * 500) * 2) / 100)
                        ]);
                    }

                } else if ($hasEmpRef != $request->input('ref_id')) {

                    //if no employee in database

                    $empSales->emp_id = $request->input('ref_id');
                    $empSales->achieve_member = $memberCount;

                    if ($memberCount >= 0 && $memberCount <= 7) {

                        $empSales->position = 'no position';

                    } elseif ($memberCount >= 8 && $memberCount <= 15) {

                        $empSales->position = 'Business Honor';
                        $empSales->total_payment = ($memberCount * 1000);
                        $empSales->achieve_hcp = ($memberCount * 500);
                        $empSales->hcp_commission = ((($memberCount * 500) * 100) / 30);

                    } elseif ($memberCount >= 16 && $memberCount <= 125) {

                        $empSales->position = 'Asst Manager';
                        $empSales->total_payment = ($memberCount * 1000);
                        $empSales->achieve_hcp = ($memberCount * 500);
                        $empSales->hcp_commission = ((($memberCount * 500) * 100) / 10);

                    } elseif ($memberCount >= 126 && $memberCount <= 1250) {

                        $empSales->position = 'Manager';
                        $empSales->total_payment = ($memberCount * 1000);
                        $empSales->achieve_hcp = ($memberCount * 500);
                        $empSales->hcp_commission = ((($memberCount * 500) * 100) / 6);

                    } elseif ($memberCount >= 1251 && $memberCount <= 12560) {

                        $empSales->position = 'Reginal Sales Manager';
                        $empSales->total_payment = ($memberCount * 1000);
                        $empSales->achieve_hcp = ($memberCount * 500);
                        $empSales->hcp_commission = ((($memberCount * 500) * 100) / 4);

                    } elseif ($memberCount >= 12561 && $memberCount <= 125600) {

                        $empSales->position = 'General Manager';
                        $empSales->total_payment = ($memberCount * 1000);
                        $empSales->achieve_hcp = ($memberCount * 500);
                        $empSales->hcp_commission = ((($memberCount * 500) * 100) / 2);

                    } elseif ($memberCount >= 125601) {

                        $empSales->position = 'Project Director';
                        $empSales->total_payment = ($memberCount * 1000);
                        $empSales->achieve_hcp = ($memberCount * 500);
                        $empSales->hcp_commission = ((($memberCount * 500) * 100) / 2);

                    }

                    $empSales->save();
                }

                $mem_uid = $request->input('uid');
                session()->flash('message', 'member created successfully, member id ' .  $uid);

            } else {
                session()->flash('message', 'this key is already used');
            }

        } else {
            session()->flash('message', 'reference id or key id does not match');
        }

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
