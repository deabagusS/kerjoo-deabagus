@extends('layout.main')
 
@section('title', 'Test Grid')
 
@section('content')
<div class="d-lg-flex d-md-flex bd-highlight">
    <div class="p-2 bd-highlight">
        <button type="button" class="btn btn-primary">Tambah</button>
        <button type="button" class="btn btn-secondary">Import</button>
        <button type="button" class="btn btn-success">Export</button>
    </div>
    <div class="p-2 flex-md-fill bd-highlight">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Search</span>
            <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
    </div>
    <div class="p-2 w-25 bd-highlight">
        <select class="form-select" aria-label="Default select example">
            <option selected>Tahun</option>
            @for ($i = 2023; $i >= 2021; $i--)
                <option value="1">{{$i}}</option>    
            @endfor
        </select>
    </div>
  </div>
@stop