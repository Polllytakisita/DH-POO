<?php
    require_once("Controlador.php");

    class ControleRemoto implements Controlador{
        private $ligado;
        private $volume;

        public function __construct(){
            $this->ligado = false;
            $this->volume = 0;
        }

        function getVolume(){
            return $this->volume;
        }

        function setVolume($volume){
            $this->volume = $volume;
        }
        
        function getLigado(){
            return $this->ligado;
        }

        function setLigado($ligado){
            $this->ligado = $ligado;
        }

        public function ligar(){
            if (!$this->getLigado()) {
                $this->setLigado(true);
                echo "<p>O aparelho foi ligado</p>";
            } else {
                echo "<p>O aparelho já está ligado</p>";
            }   
        }
        
        public function desligar(){
            if ($this->getLigado()) {
                $this->setLigado(false);
                echo "<p>O aparelho foi desligado</p>";
            } else {
                echo "<p>O aparelho já está desligado</p>";
            }
        }
        
        public function aumentarVolume(){
            if($this->getLigado()){
                if($this->getVolume() <= 50){
                    $this->setVolume($this->getVolume() + 1);
                    echo "<p>Aumentando, volume atual: " . $this->getVolume() . "</p>";
                } else {
                    echo "<p>Você atingiu o volume máximo: " . $this->getVolume() . "</p>";
                }
            } else {
                echo "<p>Impossível aumentar: aparelho desligado</p>";
            }
        }
        
        public function diminuirVolume(){
            if($this->getLigado()){
                if($this->getVolume() > 0){
                    $this->setVolume($this->getVolume() - 1);
                    echo "<p>Diminuindo, volume atual: " . $this->getVolume() . "</p>";
                } else {
                    echo "<p>Você atingiu o volume mínimo: " . $this->getVolume() . "</p>";
                }
            } else {
                echo "<p>Impossível diminuir: aparelho desligado</p>";
            }
        }
        
        public function ativarMudo(){
           if($this->getLigado()){
               if($this->getVolume > 0){
                   $this->setVolume(0);
                   echo "<p>Ativando mudo, volume atual: " . $this->getVolume() . "</p>";
               }
           } else { 
               echo "<p>Impossível ativar mudo: aparelho desligado</p>";
           }
        }
        
        public function desativarMudo(){
            if($this->getLigado()){
                if($this->getVolume() == 0){
                    $this->setVolume(20);
                    echo "<p>Desativando mudo, volume atual: " . $this->getVolume() . "</p>";
                }
            } else {
                echo "<p>Impossível desativar mudo: aparelho desligado</p>";
            }
        }
    }
?>