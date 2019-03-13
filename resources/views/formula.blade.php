@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    {!! Form::open(['url' => 'formula/calculate','class'=>'form-horizontal','method'=>'POST','target'=>'_blank']) !!}
    <div id="input-form">
        <div class="col-md-12">
            <div class=" panel panel-default">
                <div class="panel-heading">
                    <h4> Data Performan Sapi</h4>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>Bobot Badan</td>
                            <td><input type="number" name="bb" id="bb" ></td>
                            <td>Kg</td>
                        </tr>
                        <tr>
                            <td>Produksi Susu </td>
                            <td><input type="number" name="ps" id="ps"  ></td>
                            <td>Kg</td>
                        </tr>
                        <tr>
                            <td>Bulan Laktasi</td>
                            <td><input type="number" name="bl" id="bl"  ></td>
                            <td>Bulan</td>
                        </tr>
                    </table>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <input type="button" class="btn btn-success" value="Lihat Kebutuhan" onclick="calcKebutuhan()">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- <div class="col-md-6">
            <span>PEMBERIAN PAKAN</span>
             <table class="table">
                 <tr>
                     <td>Rumput Gajah</td>
                     <td><input type="number" name="berat" ></td>
                     <td>Kg</td>
                 </tr>
                 <tr>
                     <td>Jerami</td>
                     <td><input type="number" name="susu" ></td>
                     <td>Kg</td>
                 </tr>
                 <tr>
                     <td>Konsentrat</td>
                     <td><input type="number" name="laktasi" ></td>
                     <td>Kg</td>
                 </tr>
                 <tr>
                     <td>Onggok</td>
                     <td><input type="number" name="susu" ></td>
                     <td>Kg</td>
                 </tr>
                 <tr>
                     <td>Ampas Tahu</td>
                     <td><input type="number" name="susu" ></td>
                     <td>Kg</td>
                 </tr>
                 <tr>
                     <td>Dadak Halus</td>
                     <td><input type="number" name="susu" ></td>
                     <td>Kg</td>
                 </tr>
             </table>
        </div> -->
        <div class="col-md-12">
            <div class="panel panel-default" id="kebutuhan">
                <div class="panel-heading">
                    <h4> Kebutuhan Nutrien Ternak</h4>
                </div>
                <div class="panel-body">                       
                    <div id="result_laktasi"></div>   
                    <div id="button_pemberian_pakan" ></div>                 
                </div>
            </div>
            <!-- <span>ANALISIS KECUKUPAN NUTRIEN</span>
            <table class="table">
                <thead>
                    <td>Nutrien</td>
                    <td>Pemberian</td>
                    <td>Kebutuhan</td>
                    <td>Kelebihan / Kekurangan</td>
                    <td>Keterangan</td>
                </thead>
                <tr>
                    <td>BK</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>TDN</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Pk</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Ca</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>P</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table> -->
        </div>
        <div class="col-md-12">
            <div class="panel panel-default" id="data_pakan">
                <div class="panel-heading">
                    <h4> Pilih pakan ternak yang akan diformulasikan</h4>
                </div>
                <div class="panel-body">    
                    <div class='form-group feeds-container'>
                        <div id="0">
                            <div class="row">
                                <div class='col-md-4'>
                                    {!! Form::select('feeds[]',$feeds,null,['class'=>'form-control feed_list','placeholder' => '- Pilih Pakan -']) !!}
                                </div>
                                <div class='col-md-4'>
                                    {{ Form::number('kuantitas[]', '',['class' => 'form-control kuantitas','placeholder' => 'Kuantitas','min'=>'0'])}} 
                                </div>
                                <div class='col-md-4'>
                                    <a href='#' class='btn btn-sm btn-danger btn-remove'>Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="result-btn-add"></div>
                    <a href="#" class="btn btn-sm btn-success" id="btn-add-more"><i class="fa fa-plus-square-o"></i> Tambah Pakan</a>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                            {{ Form::button('<span class="fa fa-arrow-circle-o-right"></span> Hitung', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    </div>
</div>

<!-- for calculate laktasi -->
<script type="text/javascript">
    $(document).ready(function(){
        initHitung();
        $("#kebutuhan").hide();
        $("#data_pakan").hide();
        $(".x").val(0);
        $('.feed_list').select2({
            minimumInputLength: 0,
            width:250,
            dropdownAutoWidth : true
        });
    });

        $('#btn-add-more').on('click',function(e){
        var x = parseInt($('.x').val());
        $('.x').val(++x);
        var feed_list = '<div class="row"><div class="col-md-4">'+
                            '{!! Form::select("feeds[]",$feeds,null,["class"=>"form-control feed_list","placeholder" => "- Pilih Pakan -"]) !!}'+
                        '</div>';
        var template_feed = "<div class='form-group feeds-container'>"+
                                "<div id='"+x+"'>"+
                                    feed_list+
                                    "<div class='col-md-4'>"+
                                        "<input class='form-control kuantitas' placeholder='Kuantitas' name='kuantitas[]' type='number' min='0' value=''> "+
                                    "</div>"+
                                    "<div class='col-md-4'>"+
                                        "<a href='#' class='btn btn-sm btn-danger btn-remove'>Hapus</a>"+
                                    "</div>"+
                                "</div>"+
                            "</div></div>";

        e.preventDefault();
        $(".result-btn-add").before(template_feed);
        $('.feed_list').select2({
            minimumInputLength: 0,
            width:250,
            dropdownAutoWidth : true
        });
    });

    $(document).on('click','.btn-remove',function(e){
        e.preventDefault();
        $(this).parents('.feeds-container').remove();
    });

    function initHitung(){
        $("#input-form").submit(function(){
            jenis_pakan = document.getElementById('feeds').value;
            console.log(jenis_pakan);
        });
    }
    
    function calcKebutuhan(){
        var bb = parseInt($('#bb').val());
        var ps = parseInt($('#ps').val());
        var bl = parseInt($('#bl').val());

        $.ajax({
            type: "GET",
            url : "{{ route('ajax.calclaktasi') }}",
            data : { bb: bb, ps:ps, bl:bl },
            dataType : "json",
            success : function(data){ 
                $("#results").empty();
                $('#loading').hide();
                
                if(JSON.stringify(data) === JSON.stringify({}) || JSON.stringify(data) === JSON.stringify([])) 
                {
                    $("#alert").show();
                } 
                else 
                {        
                    $("#kebutuhan").show();         
                    document.getElementById("result_laktasi").innerHTML = data;
                    var button = "<a class='btn btn-success' onclick='showPemberianPakan()'> Create Formula</a>";
                    document.getElementById("button_pemberian_pakan").innerHTML = button;
                }
            }
        }, "json")        
    }
    
    function showPemberianPakan(){
        $("#data_pakan").show();  
    }
</script>
@endsection