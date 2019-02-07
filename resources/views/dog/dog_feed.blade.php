@extends('layouts.feed_master')
@section('title', 'Inicio')
@section('content')



<meta name="csrf-token" content="{{ csrf_token() }}"><br><br><br>

<input type="button" value="Todos" id="filtroTodos" class="btn btn-primary">
<input type="button" value="Machos" id="filtroMachos" class="btn btn-primary">
<input type="button" value="Hembras" id="filtroHembras" class="btn btn-primary">
@if(Session::has('info'))
<p></p>
    <center><div class="alert alert-info" style="width: 350px;">
        <button type="button"
            class="close"
            data-dismiss="alert"
            aria-hidden="true">&times;</button>
        {!! session()->get('info') !!}
    </div></center>
@endif

<div class="container" id="app">
  @foreach($dogs->sortByDesc('id') as $dog)
  <!-- sortByDesc es para que muestre los usuarios registrados mas recientemente primero -->
   @if ( $dog->user_id != Auth::user()->id)
  <div class="box {{ $dog->gender == 1 ? 'hembra' : 'macho'}}">
  <onlineuser v-bind:friend="{{ $dog->user }}" v-bind:onlineusers="onlineusers"></onlineuser>
</h3>

    <div class="box-sub">
      <div class="{{ $dog->gender == 1 ? 'avatarFemenino' : 'avatarMasculino'}}">
      @if ($dog->avatar != 'user.png')
        <a href="{{route('dog.show', $dog->id)}}"><img src="{{ $dog->avatar }}" /></a>
        @else
        <a href="{{route('dog.show', $dog->id)}}"><img src="/img/user.png"/></a>
        @endif
    </div>
    </div>
    <b><p>Nombre: {{$dog->name}}</p></b>
    <p>Raza: {{$dog->race}}</p>
    <p>Edad: {{$dog->age}} {{ $dog->age > 1 ? 'años' : 'año'}}</p>
    <div class="container likedislikebuttons">
      <a class="btn btn-primary" href="{{ route('friend.addFriend', ['id'=>$dog->id]) }}" id="like"> <i class="fa fa-thumbs-up"></i></a>
      <a class="btn btn-danger" href="#" id="dislike"> <i class="fa fa-thumbs-down"></i></a>
  </div>
  </div>

  @endif
@endforeach
</div>
<script src="{{ mix('/js/app.js') }}"></script>
<script src="js/filtro.js"></script>
@endsection
