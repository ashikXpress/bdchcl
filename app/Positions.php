<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    protected $table = 'positions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'position_name', 'min_member', 'min_hcp', 'commission', 'team_commission',
        'life_fund_commission', 'company_profit_share_commission', 'description',
    ];
    protected $guarded = [];
}
