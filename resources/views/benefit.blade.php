@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <td>No</td>
                        <td>Jenis Mineral</td>
                        <td>Fungsi</td>
                    </thead>
                    <!-- darisini -->
                    <tr>
                        <!-- nomer -->
                        <td>1</td>
                        <!-- nama -->
                        <td>
                            Calsium (Ca) <br>
                            <!-- gambar -->
                            <img src="/images/kalsium.jpg" alt="Rumput Gajah" class="img img-thumbnail" style="width: 300px; height: 170px;">
                        </td>
                        <!-- fungsi -->
                        <td>Proses pembentukan tulang dan gigi</td>
                    </tr>
                    <!-- sampesini -->
                </table>
            </div>
        </div>
    </div>
</div>
@endsection