@extends('layouts.app')
@section('content')
    <h1> Podaci o svim biciklama: </h1>
     @if(count($r)>0)
    @foreach ($r as $r1)
        <div class="well">
            <h3> <a href = "/bicikle/public/bicikle/{{$r1->id}}">Prikazi biciklu broj: {{$r1->id}}</a> </h3>
</div>
    @endforeach
    @endif
@endsection
