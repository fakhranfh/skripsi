@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-defauilt">
            <div class="panel-body">
                <!-- nama -->
                <a href="" style="font-size:20pt;text-decoration:none">Premix </a><br>
                <span class="date" style="font-size:10pt"></span>
                <hr>
                <div class="col-md-4">
                    <div class="card">
                        <!-- gambar -->
                        <img src="/images/premix.jpg" alt="Rumput Gajah" class="img img-thumbnail" style="width: 300px; height: 170px;">
                    </div>
                </div>
                <div class="col-md-8">
                    <p>
                        <!-- detail -->
                        <p style="text-align:justify">&emsp;Premix merupakan campuran beberapa mineral dalam suatu bahan pembawa (carrier) yang digunakan sebagai bahan pakan untuk memenuhi kebutuhan mineral ternak. Premix adalah campuran bahan pakan yang diencerkan ( carrier), yang dalam pemakaiannya harus dicampurkan kedalam bahan pakan ternak. Premix juga merupakan kombinasi beberapa mikro-ingredient dengan bahan penyerta sehingga merupakan kombinasi yang siap dicampurkan dalam pakan ternak. Komposisi premix berbeda-beda sesuai dengan kebutuhan relatif pada tiap jenis ternak. Premix disusun dengan mempertimbangkan faktor kebutuhan ternak dan faktor reaksi antar mineral saat dimetabolisme dalam tubuh ternak.</p>
                </div>
                </div>
            </div>
        </diV> 
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">Total Premix  	</div>
                    <div class="col-md-5"><input class="form-control" type="number" value='100' disabled name="mount_premix" id="mount_premix"></div>
                    <input hidden name='konter' value='100 'disable>
                    <div class="col-md-1"><p>%</p></div>
                </div>
                <br>
                <div class="row">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="panel panel-default" id="daftar_mineral">
                                <div class="panel-heading">
                                    <h4> Daftar Bahan Mineral</h4>
                                </div>
                                <div class="panel-body">
                                    <form id="calculate">
                                        <div class="select-mineral-mandatory">
                                            <div id="0">
                                                <div class="col-md-5">Jenis Mineral</div>
                                                <div class="col-md-5">
                                                    <select class="form-control" name="mineral" id="mineral[0]" onchange="getDaftarMineral(0)">
                                                        <option selected="true" disabled="disabled">---- Select Mineral ----</option>
                                                        <option value="Ca">Ca</option>
                                                        <option value="P">P</option>
                                                        <option value="Fe">Fe</option>
                                                        <option value="Mn">Mn</option>
                                                        <option value="I">I</option>
                                                        <option value="Zn">Zn</option>
                                                        <option value="Cu">Cu</option>
                                                        <option value="Co">Co</option>
                                                        <option value="Se">Se</option>
                                                    </select>    
                                                </div>
                                                <div class="col-md-1"><a class="btn btn-danger btn-remove">Hapus</a></div>
                                                <div class='col-md-5'><p>Komposisi</p></div>
                                                <div class='col-md-7'><input class='form-control' type='number' id='komposisi_0'></td>
                                                <div class="col-md-12"><div id="result_daftar_mineral[0]"></div>
                                            </div>
                                        </div>
                                        <div class="result-btn-add"></div>
                                        <div class="col-md-12">
                                            <a class="btn btn-success" id="btn-add-more">Tambah</a>
                                            <button class="btn btn-submit btn-primary">Calculate Premix</button> 
                                        </div>
                                        <!-- tempat result dan calculate                      -->
                                            
                                        <br><br>
                                        <div id="table_carrier">
                                            <table class='table table-stripped'>
                                                <tr>
                                                    <td>Carrier</td>
                                                    <td><input class='form-control' type='number' id='carrier_persen' disabled></td>
                                                    <td> - </td>
                                                </tr>
                                            </table>
                                        </div>            
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-default" id="calculate_premix">
                                <div class="panel-heading">
                                    <h4> Calculate Premix</h4>
                                </div>
                                <div class="panel-body">
                                    <form id="calculate">                       
                                        <div id="result_calculate_premix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script type="text/javascript">
    var carried = 100;
    var sebelum = 0;
    var node = 0;
    $(document).ready(function(){
        console.log("ready");
        // $("#daftar_mineral").hide();
        $("#calculate_premix").hide();
        $(".x").val(0);

        $('#btn-add-more').on('click',function(e){
            node = node + 1;
            x = node;
            var template_mineral = "<div class='select-mineral-mandatory'>"+
                                            "<div id='"+x+"'>"+
                                                "<div class='col-md-5'>Jenis Mineral</div>" +
                                                "<div class='col-md-5'>" +
                                                    "<select class='form-control' name='mineral' id='mineral["+x+"]' onchange='getDaftarMineral("+x+")'>" +
                                                        "<option selected='true' disabled='disabled'>---- Select Mineral ----</option>" +
                                                        "<option value='Ca'>Ca</option>" +
                                                        "<option value='P'>P</option>" +
                                                        "<option value='Fe'>Fe</option>" +
                                                        "<option value='Mn'>Mn</option>" +
                                                        "<option value='I'>I</option>" +
                                                        "<option value='Zn'>Zn</option>" +
                                                        "<option value='Cu'>Cu</option>" +
                                                        "<option value='Co'>Co</option>" + 
                                                        "<option value='Se'>Se</option>" +
                                                    "</select>" +    
                                                "</div>" +
                                                "<div class='col-md-1'><a class='btn btn-danger btn-remove'>Hapus</a></div>" +  
                                                "<div class='col-md-5'><p>Komposisi</p></div>" + 
                                                "<div class='col-md-7'><input class='form-control' type='number' id='komposisi_"+x+"'></td>" +
                                                "<div class='col-md-12'><div id='result_daftar_mineral["+x+"]'></div>" +
                                            "</div>" +
                                        "</div>" ;
            e.preventDefault();
            $(".result-btn-add").before(template_mineral);
        });

        $(document).on('click','.btn-remove',function(e){
            e.preventDefault();
            $(this).parents('.select-mineral').remove();
            node = node - 1;
            car=0;
            for(i=0;i<=node;i++){
                car = car+parseInt(document.getElementById("ingre_"+i).value);
            }
            document.getElementById("carrier_persen").value = 100-car;
        });


        $('#calculate').on('submit', function(e){
            e.preventDefault();
            $("#table_carrier").show();

            var data = document.getElementById("select_sumber_0").value+"_"+document.getElementById("ingre_0").value+"_"+document.getElementById("komposisi_0").value;

            for(i=1;i<=node;i++){
                data = data+"|"+document.getElementById("select_sumber_"+i).value+"_"+document.getElementById("ingre_"+i).value+"_"+document.getElementById("komposisi_"+i).value;
            }


            $.ajax({
                type: "GET",
                url: "{{ route('calculatepremix') }}",
                data: {data:data},
                dataType : "json",
                success: function(data){
                    $("#calculate_premix").show();
                    document.getElementById("result_calculate_premix").innerHTML = data;
                    console.log(data);
                }
            },"json")
        });    
    });

    function getDaftarMineral(id){
        mineral_id = "mineral["+id+"]";
        var mineral = document.getElementById(mineral_id).value;
        $.ajax({
            type: "GET",
            url : "{{ route('ingredientlist') }}",
            data : { mineral: mineral, x: id },
            dataType : "json",
            success : function(data){
                $("#daftar_mineral").show();
                result_id = "result_daftar_mineral["+id+"]";
                document.getElementById(result_id).innerHTML = data;
                // document.getElementById("carrier_persen").value = carried;   
                $('#carrier_onggok').hide();
            }
        },"json")
    }
    
    function getKuantitas(x){
        var mount = document.getElementById("mount_premix").value;
        ingre_id = "ingre";
        var persen = document.getElementById("ingre_"+x).value;
        var car = 0;
        for(i=0;i<=node;i++){
            car = car+parseInt(document.getElementById("ingre_"+i).value);
        }
        document.getElementById("carrier_persen").value = 100-car;
    }

    // function changeCarried(){

    // }

    function changeDetail(){
        id = document.getElementById("select_sumber").value;
        min_id = "min["+id+"]";
        max_id = "max["+id+"]";
        min = document.getElementById(min_id).value;
        max = document.getElementById(max_id).value;
        detail = "Minimal "+min+" dan Maksimal "+max+"";
        document.getElementById("detail").innerHTML = detail;
    }

</script>
@endsection