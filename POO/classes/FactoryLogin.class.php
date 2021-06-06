<?php
    class FactoryLogin{
        static function tipoUsuario($usuario){
            switch($usuario){
                case "Admin":
                    return new Admin;
                    break;
                case "Funcionario":
                    return new User;
            }
        }
    }