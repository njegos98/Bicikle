@extends('layouts.app')
@section('content')
<a href="/bicikle/public/bicikle" class="btn btn-default"> Vrati se nazad</a>
<h1> Podaci o izabranom biciklu: {{$r->id}}</h1>
    <div> Model: {{$r->model}} </div>
    <div> Boja: {{$r->boja}} </div>
    <div> Materijal: {{$r->materijal}} </div>
    <div> Stanje: {{$r->stanje}} </div>
    <div> Uzrast: {{$r->uzrast}} </div>
    <div> Cena: {{$r->cena}} </div>
    <a href="/bicikle/public/bicikle/{{$r->id}}/edit" class="btn btn-defualt">Izmeni</a>
    {!!Form::open(['action'=>['App\Http\Controllers\BiciklController@destroy',$r->id,
    'method'=>'POST','class'=>'pull-right']])!!}
    {!!Form::hidden('_method','DELETE')!!}
    {!!Form::submit('Izbrisi',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection
