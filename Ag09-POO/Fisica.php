<?php
    require_once 'Pessoa.php';

    class Fisica extends Pessoa{
        private $cpf;

        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }
        public function getCpf(){
            return $this->cpf;
        }

        public function mudarNome(){
            $this->nome = "Protegido";
        }
    }
?>