<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamSetup extends Model
{
    protected $table = 'team_setup';
    protected $fillable = [
        'id', 'emp_id', 'reference_id'
    ];
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function employee()
    {
        return $this->belongsTo('App\Employee', 'emp_id');
    }

    public function employee_ref()
    {
        return $this->belongsTo('App\Employee', 'reference_id');
    }

}
