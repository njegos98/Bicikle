@extends('layouts.app')
@section('content')
    <h1> Unesi novi bicikl </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\BiciklController@store'],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('model','Model')}}

         {{Form::text('model','',['class'=>'form-control','placeholder'=>'model'])}}
    </div>
    <div class="form-group">
         {{Form::label('boja','Boja')}}

        {{Form::text('boja','', ['class'=>'form-control','placeholder'=>'boja'])}}
    </div>
    <div class="form-group">
        {{Form::label('materijal','Materijal')}}

       {{Form::text('materijal','', ['class'=>'form-control','placeholder'=>'materijal'])}}
   </div>
    <div class="form-group">
        {{Form::label('stanje','Stanje')}}

        {{Form::text('stanje','', ['class'=>'form-control','placeholder'=>'stanje'])}}
    </div>
    <div class="form-group">
        {{Form::label('uzrast','Uzrast')}}

       {{Form::text('uzrast','', ['class'=>'form-control','placeholder'=>'uzrast'])}}
   </div>
    <div class="form-group">
        {{Form::label('cena','Cena')}}

        {{Form::text('cena','', ['class'=>'form-control','placeholder'=>'cena'])}}
    </div>
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
