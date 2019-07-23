<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depo extends Model
{
    protected $table = 'depos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'uid', 'area_id', 'depo_name', 'depo_owner_name', 'purchase_target', 'depo_commission', 'description'
    ];
    protected $guarded = [];

    public function area()
    {
        return $this->belongsTo('App\Area', 'area_id');
    }
}
