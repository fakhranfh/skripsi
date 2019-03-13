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
                        <p><div style="text-align:justify">&emsp; {{$data->detail}}</div></p>
                        <div><b>Tabel Nutrient</b></div>
                        <table class="table">
                            <thead>
                                <td>No</td>
                                <td>Nama Nutrient</td>
                                <td>Simbol</td>
                                <td>Komposisi</td>
                            </thead>    
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Bahan Kering</td>
                                    <td>BK</td>
                                    <td>{{$data->BK}}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Protein Kasar</td>
                                    <td>PK</td>
                                    <td>{{$data->PK}}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Total Digestable Nutrient</td>
                                    <td>TDN</td>
                                    <td>{{$data->TDN}}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Calsium</td>
                                    <td>Ca</td>
                                    <td>{{$data->CA}}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Phospor</td>
                                    <td>P</td>
                                    <td>{{$data->P}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </p>
                </div>
                </div>
            </div>
        </diV> 
    </div>
</div>
@endsection