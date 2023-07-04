@extends('layout.main')
 
@section('title', 'Test Grid')
 
@section('content')
    <div class="row">
        @for ($i = 0; $i < 4; $i++)
            <div class="col-lg-3 col-md-6 col-sm-12 border border-primary">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eum accusantium minima distinctio enim magnam sunt, tenetur officia vero, laboriosam mollitia possimus? Aliquam accusamus, dolorem enim facilis neque molestias quasi?
            </div>
        @endfor
    </div>
@stop