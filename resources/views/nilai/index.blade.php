@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Nilai Mahasiswa
                    <a href="{{ route('tambah.nilai') }}" class="btn btn-md btn-success float-right " >Tambah Data</a>
                    </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>NPM</th>
                                <th>NAMA </th>
                                <th>NAMA MATKUL</th>
                                <th>SKS</th>
                                <th>NILAI</th>
                                <th>AKSI</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($nilai as $n)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $n->mahasiswa->npm}}</td>
                                <th>{{ $n->mahasiswa->user->name}}</th>
                                <th>{{ $n->matkul->nama_matkul}}</th>
                                <td>{{ $n->matkul->sks}}</td>
                                <td>{{ $n->nilai }}</td>
                                <td>
                                    <a href="{{ route('edit.nilai', $n->id)}}" class="btn btn-md btn-primary">Edit</a>
                                    <a href="{{ route('hapus.nilai', $n->id)}}" class="btn btn-md btn-danger">Hapus</a>
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
