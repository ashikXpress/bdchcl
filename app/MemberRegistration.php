<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberRegistration extends Model
{
    protected $table = 'members';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'uid', 'first_name', 'last_name', 'dob', 'gender', 'house_no', 'village_or_rood_no',
        'post_office', 'sub_district', 'district', 'post_code', 'nid_or_birth_id', 'phone_number',
        'education_qualification', 'occupation', 'email', 'ref_id','key_id', 'photo'
    ];
    protected $guarded = ['key_id'];

}
