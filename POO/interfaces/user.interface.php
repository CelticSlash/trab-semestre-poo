<?php
    interface iUser{
        public function setDados(array $dados):bool;
        public function getDados(int $id):array;
    }