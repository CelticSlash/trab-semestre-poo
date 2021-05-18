<?php
    class GetDados extends Chamado{
        public function getAllAnalise():array
        {
            $stmt = $this->prepare('SELECT * FROM tbl_admin WHERE situacao LIKE "%Em Análise%"');

            $stmt->execute();

            return $stmt->fetchAll();
        }

        public function getAllServico():array
        {
            $stmt = $this->prepare('SELECT * FROM tbl_admin LIKE "%Em Serviço%"');

            $stmt->execute();

            return $stmt->fetchAll();
        }

        public function getAllConcluido():array
        {
            $stmt = $this->prepare('SELECT * FROM tbl_admin LIKE "%Concluído%"');

            $stmt->execute();

            return $stmt->fetchAll();
        }
    }