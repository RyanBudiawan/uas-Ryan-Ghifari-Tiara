@extends('layouts.main')

@section('content')
<h3>Edit dokter</h3>
<div class="col-sm-12">
        @if(session()->get('sucess'))
        <div class="alert alert-sucess">
            {{session()->get('sucess')}}
        </div>
        @endif
</div>
<form method="POST" action="{{route ('dokter.update', $dokter->id) }}">
@method('PUT')
@csrf
<div class="form-group">
    <label for="name">Nama Dokter</label>
    <input type="text" class="form-control" name="name" value="{{ $dokter->name }}"/>
</div>
<div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>
</form>
@endsection