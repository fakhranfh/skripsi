<?php

namespace App\Http\Controllers;

use App\Premix;
use Illuminate\Http\Request;
use App\Mineral;
use App\JenisMineral;
use App\BahanPakan;
use App\PremixIngreedient;
use App\PremixMinMax;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function totalpremix(){
        return view('totalpremix');
    }
    public function formula()
    {
        $feeds = BahanPakan::pluck('nama','id')->all();
        return view('formula',compact('feeds'));
    }

    public function tekhnik()
    {
        return view('tekhnik');
    }

    public function jenis_mineral()
    {
        $data = JenisMineral::get();
        return view('jenis_mineral',compact('data'));
    }

    public function jenis_mineral_detail($id){
        $data = JenisMineral::where('id',$id)->first();
        return view('jenis_mineral_detail', compact('data'));    
    }

    public function sumber_mineral(){
        $data = Mineral::get();
        return view('sumber',compact('data'));
    }

    public function sumber_detail($id){
        $data = Mineral::where('id',$id)->first();
        return view('sumber_detail',compact('data'));
    }

    public function tekhnik_continue($id){
        if ($id == 1){
            return view('teknik.mineral');  
        }else if ($id == 2){
            return view('teknik.sabun');  
        }else if ($id == 3){
            return view('teknik.premix');  
        }
    }

    public function calculate(Request $request){
        $this->validate($request, [
            'bb'=> 'required',
            'ps'=> 'required',
            'bl'=> 'required'
        ]);

        $data = $request->all();
            
        #  Kebutuhan
        $kebutuhan = array();
        $kebutuhan["Bahan Kering"]["persen"] = (2.48 - (0.002 * $request->bb) + (0.082 * $request->ps));
        $kebutuhan["Bahan Kering"]["satuan"] = $kebutuhan["Bahan Kering"]["persen"]*$request->bb/100;

        if($request->bl < 7){
            $kebutuhan["TDN"]["satuan"] = (0.46 + (7.743 * $request->bb/1000) + (2.053 * $request->bb/pow(1000,2)) + (0.326 * $request->ps));
            $kebutuhan["TDN"]["persen"] = $kebutuhan["TDN"]["satuan"]/$kebutuhan["Bahan Kering"]["satuan"]*100;
            $kebutuhan["Protein"]["satuan"] = 0.040 + (0.8 * $request->bb/1000) - (0.2 * pow(($request->bb/1000),2)) - 0.003 + (0.0872 * $request->ps) ;
            $kebutuhan["Protein"]["persen"] = $kebutuhan["Protein"]["satuan"]/$kebutuhan["Bahan Kering"]["satuan"]*100;
            $kebutuhan["Kalsium"]["satuan"] = 2.9343 + (32.9714 * $request->bb/1000) - 5.7143 * pow(($request->bb/1000),2) + (2.7 * $request->ps);
            $kebutuhan["Kalsium"]["persen"] = $kebutuhan["Kalsium"]["satuan"]/$kebutuhan["Bahan Kering"]["satuan"]*100;
            $kebutuhan["Posfor"]["satuan"] = 1.7914 + (30.6571 * $request->bb/1000) - 8.5714 * pow(($request->bb/1000),2) + (1.8 * $request->ps);
            $kebutuhan["Posfor"]["persen"] = $kebutuhan["Posfor"]["satuan"]/$kebutuhan["Bahan Kering"]["satuan"]*100;   
        }
        else
        {
            $kebutuhan["TDN"]["satuan"] = (0.46 + (7.743 * $request->bb/1000) + (2.053 * $request->bb/pow(1000,2)) + (0.326 * $request->ps)) + (1.002 + 0.008 * $request->bb);
            $kebutuhan["TDN"]["persen"] = $kebutuhan["TDN"]["satuan"]/$kebutuhan["Bahan Kering"]["satuan"]*100;
            $kebutuhan["Protein"]["satuan"] = 0.040 + (0.8 * $request->bb/1000) - (0.2 * pow(($request->bb/1000),2)) - 0.003 + (0.0872 * $request->ps) + 0.125 + (0.0014 * $request->ps)  ;
            $kebutuhan["Protein"]["persen"] = $kebutuhan["Protein"]["satuan"]/$kebutuhan["Bahan Kering"]["satuan"]*100;
            $kebutuhan["Kalsium"]["satuan"] = 2.9343 + (32.9714 * $request->bb/1000) - 5.7143 * pow(($request->bb/1000),2) + (2.7 * $request->ps)+ 6.64 + (0.0488 * $request->bb);
            $kebutuhan["Kalsium"]["persen"] = $kebutuhan["Kalsium"]["satuan"]/$kebutuhan["Bahan Kering"]["satuan"]*100;
            $kebutuhan["Posfor"]["satuan"] = 1.7914 + (30.6571 * $request->bb/1000) - 8.5714 * pow(($request->bb/1000),2) + (1.8 * $request->ps) + 4.7 + (0.0346 * $request->bb);
            $kebutuhan["Posfor"]["persen"] = $kebutuhan["Posfor"]["satuan"]/$kebutuhan["Bahan Kering"]["satuan"]*100;    
        }



        #  Pemberian
        $pemberian = array();            
        $pemberian["Bahan Kering"] = 0;
        $pemberian["TDN"] = 0;
        $pemberian["Protein"] = 0;
        $pemberian["Kalsium"] = 0;
        $pemberian["Posfor"] = 0;

        foreach($request->feeds as $key => $value){
            $bahanPakan = BahanPakan::where('id',$value)->first();
            // $bk = ($request->kuantitas[$key] * $bahanPakan->B) / 100;
            $bk = $request->kuantitas[$key]*($bahanPakan->BK)/100;            
            $pemberian["Bahan Kering"] += $bk;
            $pemberian["TDN"] += $bk*($bahanPakan->TDN)/100;
            $pemberian["Protein"] += $bk*($bahanPakan->PK)/100;
            $pemberian["Kalsium"] += $bk*($bahanPakan->Ca)/100*1000;
            $pemberian["Posfor"] += $bk*($bahanPakan->P)/100*1000;
        }
        // dd($request->feeds);        
        #  Hasil
        $hasil = array();
        foreach($pemberian as $key => $value){
            $hasil[$key] = $value - $kebutuhan[$key]["satuan"];
        }

        return view('result-laktasi')->with(compact('data','kebutuhan','pemberian','hasil'));
    }

    public function AjaxCalcLaktasi(Request $request)
    {
        if(empty($request->bb) || empty($request->ps) || empty($request->bl))
        {
            $data = array();
            return \Response::json($data);
        }
        else
        {            
            #  Kebutuhan
            $kebutuhan = array();
            $kebutuhan["Bahan Kering"]["persen"] = (2.48 - (0.002 * $request->bb) + (0.082 * $request->ps));
            $kebutuhan["Bahan Kering"]["satuan"] = $kebutuhan["Bahan Kering"]["persen"]*$request->bb/100;

            if($request->bl < 7){
                $kebutuhan["TDN"]["satuan"] = (0.46 + (7.743 * $request->bb/1000) + (2.053 * $request->bb/pow(1000,2)) + (0.326 * $request->ps));
                $kebutuhan["TDN"]["persen"] = $kebutuhan["TDN"]["satuan"]/$kebutuhan["Bahan Kering"]["satuan"]*100;
                $kebutuhan["Protein"]["satuan"] = 0.040 + (0.8 * $request->bb/1000) - (0.2 * pow(($request->bb/1000),2)) - 0.003 + (0.0872 * $request->ps) ;
                $kebutuhan["Protein"]["persen"] = $kebutuhan["Protein"]["satuan"]/$kebutuhan["Bahan Kering"]["satuan"]*100;
                $kebutuhan["Kalsium"]["satuan"] = 2.9343 + (32.9714 * $request->bb/1000) - 5.7143 * pow(($request->bb/1000),2) + (2.7 * $request->ps);
                $kebutuhan["Kalsium"]["persen"] = $kebutuhan["Kalsium"]["satuan"]/$kebutuhan["Bahan Kering"]["satuan"]*100;
                $kebutuhan["Posfor"]["satuan"] = 1.7914 + (30.6571 * $request->bb/1000) - 8.5714 * pow(($request->bb/1000),2) + (1.8 * $request->ps);
                $kebutuhan["Posfor"]["persen"] = $kebutuhan["Posfor"]["satuan"]/$kebutuhan["Bahan Kering"]["satuan"]*100;   
            }
            else
            {
                $kebutuhan["TDN"]["satuan"] = (0.46 + (7.743 * $request->bb/1000) + (2.053 * $request->bb/pow(1000,2)) + (0.326 * $request->ps)) + (1.002 + 0.008 * $request->bb);
                $kebutuhan["TDN"]["persen"] = $kebutuhan["TDN"]["satuan"]/$kebutuhan["Bahan Kering"]["satuan"]*100;
                $kebutuhan["Protein"]["satuan"] = 0.040 + (0.8 * $request->bb/1000) - (0.2 * pow(($request->bb/1000),2)) - 0.003 + (0.0872 * $request->ps) + 0.125 + (0.0014 * $request->ps)  ;
                $kebutuhan["Protein"]["persen"] = $kebutuhan["Protein"]["satuan"]/$kebutuhan["Bahan Kering"]["satuan"]*100;
                $kebutuhan["Kalsium"]["satuan"] = 2.9343 + (32.9714 * $request->bb/1000) - 5.7143 * pow(($request->bb/1000),2) + (2.7 * $request->ps)+ 6.64 + (0.0488 * $request->bb);
                $kebutuhan["Kalsium"]["persen"] = $kebutuhan["Kalsium"]["satuan"]/$kebutuhan["Bahan Kering"]["satuan"]*100;
                $kebutuhan["Posfor"]["satuan"] = 1.7914 + (30.6571 * $request->bb/1000) - 8.5714 * pow(($request->bb/1000),2) + (1.8 * $request->ps) + 4.7 + (0.0346 * $request->bb);
                $kebutuhan["Posfor"]["persen"] = $kebutuhan["Posfor"]["satuan"]/$kebutuhan["Bahan Kering"]["satuan"]*100;    
            }

            $text = "<table class='table table-stripped'>".
                        "<tr>".
                            "<th>Nutrien</th>".
                            "<th>Kebutuhan (kg/hari)</th>".
                        "</tr>";
            foreach($kebutuhan as $key => $value){
                $text .= "<tr>
                            <td>".$key."</td>
                            <td>".round($value["satuan"],2)."</td>
                        </tr>";
            }
            $text .= "</table>";

            return \Response::json($text);
        }
    }

    public function ingredient_data(Request $request){
      $nama_mineral = $request->mineral;
      if ($nama_mineral == ""){
        $nama_mineral = "Ca";
      }

      $ingredients = PremixIngreedient::get();

      $arr = [];

      foreach($ingredients as $ingredient){
        if ($ingredient->$nama_mineral > 0){
          $arr[$ingredient->id] = $ingredient->nama;
        }
      }

      return $arr;
    }

    public function ingredient_t(Request $request){
      $nama_mineral = $request->mineral;
      if ($nama_mineral == ""){
        $nama_mineral = "Ca";
      }
      $bahanPakans = BahanPakan::where('carrier',true)->get();
      $ingreedients = PremixIngreedient::get();
      $minmax = PremixMinMax::where('sumber',$nama_mineral)->first();

      $text = "";
      $select = "<select class='form-control' id='select_sumber_".$request->x."_t'>".
          "<option disabled selected value>--- Select Ingredients ---</option>";
      $input = "";
      foreach($ingreedients as $ingreedient){
        if ($ingreedient->$nama_mineral > 0){
          $minimal_value = round(100 / $ingreedient->$nama_mineral * $minmax->minimal);
          $maximal_value = round(100 / $ingreedient->$nama_mineral * $minmax->maksimal);
          $select .= "<option value='". $ingreedient->id ."'>". $ingreedient->nama ."</option>";
          $input .= "<input id='min[".$ingreedient->id."]'value='".$minimal_value."' hidden><input id='max[".$ingreedient->id."]'value='".$maximal_value."' hidden>";
        }
      }
      $select .= "</select>";
      $text .= "<td>". $select ."</td>".
          "<td><input type='number' class='form-control' id='ingre_".$request->x."_t' onChange='getKuantitasT($request->x)' value
                    ='0' ></td>";

      return \Response::json($text);
    }

    public function ingredient(Request $request){
        $nama_mineral = $request->mineral;
        if ($nama_mineral == ""){
            $nama_mineral = "Ca";
        }
        $bahanPakans = BahanPakan::where('carrier',true)->get();
        $ingreedients = PremixIngreedient::get();
        $minmax = PremixMinMax::where('sumber',$nama_mineral)->first();

        $text = "<table class='table table-stripped'>".
                "<tr>".
                "<th>Nama</th>".
                "<th>%</th>".
                "</tr>";
        $select = "<select class='form-control' id='select_sumber_$request->x'>".
                  "<option disabled selected value>--- Select Ingredients ---</option>";
        $input = "";
        foreach($ingreedients as $ingreedient){
            if ($ingreedient->$nama_mineral > 0){
                $minimal_value = round(100 / $ingreedient->$nama_mineral * $minmax->minimal);
                $maximal_value = round(100 / $ingreedient->$nama_mineral * $minmax->maksimal);
                $select .= "<option value='". $ingreedient->id ."'>". $ingreedient->nama ."</option>";
                $input .= "<input id='min[".$ingreedient->id."]'value='".$minimal_value."' hidden><input id='max[".$ingreedient->id."]'value='".$maximal_value."' hidden>";
            }
        }
        $select .= "</select>";
        // $text .= "<tr>".
        //                 "<td>".$ingreedient->nama."</td>".
        //                 "<td><input type='number' class='form-control' id='ingre[".$ingreedient->id."]' value='0' oninput='getKuantitas(".$ingreedient->id.")'></td>".
        //                 "<td><input type='number' class='form-control' id='kuantitas[".$ingreedient->id."]' disabled></td>".
        //                 "<td>Minimal ".$minimal_value."% dan maksimal ".$maximal_value."% <input hidden name='konter' value=' $ingreedient->id'></td>".
        //          "</tr>";
        $text .= "<tr>".
                    "<td>". $select ."</td>".
                    "<td><input type='number' class='form-control' id='ingre_$request->x' onChange='getKuantitas($request->x)' value
                    ='0' ></td>".
                "</tr>";
        $text .= "</table>";

        return \Response::json($text);
    }

    public function get_premixes(){
        $premixes = Premix::all();
        $arr = [];

        foreach ($premixes as $premix){
          $arr[] = $premix->senyawa;
        }

        return $arr;
    }

    function calculate_premix(Request $request){
        $data = explode('|', $request->data);

        $ca = 0;
        $p = 0;
        $Na = 0;
        $Cl = 0;
        $K = 0;
        $Fe = 0;
        $Mg = 0;
        $Mn = 0;
        $I = 0;
        $Zn = 0;
        $Cu = 0;
        $Co = 0;
        $Se = 0;

        $kom_ca = 0;
        $kom_p = 0;
        $kom_Na = 0;
        $kom_Cl = 0;
        $kom_K = 0;
        $kom_Fe = 0;
        $kom_Mg = 0;
        $kom_Mn = 0;
        $kom_I = 0;
        $kom_Zn = 0;
        $kom_Cu = 0;
        $kom_Co = 0;
        $kom_Se = 0;

        $item_ca = 0;
        $item_p = 0;
        $item_Fe = 0;
        $item_Mn = 0;
        $item_I = 0;
        $item_Zn = 0;
        $item_Cu = 0;
        $item_Co = 0;
        $item_Se = 0;
        foreach($data as $val){
            $item = explode('_', $val);
            $ingreedient = PremixIngreedient::where('id',$item[0])->first();
            $ca = $ca + $item[1] * $ingreedient->Ca / 100;
            $p = $p + $item[1] *   $ingreedient->P / 100;
            $Na = $Na + $item[1] * $ingreedient->Na / 100;
            $Cl = $Cl + $item[1] * $ingreedient->Cl / 100;
            $K = $K + $item[1] *   $ingreedient->K / 100;
            $Fe = $Fe + $item[1] * $ingreedient->Fe / 100;
            $Mg = $Mg + $item[1] * $ingreedient->Mg / 100;
            $Mn = $Mn + $item[1] * $ingreedient->Mn / 100;
            $I = $I + $item[1] *   $ingreedient->I / 100;
            $Zn = $Zn + $item[1] * $ingreedient->Zn / 100;
            $Cu = $Cu + $item[1] * $ingreedient->Cu / 100;
            $Co = $Co + $item[1] * $ingreedient->Co / 100;
            $Se = $Se + $item[1] * $ingreedient->Se / 100;

            $kom_ca = $kom_ca + $ingreedient->Ca * $item[2];
            $kom_p  = $kom_p  + $ingreedient->P  * $item[2];
            $kom_Na = $kom_Na + $ingreedient->Na * $item[2];
            $kom_Cl = $kom_Cl + $ingreedient->Cl * $item[2];
            $kom_K  = $kom_K  + $ingreedient->K  * $item[2];
            $kom_Fe = $kom_Fe + $ingreedient->Fe * $item[2];
            $kom_Mg = $kom_Mg + $ingreedient->Mg * $item[2];
            $kom_Mn = $kom_Mn + $ingreedient->Mn * $item[2];
            $kom_I  = $kom_I  + $ingreedient->I  * $item[2];
            $kom_Zn = $kom_Zn + $ingreedient->Zn * $item[2];
            $kom_Cu = $kom_Cu + $ingreedient->Cu * $item[2];
            $kom_Co = $kom_Co + $ingreedient->Co * $item[2];
            $kom_Se = $kom_Se + $ingreedient->Se * $item[2];
            
            if($ingreedient->Ca != 0) $item_ca = $item[2];
            if($ingreedient->P != 0) $item_p = $item[2];
            if($ingreedient->Fe != 0) $item_Fe = $item[2];
            if($ingreedient->Mn != 0) $item_Mn = $item[2];
            if($ingreedient->I != 0) $item_I = $item[2];
            if($ingreedient->Zn != 0) $item_Zn = $item[2];
            if($ingreedient->Cu != 0) $item_Cu = $item[2];
            if($ingreedient->Co != 0) $item_Co = $item[2];
            if($ingreedient->Se != 0) $item_Se = $item[2];

        }

        $text = "<table class='table table-stripped'>".
                "<tr>".
                    "<th>Mineral</th>".
                    "<th>% Komposisi</th>".
                    "<th>% Penggunaan</th>".
                    "<th colspan='2'>Keterangan</th>".
                "</tr>";
        $text .= "<tr><td>Ca</td>"."<td>". $item_ca."</td>"."<td>". $ca ."</td><td>". ($tem = $item_ca -$ca ) ."</td><td>". ($item_ca -$ca > 0 ? "Kurang":"Lebih") . "</td></tr>".
                 "<tr><td>P </td>"."<td>". $item_p ."</td>"."<td>". $p  ."</td><td>". ($tem = $item_p  -$p  ) ."</td><td>". ($item_p -$p > 0 ? "Kurang":"Lebih") . "</td></tr>".
                 "<tr><td>Na</td>"."<td>0</td>"."<td>". $Na ."</td><td>". ($tem = $kom_Na -$Na) ."</td><td>". "-" . "</td></tr>".
                 "<tr><td>Cl</td>"."<td>0</td>"."<td>". $Cl ."</td><td>". ($tem = $kom_Cl -$Cl) ."</td><td>". "-" . "</td></tr>".
                 "<tr><td>K</td>"."<td>0</td>"."<td>". $K ."</td><td>". ($tem = $kom_K -$K) ."</td><td>". "-" . "</td></tr>".
                 "<tr><td>Fe</td>"."<td>". $item_Fe ."</td>"."<td>". $Fe ."</td><td>". ($tem = $item_Fe -$Fe ) ."</td><td>". ($item_Fe -$Fe > 0 ? "Kurang":"Lebih") . "</td></tr>".
                 "<tr><td>Mg</td>"."<td>0</td>"."<td>". $Mg ."</td><td>". ($tem = $kom_Mg -$Mg) ."</td><td>". "-" . "</td></tr>".
                 "<tr><td>Mn</td>"."<td>". $item_Mn."</td>"."<td>". $Mn ."</td><td>". ($tem = $item_Mn -$Mn ) ."</td><td>". ($item_Mn -$Mn > 0 ? "Kurang":"Lebih") . "</td></tr>".
                 "<tr><td>I </td>"."<td>". $item_I ."</td>"."<td>". $I  ."</td><td>". ($tem = $item_I  -$I  ) ."</td><td>". ($item_I -$I > 0 ? "Kurang":"Lebih") . "</td></tr>".
                 "<tr><td>Zn</td>"."<td>". $item_Zn."</td>"."<td>". $Zn ."</td><td>". ($tem = $item_Zn -$Zn ) ."</td><td>". ($item_Zn -$Zn > 0 ? "Kurang":"Lebih") . "</td></tr>".
                 "<tr><td>Cu</td>"."<td>". $item_Cu."</td>"."<td>". $Cu ."</td><td>". ($tem = $item_Cu -$Cu ) ."</td><td>". ($item_Cu -$Cu > 0 ? "Kurang":"Lebih") . "</td></tr>".
                 "<tr><td>Co</td>"."<td>". $item_Co."</td>"."<td>". $Co ."</td><td>". ($tem = $item_Co -$Co ) ."</td><td>". ($item_Co -$Co > 0 ? "Kurang":"Lebih") . "</td></tr>".
                 "<tr><td>Se</td>"."<td>". $item_Se."</td>"."<td>". $Se ."</td><td>". ($tem = $item_Se -$Se ) ."</td><td>". ($item_Se -$Se > 0 ? "Kurang":"Lebih") . "</td></tr>". 
                "</table>";        
        return \Response::json($text);
                
    }
}
