<?php
    require_once("Equipamento.php");
    
    class AparelhoDeSom extends Equipamento {
        private $volume;
        private $usb;
        private $numeroDeFaixa;

        public function __construct(){
            $this->volume = 0;
            $this->numeroDeFaixa = 0;
        }

        public function conectar($penDrive){
            $this->usb = $penDrive;
            echo "O pendrive foi conectado";
        }

        public function aumentarVolume($valorVolume){
            $this->volume += $valorVolume;
            if($this->ligado && $this->volume <= 20){
                echo "O valor do seu volume atualmente é $this->volume";
            } else if ($this->ligado){
                $this->volume = 20;
                echo "Você está no volume máximo que é $this->volume";
            }
        }

        public function diminuirVolume($valorVolume){
            $this->volume -= $valorVolume;
            if($this->ligado && $this->volume >= 0){
                echo "O valor do seu volume atualmente é $this->volume";
            } else if ($this->ligado){
                $this->volume = 0;
                echo "Você está no volume mínimo que é $this->volume";
            }
        }

        public function reproduzir(){
            if($this->ligado && $this->usb){
                if($this->numeroDeFaixa < count($this->usb->listaDeMusicas)){
                    echo "Tocando: " . $this->usb->listaDeMusicas[$this->numeroDeFaixa];
                }
            }
        }

        public function avancarFaixa(){
            if($this->ligado && $this->usb){
                if ($this->numeroDeFaixa < count($this->usb->listaDeMusicas) - 1){
                    $this->numeroDeFaixa++;
                } else {
                    echo "Você está escutando a última música da lista " . $this->usb->listaDeMusicas[$this->numeroDeFaixa];
                }
            }
        }

        public function voltarFaixa(){
            if($this->ligado && $this->usb){
                if ($this->numeroDeFaixa > 0) {
                    $this->numeroDeFaixa--;
                } else {
                    echo "Você está na primeira música da lista " . $this->usb->listaDeMusicas[$this->numeroDeFaixa];
                }
            }
        }
    }
?>