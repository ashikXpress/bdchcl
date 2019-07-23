<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';
    protected $fillable = [
        'id', 'area_id', 'area_name', 'description',
    ];
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function depo()
    {
        return $this->hasMany('App\Depo');
    }

    public function dealer()
    {
        return $this->hasMany('App\Dealer');
    }
}
