<?php
    class Conta {
        public $codigoDaConta;
        protected $nomeConta;
        private $saldo;
        private $tipoConta;
        private $situacao;
        private $tarifa;

        public function __construct(){
            $this->situacao = false;
            $this->saldo = 0;
        }

        function getNomeConta(){
            return $this->nomeConta;
        }

        function setNomeConta($nome){
            $this->nomeConta = $nome;
        }

        function getSaldo(){
            return $this->saldo;
        }

        function setSaldo($valor){
            $this->saldo = $valor;
        }

        function getTipoConta(){
            return $this->tipoConta;
        }

        function setTipoConta($tipoDeConta){
            $this->tipoConta = $tipoDeConta;
        }

        function getTarifa(){
            return $this->tarifa;
        }

        function setTarifa($tarifa){
            $this->tarifa = $tarifa;
        }

        function getSituacao(){
            return $this->situacao;
        }

        function setSituacao($situacao){
            $this->situacao = $situacao;
        }

        function setCodigoDaConta($codigo){
            $this->codigoDaConta = $this->codigoDaConta + $codigo;
        }

        public function abrirConta(){
            if($this->getNomeConta() !== null && $this->getTipoConta() !== null){
                $this->setCodigoDaConta(1);
                $this->setSituacao(true);
            } else {
                echo "<p>Você necessita informar seu nome e um tipo de conta</p>";
            }

            if($this->getSaldo() == 0 && $this->getTipoConta() == "cc"){
                $this->setTarifa(10);
                $this->setSaldo(100);
                echo "<p>Conta Corrente criada com sucesso</p>";
            } else if ($this->getSaldo() == 0 && $this->getTipoConta() == "cp"){
                $this->setTarifa(20);
                $this->setSaldo(200);
                echo "<p>Conta Poupança criada com sucesso</p>";
            }
        }

        public function depositar($valor){
            if($this->getSituacao()){
                $this->setSaldo($this->getSaldo() + $valor);
                echo "<p>O valor foi depositado, saldo atual: " . $this->getSaldo() . "</p>";
            } else {
                echo "<p>Conta cancelada. Não foi possível efetuar depósito</p>";
            }
        }

        
    }
?>