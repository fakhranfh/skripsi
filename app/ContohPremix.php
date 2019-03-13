<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContohPremix extends Model
{
    protected $guarded = [];

    public function listContohPremix(){
        return $this->hasMany(ListContohPremix::class,'id_contoh_premix');
    }
}
