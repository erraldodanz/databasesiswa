@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Siswa</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('add')}}">
                        {{ csrf_field() }}
                        <div class="form-group" style="width: 250px">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group" style="width: 250px">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat">
                        </div>
                       <div class="form-group" style="width: 250px">
                            <label>No Telp</label>
                            <input type="text" class="form-control" name="notelp">
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
                <div class="panel-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                                <th>Asal Sekolah</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $s)
                            <tr>
                                <td>{{ $s->nama }}</td>
                                <td>{{ $s->alamat }}</td>
                                <td>{{ $s->notelp }}</td>
                                <td>{{ $s->asal_sekolah }}</td>
                                <td>
                                    <a href="/home/data_siswa/edit/{{ $s->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/home/data_siswa/hapus/{{ $s->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
@endsection
