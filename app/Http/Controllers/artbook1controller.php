<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artbook1controller extends Controller
{

  public function artbook(){
      return view("/artbook1");
  }



public function registrar(){

       $result["fecha"]=$result["anio"]."-".$result["mes"]."-".$result["dia"];

        $validar=[
          "nombre"=>"required|max:100",
          "apellido"=>"required",
          "email"=>"required",
          "password"=>"required|max:200",
          "password_confirmation"=>"required|max:200",
          "fecha"=> "required|date",
          "login"=> "required|max:100"
        ];

      $msj=[
        "required" => "El campo :attribute es requerido",
        "max"=> "El campo :attribute supera el maximo permitido",
        "date"=>"Ingrese una fecha correcta"
      ];

      $this->validate($result,$validar,$msj);

     $login= new Usuario();


     $login->name=$validar["nombre"];
     $login->apellido=$validar["apellido"];
     $login->password=$validar["password"];
     $login->email=$validar["email"];
     $login->fecha=$result["fecha"];

     $login->save();

     return view('perfil');


}

public function iniciarSesion(){
      return view("/home");

}




}
