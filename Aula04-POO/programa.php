<?php
    require_once("ControleRemoto.php");
    require_once("Conta.php");

    $controleRemoto = new ControleRemoto();
    $controleRemoto->ligar();
    $controleRemoto->aumentarVolume();    
    echo "<hr>";
    
    $conta = new Conta();
    $conta->setNomeConta("Abirosvaldo");
    $conta->setTipoConta("cc");
    $conta->abrirConta();
    $conta->depositar(200);
    echo "<hr>";

    $conta2 = new Conta();
    $conta2->setNomeConta("Jurema");
    $conta2->setTipoConta("cp");
    $conta2->abrirConta();
    $conta2->depositar(200);
?>