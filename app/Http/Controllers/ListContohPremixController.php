<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContohPremix;

class ListContohPremixController extends Controller
{
    public function get($id = null){
        if($id == null) return redirect('/');

        $data = ContohPremix::where('id', $id);

        if(!$data->exists()) return redirect('/');

        $arr = [];

        foreach($data->get()[0]->listContohPremix as $lcp){
            $arr[] = $lcp->premix->senyawa;
        }

        return $arr;
    }
}
