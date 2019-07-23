<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keytoken extends Model
{
    protected $table = 'key_tokens';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'ref_id', 'key_id', 'has_use', 'member_uid', 'created_by',
    ];
    protected $guarded = ['key_id'];


    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }
}






