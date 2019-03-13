<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListContohPremix extends Model
{
    public function premix(){
        return $this->belongsTo(Premix::class, 'id_premix');
    }

    public function contohPremix(){
        return $this->belongsTo(ContohPremix::class, 'id_contoh_premix');
    }
}
