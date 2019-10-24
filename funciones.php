<?php

// Funciones de registro nuevo usuario

function validarRegistracion($datos) {
  $errores = [];

  //Validar nombre. Valida > 4 caracteres.
  if (strlen($datos["name"]) < 5){
    $errores["name"] = "El nombre debe contener más de 4 caracteres";
  }

  //Validar password
  if ($datos["password"] == ""){
    $errores["password"] = "Debe completar el password";
  }

  //Validar confirmacion password completa.
  if ($datos["cpassword"] == ""){
    $errores["cpassword"] = "Debe completar la confirmación del password";
  }

  //Validar password sea igual a confirmar password.
  if($datos["password"] != $datos["cpassword"]){
    $errores["password_conf"] = "Password y confirmacion deben ser iguales";
  }

  //Validar email esté completo.
  if($datos["email"] == ""){
    $errores["email"] = "Debe completar el campo email";
  }

  //Validar email sea un email.
  if( filter_var($datos["email"], FILTER_VALIDATE_EMAIL) == false ){
    $errores["email"] = "Debe ingresar un mail válido";
  }
  //Validar email no repetido;
  //Declaro variable bandera
  $flag = 0; 
  //Leo el archivo JSON
  $usuarios = file_get_contents("usuarios.json");
  //Lo convierto en un Array
  $usuariosArray = json_decode($usuarios, true);
  foreach($usuariosArray as $elemento){
    if($datos["email"] === $elemento["email"]){
      $flag = 1;
    }
  }
  // var_dump($flag); exit;
  if($flag == 1){
    $errores["email"] = "El email ya esta siendo utilzado.";
  }
  return $errores;
}

function generarNuevoUsuario($datos){
  $usuario = [
    "id" => nuevoID(),
    "email" => $datos["email"],
    "name" => $datos["name"],
    "password" => encriptarContraseña($datos)
  ];

  return $usuario;
}

function encriptarContraseña($datos){
  $hash = password_hash($datos["password"],PASSWORD_DEFAULT);
  return $hash;
}

function nuevoID(){

  // Verifico si el archivo existe
  if(!file_get_contents("usuarios.json")){
    return 1;
  }
  //Leo el archivo JSON
  $usuarios = file_get_contents("usuarios.json");
  //Lo convierto en un Array
  $usuariosArray = json_decode($usuarios, true);
  //Cuento los elementos
  $cantidadElementos = count($usuariosArray);
  $id = $cantidadElementos + 1;

  return $id;
}

function agregarUsuarioJSON($usuario){
  //Convierto los datos del usuario en JSON
  json_encode($usuario);
  //Leo el archivo JSON
  $usuariosJSON = file_get_contents("usuarios.json");
  //Lo convierto en un Array
  $usuariosArray = json_decode($usuariosJSON, true);
  //Agrego el nuevo usuario al Array
  $usuariosArray[] = $usuario;
  //Vuelvo a convertir el Array en un JSON
  $usuariosArrayNuevo = json_encode($usuariosArray);
  //Sobreescribo el archivo JSON
  file_put_contents("usuarios.json",$usuariosArrayNuevo);
}

function generarPersistenciaNombre($errores){
  if(!isset($errores["name"])){
    $nombreDefault = $_POST["name"];
    return $nombreDefault;
  } 
}

function generarPersistenciaEmail($errores){
  if (!isset($errores["email"])) {
    $emailDefault = $_POST["email"];
    return $emailDefault;
  }
}
// Funciones de login

function validarLogin($datos){
  //Declaro variable bandera
  $mailCoincide = false; 
  $passwordCoincide = false; 
  //Leo el archivo JSON
  $usuarios = file_get_contents("usuarios.json");
  //Lo convierto en un Array
  $usuariosArray = json_decode($usuarios, true);
  //Recorro el Array

  foreach($usuariosArray as $elemento){
    $errores = [];
    if($datos["email"] == $elemento["email"]){
      $mailCoincide = true;
      if(password_verify($datos["password"],$elemento["password"])){
        $passwordCoincide = true;
      } 
    }
    }
    if(!$mailCoincide){
      $errores["email"] = "El email no es correcto";
    }
    if(!$passwordCoincide){
      $errores["password"] = "La contraseña no es correcta";
    }
    return $errores;
}

function buscarIDUsuario($datosIngresados){
  // Verifico si el archivo existe
  if(!file_get_contents("usuarios.json")){
    return 1;
  }
  //Leo el archivo JSON
  $usuarios = file_get_contents("usuarios.json");
  //Lo convierto en un Array
  $usuariosArray = json_decode($usuarios, true);
  foreach($usuariosArray as $elemento){
    if($datosIngresados["email"] === $elemento["email"]){
      return $elemento; 
    }
  }
}

?>
