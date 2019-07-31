<?php
    // Classes Modelos
    require_once("Mamifero.php");
    require_once("Ave.php");
    require_once("Peixe.php");
    require_once("Reptil.php");
    
    // Classes Filhas
    require_once("Cachorro.php");
    require_once("Arara.php");
    require_once("Tilapia.php");
    require_once("Tartaruga.php");
    
    echo "<h1>Mamífero</h1>";
    $mamifero = new Mamifero();
    $mamifero->setCorDePelos("Branca");
    echo "Cor de pelos: " . $mamifero->getCorDePelos();
    $mamifero->locomover();
    $mamifero->alimentar();
    $mamifero->emitirSom();
    echo "<hr>";

    echo "<h1>Cachorro</h1>";
    $cachorro = new Cachorro();
    $cachorro->setCorDePelos("Branca");
    echo "Cor de pelos: " . $cachorro->getCorDePelos();
    $cachorro->locomover();
    $cachorro->alimentar();
    $cachorro->emitirSom();
    $cachorro->roerOsso();
    echo "<hr>";
    
    echo "<h1>Ave</h1>";
    $ave = new Ave();
    $ave->setCorDePenas("Azul");
    echo "Cor de penas: " . $ave->getCorDePenas();
    $ave->locomover();
    $ave->alimentar();
    $ave->emitirSom();
    echo "<hr>";
    
    echo "<h1>Arara</h1>";
    $arara = new Arara();
    $arara->setCorDePenas("Azul");
    echo "Cor de penas: " . $arara->getCorDePenas();
    $arara->locomover();
    $arara->alimentar();
    $arara->emitirSom();
    echo "<hr>";
    
    echo "<h1>Peixe</h1>";
    $peixe = new Peixe();
    $peixe->setCorDeEscama("Cinza");
    echo "Cor de Escama: " . $peixe->getCorDeEscama();
    $peixe->locomover();
    $peixe->alimentar();
    $peixe->emitirSom();
    $peixe->soltarBolha();
    echo "<hr>";
    
    echo "<h1>Tilapia</h1>";
    $tilapia = new Tilapia();
    $tilapia->setCorDeEscama("Roxo");
    echo "Cor de Escama: " . $tilapia->getCorDeEscama();
    $tilapia->locomover();
    $tilapia->alimentar();
    $tilapia->emitirSom();
    $tilapia->soltarBolha();
    echo "<hr>";
    
    echo "<h1>Reptil</h1>";
    $reptil = new Reptil();
    $reptil->setCorDeEscama("verde");
    echo "cor de Escama: " . $reptil->getCorDeEscama();
    $reptil->locomover();
    $reptil->alimentar();
    $reptil->emitirSom();
    echo "<hr>";

    echo "<h1>Tartaruga</h1>";
    $tartaruga = new Tartaruga();
    $tartaruga->setCorDeEscama("verde");
    echo "Cor de escama: " . $tartaruga->getCorDeEscama();
    $tartaruga->locomover();
    $tartaruga->alimentar();
    $tartaruga->emitirSom();
    
    
    
    
    
    
    
?>