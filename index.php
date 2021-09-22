<?php
    include_once('user.php');
    include_once('Sucursal.php');
    include_once('Pos.php');
    include_once('Orden.php');

    $user = new User();
    //  $json = $user->create();

    $sucursal = new Sucursal();

    //$json = $sucursal->create();

    $pos = new Pos();
    
    //$json = $pos->create('CAJA0002');

    $orden = new Orden();
    $json= $orden-> create();


    echo $json;

?>