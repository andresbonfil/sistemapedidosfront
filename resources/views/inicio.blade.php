@extends('layouts.plantilla')
@section('titulo','Sistema Pedidos')

@section('articulo1','Iniciar Sesión')
@section('articulo2')
  <form action="#" metod="POST">
  <br>Correo Electronico:<input name="txtUsuario" type="text">
  <br>Contraseña:<input type="password">
  <br><input type="submit" value="Ingresar"><br>
  </form>
  <br>¿Eres nuevo?<a href="#">Registrate</a>
  <br>¿Olvidaste tu contraseña?<br><a href="">Recuperar contraseña</a>
  
@endsection

@section('piedepagina')
<a href="#">Mis redes</a>
@endsection