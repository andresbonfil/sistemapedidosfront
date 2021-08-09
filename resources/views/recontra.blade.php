@extends('layouts.plantilla')
@section('titulo','Sistema Pedidos')

@section('articulo1','Recuperar contraseña:')
@section('articulo2')
<form action="{{route('recontraPost')}}" method="POST">
    @csrf
  <br>Correo Electronico:<input name="email" type="email">[$] recaptcha
  <br><input type="submit" value="Recuperar cuenta"><br>
  </form>
  <br>¿Eres nuevo?<a href="{{route('registrarse')}}">Registrate</a>
  
@endsection

@section('piedepagina')
<a href="#">Mis redes sociales</a>
@endsection