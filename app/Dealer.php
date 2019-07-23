<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    protected $table = 'dealers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'uid', 'area_id', 'dealer_name', 'dealer_owner_name', 'dealer_owner_phone', 'purchase_target', 'dealer_commission', 'description'
    ];
    protected $guarded = [];

    public function area()
    {
        return $this->belongsTo('App\Area', 'area_id');
    }
}
