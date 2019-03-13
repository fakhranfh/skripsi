@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-defauilt">
        <div style="text-align:center"><p style="font-size:20pt;text-decoration:none">Sumber Mineral</p></div>
            <!-- dari sini -->
            <!-- 1 -->
            @foreach($data as $data)
            <div class="panel-body">
                <!-- judul -->
                <a href="/sumber_detail/{{$data->id}}" style="font-size:20pt;text-decoration:none">{{$data['nama']}}</a><br>
                <span class="date" style="font-size:10pt"></span>
                <hr>
                <div class="col-md-4">
                    <div class="card">
                        <!-- gambar -->
                        <img src="/images/{{$data['foto']}}" alt="Rumput Gajah" class="img img-thumbnail" style="width: 300px; height: 170px;">
                    </div>
                </div>
                <div class="col-md-8">
                    <p>
                        <!-- penjelasan -->
                        <p style="text-align:justify"><span style="color:#27ae60"><strong>{{$data['nama']}}</strong></span> {{str_limit($data['detail'],180)}}</p>
                            <a href="/sumber_detail/{{$data->id}}" class="more">Continue reading →</a>
                    </p>
                </div>  
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection