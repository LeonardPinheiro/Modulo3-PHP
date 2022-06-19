<?php
    class Paciente{
        private $nome;
        private $rg;
        private $cpf;
        private $endereco;
        private $profissao;

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }

        public function setRg($rg){
            $this->rg = $rg;
        }
        public function getRg(){
            return $this->rg;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
        public function getCpf(){
            return $this->cpf;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }
        public function getEndereco(){
            return $this->endereco;
        }

        public function setProfissao($profissao){
            $this->profissao = $profissao;
        }

        public function getProfissao(){
            return $this->profissao;
        }
    }
?>