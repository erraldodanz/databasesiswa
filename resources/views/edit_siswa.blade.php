@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Siswa</div>

                <div class="panel-body">
                    <form method="POST" action="/home/data_siswa/update/{{ $siswa_edit->id }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group" style="width: 250px">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $siswa_edit->nama }}">
                        </div>
                        <div class="form-group" style="width: 250px">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $siswa_edit->alamat }}">
                        </div>
                       <div class="form-group" style="width: 250px">
                            <label>No Telp</label>
                            <input type="text" class="form-control" name="notelp" value="{{ $siswa_edit->notelp }}">
                        </div>
                        <div class="form-group" style="width: 250px">
                            <label>Asal Sekolah</label>
                                <select class="form-control" name="asal_sekolah">
                                    <option>- Pilih -</option>
                                    <option value="SMK 3 Depok">SMK 3 Depok</option>
                                    <option value="SMK 4 Depok">SMK 4 Depok</option>
                                    <option value="SMK 5 Depok">SMK 5 Depok</option>
                                </select>
                        </div>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection