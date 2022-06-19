<?php
    class Pessoa{
        //public $nome;
        //public $sobrenome;

        //private $nome;

        protected $nome;
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
    }
?>