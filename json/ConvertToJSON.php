<?php

require_once ("Usuario.php");

    function exibeJson($usuario){

        $usuarioJson = json_encode($usuario);
        print($usuarioJson);
    }

    $usuario = new Usuario();
    $usuario->setId(1);
    $usuario->setNome("Rodrigo da Cruz Fujioka");
    $usuario->setIdade(37);

    exibeJson($usuario);

?>