<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeePosition extends Model
{
    protected $table = 'employee_positions';
    protected $fillable = ['id', 'emp_id', 'position_id', 'achieve_hcp', 'commission'];
}
