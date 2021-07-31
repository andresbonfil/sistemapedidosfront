@extends('layouts.plantilla')
@section('title','Sistema Pedidos')

@section('nav')
<ul>
    <li><a href="#" style="color: #A4D2CF">Inicio</a></li>
    <li><a href="#">Ingresar</a></li><!--{{route('ingresar')}}-->
    <li><a href="#">Consulta</a></li><!--{{route('consult')}}-->
    <li><a href="#">Contactanos</a></li><!--{{route('contact')}}-->
</ul>
@endsection
@section('content')

<div class="piecito"> 
  <ul>
    <li>Acceso directo a los modulos del sistema: </li>
    <li><a href="">Vacunas</a></li><!--{{route('vacunas.index')}}-->
    <li><a href="">Pacientes</a></li><!--{{route('pacientes.index')}}-->
    <li><a href="">Usuarios</a></li><!--{{route('usuarios.index')}}-->
    <li><a href="">Aplicaciones</a></li><!--{{route('aplicaciones.index')}}-->
  </ul>
</div>

@endsection