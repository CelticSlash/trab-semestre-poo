<?php
    class Admin extends User{
        function demitirFuncionario(){
            $this->verificaPendencias();
            parent::deleteUser();
        }

        private function verificaPendencias(){
            
        }
    }