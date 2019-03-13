@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-defauilt">
            <div class="panel-body">
                <!-- nama -->
                <a href="" style="font-size:20pt;text-decoration:none">{{$data->nama}}</a><br>
                <span class="date" style="font-size:10pt"></span>
                <hr>
                <div class="col-md-4">
                    <div class="card">
                        <!-- gambar -->
                        <img src="/images/{{$data->foto}}" alt="Rumput Gajah" class="img img-thumbnail" style="width: 300px; height: 170px;">
                    </div>
                </div>
                <div class="col-md-8">
                    <p>
                        <!-- detail -->
                        <p><div style="text-align:justify">&emsp; {{$data->penjelasan}}</div></p>
                        <div><b>Fungsi Mineral</b></div>
                        <p><div style="text-align:justify">&emsp; {{$data->fungsi}}</div></p>
                        <div><b>Defisiensi Mineral</b></div>
                        <p><div style="text-align:justify">&emsp; {{$data->defisiensi}}</div></p>
                    </p>
                </div>
                </div>
            </div>
        </diV> 
    </div>
</div>
@endsection