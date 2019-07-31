<?php 
    require_once("AspiradorDePo.php");
    require_once("Pendrive.php");
    require_once("AparelhoDeSom.php");

    $aspiradorDePo = new AspiradorDePo();
    
    $aspiradorDePo->ligar();
    echo "<br>";
    $aspiradorDePo->aspirar();
    echo "<br>";
    $aspiradorDePo->aspirar();
    echo "<br>";
    $aspiradorDePo->aspirar();
    echo "<br>";
    $aspiradorDePo->limparFiltro();
    echo "<br>";
    $aspiradorDePo->aspirar();
    echo "<br>";
    $aspiradorDePo->aspirar();
    echo "<br>";
    $aspiradorDePo->desligar();

    $penDrive = new Pendrive();
    $penDrive->listaDeMusicas = ["musica1.mp3", "musica2.mp3", "musica3.mp3"];
    echo "<hr>";

    $aparelhoDeSom = new AparelhoDeSom();
    
    $aparelhoDeSom->ligar();
    echo "<br>";
    $aparelhoDeSom->conectar($penDrive);
    echo "<br>";
    $aparelhoDeSom->aumentarVolume(10);
    echo "<br>";
    $aparelhoDeSom->aumentarVolume(10);
    echo "<br>";
    $aparelhoDeSom->aumentarVolume(10);
    echo "<br>";
    $aparelhoDeSom->diminuirVolume(10);
    echo "<br>";
    $aparelhoDeSom->diminuirVolume(10);
    echo "<br>";
    $aparelhoDeSom->diminuirVolume(10);
    echo "<hr>";
    $aparelhoDeSom->reproduzir();
    $aparelhoDeSom->avancarFaixa();
    echo "<br>";
    $aparelhoDeSom->reproduzir();
    $aparelhoDeSom->avancarFaixa();
    echo "<br>";
    $aparelhoDeSom->reproduzir();
    echo "<br>";
    $aparelhoDeSom->avancarFaixa();
    echo "<br>";
    $aparelhoDeSom->voltarFaixa();
    $aparelhoDeSom->reproduzir();
    echo "<br>";
    $aparelhoDeSom->voltarFaixa();
    $aparelhoDeSom->reproduzir();
    echo "<br>";
    $aparelhoDeSom->voltarFaixa();
    echo "<br>";
    $aparelhoDeSom->desligar();
    
?>