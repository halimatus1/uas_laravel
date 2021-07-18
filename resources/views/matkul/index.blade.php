@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    MATA KULIAH
                    <a href="{{ route('tambah.matkul') }}" class="btn btn-md btn-success float-right " >Tambah Data</a>
                    </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>KODE MATKUL</th>
                                <th>NAMA MATKUL</th>
                                <th>SKS</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach ($matkul as $b)
                            <tr>
                                <td>{{ $b->id}}</td>
                                <td>{{ $b->kd_matkul}}</td>
                                <td>{{ $b->nama_matkul}} </td>
                                <td>{{ $b->sks}}</td>
                                <td>
                                    <a href="{{ route('edit.matkul', $b->id)}}" class="btn btn-md btn-primary">Edit</a>
                                    <a href="{{ route('hapus.matkul', $b->id)}}" class="btn btn-md btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
