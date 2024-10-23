@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @empty($user)
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                    Data yang Anda cari tidak ditemukan.
                </div>
            @else
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{ $user->user_id }}</td>
                    </tr>
                    <tr>
                        <th>Level</th>
                        <td>{{ $user->level->level_nama }}</td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td>{{ $user->username }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $user->nama }}</td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td>********</td>
                    </tr>
                    <tr>
                        <th>Foto</th>
                        <td><img src="{{ asset($user->foto) }}" height="100"></td>
                    </tr>
                </table>
            @endempty
            
            <div class="mt-3 text-center">
                <a class="btn btn-sm btn-default ml-1" href="{{ url('user') }}">Kembali</a>
                <a class="btn btn-sm btn-default ml-1" href="{{ url('user/'.Auth::user()->user_id.'/edit') }}">Edit Profil</a>
            </div>
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
@endpush