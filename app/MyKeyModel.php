<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyKeyModel extends Model
{
    public $id;

    public function getEmpId(){
        return $this->id;
    }

    public function setEmpId($id){
        $this->id = $id;
    }
}
