<?php
    if(!isset($_SESSION)){
        session_start();
    }

    class AdministradorController{
        public function Login($cpf, $senha){
            require_once '../Model/Administrador.php';

            $administrador = new Administrador();
            $administrador->carregarAdministrador($cpf);
            if($administrador->setSenha() == $senha){
                $_SESSION['administrador'] = serialize($administrador);
                return true;
            }else{
                return false;
            }
        }

        public function gerarListaADM(){
            require_once '../Model/Administrador.php';

            $u = new Administrador();
            return $results = $u->listaCadastrados();
        }

        public function gerarUsuarioInformacoes($idusuario){
            require_once '../Model/Usuario.php';

            $u = new Usuario();
            return $results = $u->gerarInfoUsuario($idusuario);
        }

        public function gerarListaFA($idusuario){
            require_once '../Model/FormacaoAcad.php';
            $formacao = new FormacaoAcad();

            return $results = $formacao->listaFormacoes($idusuario);
        }
    }
?>