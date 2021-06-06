<?php
    require(__DIR__ . '/../classes/FactoryLogin.php');

    class Login{
        public function login($user, $password){
            //Pesquisa no banco
            if(/*for adm*/){
                $admin = FactoryLogin::tipoUsuario("Admin");
            }
            else{
                $funcionario = FactoryLogin::tipoUsuario("Funcionario");
            }
        }
    }