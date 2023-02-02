@extends('layouts.main')

@section('content')
<h3>Data dokter</h3>
<a href="/dokter/create"class="btn btn-success">Tambah Data</a>
<div class="col-sm-12">
        @if(session()->get('sucess'))
        <div class="alert alert-sucess">
            {{session()->get('sucess')}}
        </div>
        @endif
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th width="280px">Action</th>
            
    </thead>
    <tbody>
        @foreach($dokters as $dokter)
        <tr>
            <td>{{$loop->iteration}}</td>
            {{-- <td>{{$polyclinic->id}}</td> --}}
            <td>{{$dokter->name}}</td>
            
            <td>
                <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('dokter.destroy', $dokter->id) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>  
        </tr>
        @endforeach
    </tbody>
</table>
@endsection