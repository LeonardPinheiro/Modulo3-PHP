<?php
    class Administrador{
        private $id;
        private $nome;
        private $cpf;
        private $senha;

        public function getID($id){
            $this->id = $id;
        }

        public function setID(){
            return $this->id;
        }

        public function getNome($nome){
            $this->nome = $nome;
        }

        public function setNome(){
            return $this->nome;
        }

        public function getCPF($cpf){
            $this->cpf = $cpf;
        }

        public function setCPF(){
            return $this->cpf;
        }

        public function getSenha($senha){
            $this->senha = $senha;
        }

        public function setSenha(){
            return $this->senha;
        }

        public function carregarAdministrador($cpf){
            require_once 'ConexaoBD.php';

            $con = new ConexaoBD();
            $conn = $con->conectar();
            if($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM administrador WHERE cpf = ".$cpf ;
            $re = $conn->query($sql);
            $r = $re->fetch_object();
            if($r != null){
                $this->id = $r->idadministrador;
                $this->nome = $r->nome;
                $this->cpf = $r->cpf;
                $this->senha = $r->senha;
                $conn->close();
                return true;
            }else{
                $conn->close();
                return false;
            }
        }

        public function listaCadastrados(){
            require_once 'ConexaoBD.php';

            $con = new ConexaoBD();
            $conn = $con->conectar();
            if($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT idadministrador, nome, cpf FROM administrador;" ;
            $re = $conn->query($sql);
            $conn->close();
            return $re;
        }

        public function listaFormacoes($idusuario){
            require_once 'ConexaoBD.php';

            $con = new ConexaoBD();
            $conn = $con->conectar();
            if($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM formacaoacademica WHERE idusuario = '".$idusuario."'" ;
            $re = $conn->query($sql);
            $conn->close();
            return $re;
        }
    }
?>