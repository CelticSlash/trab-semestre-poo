<?php
    interface iOrdemServico{
        public function setOrdem(array $dados):bool;
        public function getOrdem(int $ordem_servico):array;
    }