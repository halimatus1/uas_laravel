@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('update.nilai', $nilai->id)}}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                    <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                        <option value="" disabled selected >--Pilih Nama--</option>
                                        @foreach ($mahasiswa as $m)
                                            <option value="{{ $m->id }}" {{ $nilai->mahasiswa_id == $m->id ? 'selected' : '' }}>{{ $m->user->name }}</option>
                                        @endforeach
                                   </select>
                                </div>
                                <div class="col">
                                    <label for="">Nama Mata Kuliah</label>
                                    <select name="matkul_id" id="matkul_id" class="form-control">
                                        <option value="" disabled selected >--Pilih Mata Kuliah--</option>
                                        @foreach ($matkul as $mt)
                                            <option value="{{ $mt->id }}" {{ $nilai->matkul_id == $mt->id ? 'selected' : '' }}>{{ $mt->nama_matkul }}</option>
                                        @endforeach
                                   </select>
                                </div>
                                <div class="col">
                                    <label for="">Nilai</label>
                                    <input type="number" value="{{ is_null($nilai) ? '' : $nilai->nilai }}" name="nilai" class="form-control" placeholder="masukan Nilai">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="form-row float-right">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-sm btn-primary" type="submit">UPDATE</button>
                                    <a href="{{ route('nilai') }}" class="btn btn-sm btn-danger">BATAL</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
