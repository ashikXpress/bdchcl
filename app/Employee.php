<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Foundation\Auth\Employee as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'uid', 'first_name', 'last_name', 'dob', 'gender', 'department_id',
        'upline_id', 'area_id', 'house_no', 'village_or_rood_no',
        'post_office', 'sub_district', 'district', 'post_code', 'nid_or_birth_id',
        'phone_number', 'education_qualification_ssc',
        'education_qualification_hsc', 'education_qualification_hons',
        'education_qualification_msc', 'education_qualification_others', 'email', 'password',
        'photo',
    ];
    protected $guarded = ['email', 'password'];
    public function area()
    {
        return $this->belongsTo('App\Area', 'area_id');
    }
    
    public function department()
    {
        return $this->belongsTo('App\Department', 'department_id');
    }

    public function uplineEmployee()
    {
        return $this->belongsTo('App\Employee', 'upline_id');
    }


}
