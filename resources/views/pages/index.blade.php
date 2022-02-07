
@extends('layouts.app')
@section('content')
<html>
<head>
	<meta http-equiv="Content-Language" content="sr" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>O nama</title>
</head>
 <body style="background-color: rgb(169, 228, 169) ;">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" >Rent a bike</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li ><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"> </span> Početna</a></li>
					<li class="active"><a href="#">O nama</a></li>
                   <li><a href="{{url('/bicikle')}}"><span class="glyphicon glyphicon-city"> </span> Bicikle</a></li>
					<li><a href="{{url('/rezervacije')}}"> Rezervacija</a></li>

				</ul>
                <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ms-auto">
                <ul class="nav navbar-nav">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
		</div>
			</div>
	</nav>
	<div class="container">
        <h3>Iznajmljivanje bicikli!</h3>
        <img src="{{asset('/images/bikes.jpg')}}" alt="Slika se ne moze prikazati" height="400" align="center"/>
		<div class="row"  align="center">
			<div class="col-md-6">
                <br>
				<div id="dream-land" style="color:black" align="left">Za razliku od automobila ili motora, bicikl je ekološka varijanta koja ne traži gorivo i ne prlja okolinu, nju možete parkirati u bilo kojem mestu i sa njim možete proći kroz bilo kakve kolone. Ali najbitnije je, da dok se vozite biciklom pružate korist vašem zdravlju. Plus Vi možete iznajmiti bicikl za nisku cenu i samim tim uštedeti novac. Osim toga, iznajmiti bicikl možete tačno za vreme, koje Vam je realno neophodno, ne plaćajući vreme kad bicikl samo stoji, za razliku od automobila, gde morate plaćati sva 24 sata, nezavisno na koliko dugo Vama je potreban automobil (jer moguće je da Vam je potreban samo na 2-3 sata).

                    Štaviše, dešava se da kad morate brzo se premestiti sa jedne lokacije na drugu, a marsuta javnog prevoza je neugodna između njih, a peške je daleko. Tada krenete da razmišljate o biciklu… Jednom rečju, bicikl ima samo pluseve i pozitivne momente!.
                    Fanatic rent a bike pruza petnaestogodišnje iskustvo i kvalitet usluge u iznajmljivanju bicikala, sto se pokazalo kao odlučujući faktor zašto stanovnici Kragujevca kao i ino turisti rentiraju bicikle u Fanatic-u. Naša specijalnost su rent a bike ture za grupe ino turista gde se za obilazak grada Kragujevca, iznajmljuje u jednoj turi preko 30 bicikala. Na sve ovo postoji i opcija biciklističkog vodiča – iskusnog vozača.
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
<div class="container">
	<div class="row">
	</div>
</div>
<br>
<footer footer-fixed-down>
	<div class="container" >
		<div class="row">
		</div>
	</div>
</footer>
</body>
</html>
@endsection

