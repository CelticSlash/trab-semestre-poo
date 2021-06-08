<?php
    require(__DIR__ . '/../interfaces/ordemservico.interface.php');
    require(__DIR__ . '/../classes/abstratas/Database.class.php');

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

        public function updateOrdem($ordem, $situacao):bool{
            $this->ordem_sevico = $ordem;
            $this->situacao = $situacao;

            $stmt = $this->prepare('UPDATE tbl_chamado SET situacao = :situacao WHERE ordem_servico = :ordem_servico');

            if($stmt->execute([':situacao' => $this->situacao, ':ordem_servico' => $this->ordem_sevico]))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function finalizarOrdem($ordem, $valor):bool{
            $this->ordem_sevico = $ordem;
            $this->situacao = 'Concluído';
            $this->valor = $valor;

            $stmt = $this->prepare('UPDATE tbl_chamado SET valor = :valor, situacao = :situacao WHERE ordem_servico = :ordem_servico');

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
            $stmt = $this->prepare('INSERT INTO tbl_chamado (razao_social, nome_responsavel, endereco, cidade, estado, data_abertura, equipamento, garantia, patrimonio, marca, modelo, descricao, situacao) VALUES (:razao_social, :nome_responsavel, :endereco, :cidade, :estado, :data_abertura, :equipamento, :garantia, :patrimonio, :marca, :modelo, :descricao, :situacao)');

            if($stmt->execute([':razao_social' => $this->razao_social, ':nome_responsavel' => $this->nome_responsavel, ':endereco' => $this->endereco, ':cidade' => $this->cidade, ':estado' => $this->estado, ':data_abertura' => $this->data_abertura, ':equipamento' => $this->equipamento, ':garantia' => $this->garantia, ':patrimonio' => $this->patrimonio, ':marca' => $this->marca, ':modelo' => $this->modelo, ':descricao' => $this->descricao, ':situacao' => 'Em Análise']))
            {
                return true;
            }
            return false;
        }

        public function getOrdem(int $ordem_servico): array
        {
            $stmt = $this->prepare('SELECT * FROM tbl_chamado WHERE ordem_servico = :ordem_servico');

            if($stmt->execute([':ordem_servico' => $ordem_servico])){
                return [];
            }
            else{
                return false;
            }
        }   
        
        public function getAllAnalise():array
        {
            $stmt = $this->prepare('SELECT * FROM tbl_chamado WHERE situacao LIKE "%Em Análise%"');

            $stmt->execute();

            return $stmt->fetchAll();
        }

        public function getAllServico():array
        {
            $stmt = $this->prepare('SELECT * FROM tbl_chamado LIKE "%Em Serviço%"');

            $stmt->execute();

            return $stmt->fetchAll();
        }

        public function getAllConcluido():array
        {
            $stmt = $this->prepare('SELECT * FROM tbl_chamado LIKE "%Concluído%"');

            $stmt->execute();

            return $stmt->fetchAll();
        }
    }