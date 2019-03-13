<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premix extends Model
{
    protected $guarded = [];

    public function contohPremix(){
        return $this->hasMany(ListContohPremix::class, 'id_premix');
    }
}
