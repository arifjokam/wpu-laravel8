@extends('layouts.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            
            <a class="btn btn-outline-info my-3" href="/students/create" role="button">Tambah Data Mahasiswa</a>
            @if(session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif
            <ul class="list-group">
                @foreach($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $student->nama }}
                  <a class="btn btn-outline-info" href="/students/{{ $student->id }}" role="button">detail</a>
                </li>
                @endforeach
              </ul>
            
        </div>
    </div>
</div>
@endsection