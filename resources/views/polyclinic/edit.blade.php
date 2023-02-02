@extends('layouts.main')

@section('content')
<h3>Edit poliklinik</h3>
<div class="col-sm-12">
        @if(session()->get('sucess'))
        <div class="alert alert-sucess">
            {{session()->get('sucess')}}
        </div>
        @endif
</div>
<form method="POST" action="{{route ('polyclinic.update', $polyclinic->id) }}">
@method('PUT')
@csrf
<div class="form-group">
    <label for="name">Nama Poli</label>
    <input type="text" class="form-control" name="name" value="{{ $polyclinic->name }}"/>
</div>
<div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>
</form>
@endsection