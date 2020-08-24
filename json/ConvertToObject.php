<?php

require_once ("Usuario.php");

    function exibeDados($usuario){
        print("ID :" . $usuario->id);
        print("<br/>NOME :" .$usuario->nome);
        print("<br/>Idade:" . $usuario->idade);

    }

    $usuarioJSon = '{"id":1,"nome":"Rodrigo da Cruz Fujioka","idade":37}';

    $usuario = json_decode($usuarioJSon);

    exibeDados($usuario);
  
?>