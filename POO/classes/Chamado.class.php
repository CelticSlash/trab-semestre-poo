<?php
    require(__DIR__ . '/../interfaces/user.interface.php');

    class Chamado extends Database implements iOrdemServico{
        protected $razao_social;
        protected $nome_responsavel;
        protected $endereco;
        protected $cidade;
        protected $estado;
        protected $data_abertura;
        protected $ordem_sevico;
        protected $equipamento;
        protected $garantia;
        protected $patrimonio;
        protected $marca;
        protected $modelo;
        protected $descricao;
        protected $valor;
        protected $situacao;

        public function setOrdem(array $dados): bool
        {
            $this->razao_social = $dados['razao_social'] ?? null;
            $this->nome_responsavel = $dados['nome_responsavel'] ?? null;
            $this->endereco = $dados['endereco'] ?? null;
            $this->cidade = $dados['cidade'] ?? null;
            $this->estado = $dados['estado'] ?? null;
            $this->data_abertura = $dados['data_abertura'] ?? null;
            $this->ordem_sevico = $dados['ordem_servico'] ?? null;
            $this->equipamento = $dados['equipamento'] ?? null;
            $this->garantia = $dados['garantia'] ?? null;
            $this->patrimonio = $dados['patrimonio'] ?? null;
            $this->marca = $dados['marca'] ?? null;
            $this->modelo = $dados['modelo'] ?? null;
            $this->descricao = $dados['descricao'];
            $this->valor = $dados['valor'];
            $this->situacao = $dados['situacao'];

            return true;
        }

        public function saveOrdem(){
            if(empty($this->id)){
                $this->insert();
            }
            else{
                $this->updateOrdem();
            }
        }

        public function updateOrdem(){
            $stmt = $this->prepare('UPDATE tbl_ordem SET situacao = :situacao WHERE ordem_servico = :ordem_servico');

            if($stmt->execute([':situacao' => $this->situacao, ':ordem_servico' => $this->ordem_servico]))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function finalizarOrdem(){
            $stmt = $this->prepare('UPDATE tbl_ordem SET situacao = :situacao, valor = :valor WHERE ordem_servico = :ordem_servico');

            if($stmt->execute([':situacao' => $this->situacao, ':valor' => $this->valor, ':ordem_servico' => $this->ordem_servico]))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function insert()
        {
            $stmt = $this->prepare('INSERT INTO tbl_admin (user, senha) VALUES (:user, :senha)');

            if($stmt->execute([':user' => $this->user, ':senha' => $this->senha]))
            {
                return true;
            }
            return false;
        }

        public function getOrdem(int $ordem_servico): array
        {
            return [];
        }

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