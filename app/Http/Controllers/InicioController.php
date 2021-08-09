<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InicioController extends Controller
{
    public function registrarsePost(Request $request){
        $respuesta =
        Http::post('http://127.0.0.1:8000/api/usuario', [
            'txtNombre' => $request->nombre,
            'txtTipoc' => $request->tipoc,
            'txtEmail' => $request->email,
            'txtPassword' => $request->password
        ]);
        $dato=json_decode($respuesta);
        if($dato->estatus=='Aprobado'){
            
            return 'Tu correo electronico: <b>'.$dato->info.'</b> ha sido registrado exitosamente.
            <br>Da click en el enlace para <h1><a href="../public/">Iniciar Sesión</a></h1>';
        }
        if($dato->estatus=='Rechazado'){
            return '<b>ERROR :</b> El correo electronico: <b>'.$dato->info.'</b><br>
            ya existe en el sistema, intente recuperar su contraseña
            <h1><a href="../public/">Regresar</a><h1>';
        }        
        return 'Ocurrio un problema con la petición';
    }
    
    public function recontraPost(Request $request){
        $respuesta =
        Http::post('http://127.0.0.1:8000/api/usuario/recontra', [
            'txtEmail' => $request->email
        ]);
        $dato=json_decode($respuesta);
        
        if($dato->estatus=='Aprobado'){
            
            return 'Se ha enviado un correo a : <b>'.$dato->info.'</b> sigue las instrucciones.
            <br>Da click en el enlace para <h1><a href="../public/">Iniciar Sesión</a></h1>';
        }
        if($dato->estatus=='Rechazado'){
            return '<b>ERROR :</b> El correo electronico: <b>'.$dato->info.'</b><br>
            No existe en nuestra base de datos, verifique su informacion.
            <h1><a href="recontra">Regresar</a><h1>';
        }        
        return 'Ocurrio un problema con la petición';
    }

}
