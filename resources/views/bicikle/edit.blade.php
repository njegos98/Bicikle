@extends('layouts.app')
@section('content')
    <h1> Izmeni podatke o izabranom biciklu </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\BiciklController@update',$r->id],'method'=>'POST']) !!}
   <!--  ovo ispod je bootstrap -->
   <div class="form-group">
    {{Form::label('model','Model')}}

     {{Form::text('model',$r->model,['class'=>'form-control','placeholder'=>'model'])}}
</div>
<div class="form-group">
     {{Form::label('boja','Boja')}}

    {{Form::text('boja',$r->boja, ['class'=>'form-control','placeholder'=>'boja'])}}
</div>
<div class="form-group">
    {{Form::label('materijal','Materijal')}}

   {{Form::text('materijal',$r->materijal, ['class'=>'form-control','placeholder'=>'materijal'])}}
</div>
<div class="form-group">
    {{Form::label('stanje','Stanje')}}

    {{Form::text('stanje',$r->stanje, ['class'=>'form-control','placeholder'=>'stanje'])}}
</div>
<div class="form-group">
    {{Form::label('uzrast','Uzrast')}}

   {{Form::text('uzrast',$r->uzrast, ['class'=>'form-control','placeholder'=>'uzrast'])}}
</div>
<div class="form-group">
    {{Form::label('cena','Cena')}}

    {{Form::text('cena',$r->cena, ['class'=>'form-control','placeholder'=>'cena'])}}
</div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
