<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeSalesModel extends Model
{
    protected $table = 'employee_sales';
    protected $fillable = [
        'id', 'emp_id', 'position', 'achieve_member','total_payment', 'achieve_hcp', 'hcp_commission', 'due_payment', 'withdraw_payment'
    ];
    protected $guarded = [];

    public function employee()
    {
        return $this->belongsTo('App\Employee', 'emp_id');
    }
}
