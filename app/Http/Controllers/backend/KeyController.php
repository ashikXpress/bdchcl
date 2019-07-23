<?php

namespace App\Http\Controllers\backend;

use App\Keytoken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class KeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keys = Keytoken::select('id', 'ref_id', 'key_id', 'has_use', 'member_uid', 'created_by')->orderByRaw('id DESC')->paginate(20);
        return view('backend.key.show_key_list', compact('keys', $keys));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.key.create_key');
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
            'ref_id' => 'required',
            'number_of_key' => 'required|min:1'
        ]);

        $number_of_key = $request->input('number_of_key');
        $refer_id = $request->input('ref_id');

        if ($number_of_key > 0)
        {
            for ($i = 0; $i<$number_of_key; $i++){
                Keytoken::create([
                    'ref_id' => $refer_id,
                    'key_id' => Str::random(10),
                    'has_use' => 0,
                    'created_by' => Auth::user()->name
                ]);
            }

            session()->flash('message', 'key generated successfully. Refer Id is '.$refer_id);
            return redirect()->back();
        }else{
            session()->flash('some thing has wrong');
            return redirect()->back();
        }


    }

    public function getKeyById(Request $request)
    {
        $query = $request->get('term','');
        $ref_id = Keytoken::where('ref_id','LIKE','%',$query.'%')->get();

        $data = array();

        foreach($ref_id as $refer_id){
            $data[] = array('value'=>$refer_id->ref_id, 'id'=>$refer_id->id);
        }
        if (count($data))
            return $data;
        else
            return ['value'=>'no value found', 'id'=>''];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**public function edit($id)
    {
        //
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**public function update(Request $request, $id)
    {
        //
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**public function destroy($id)
    {
        //
    }*/
}
