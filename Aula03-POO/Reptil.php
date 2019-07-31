<?php
    require_once("Animal.php");

    class Reptil extends Animal{       
        private $corDeEscama;
        
        public function locomover(){
            echo "<p>rastejando</p>";
        }

        public function alimentar(){
            echo "<p>Reptil comendo</p>";
        }

        public function emitirSom(){
            echo "<p>Geraaaldo</p>";           
        }

        function getCorDeEscama(){
            return $this->corDeEscama;
        }

        function setCorDeEscama($corDeEscama){
            $this->corDeEscama = $corDeEscama;
        }
}


?>