@extends('layouts.profile_master')
@section('title', 'Perfil')
@section('content')
<div class="container">

  <div class="box">
    <h3>{{ $user->dog->name }}</h3>
    <div class="box-sub">
      <div class="{{ $user->dog->gender  == 1 ? 'avatarFemenino' : 'avatarMasculino'}}">
      <img src="/public/uploads/{{ $user->dog->avatar }}" />
    </div>
    </div>
    <p>Raza: {{ $user->dog->race }}</p>
    @if($user->dog->age > 1)
    <p>Edad: {{ $user->dog->age }} años</p>
    @else
    <p>Edad: {{ $user->dog->age }} año</p>
    @endif
     <a class="btn btn-light btn-sm" rel="publisher" data-toggle="modal" data-target="#editProfileModal"><i class="fa fa-cogs iconEditProfile"></i></a>
</div>
  @endsection