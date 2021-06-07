<?php
    require(__DIR__ . '/../interfaces/user.interface.php');
    require(__DIR__ . '/../classes/abstratas/Database.class.php');

    class User extends Database implements iUser{
        protected $id;
        protected $user;
        protected $senha;

        public function setDados(array $dados): bool
        {
            $this->id = $dados['id'] ?? null;
            $this->user = $dados['user'] ?? null;
            $this->senha = $dados['senha'] ?? null;

            return true;
        }

        public function saveUser(){
            if(empty($this->id)){
                $this->insert();
            }
            else{
                $this->updateUser();
            }
        }

        public function updateUser()
        {
            $stmt = $this->prepare('UPDATE tbl_admin SET user = :user, senha = :senha WHERE id = :id');

            if($stmt->execute([':user' => $this->user, ':senha' => $this->senha, ':id' => $this->id]))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function deleteUser():bool
        {
            if($this->id){
                $stmt = $this->prepare('DELETE FROM tbl_admin WHERE id = :id');

                if ($stmt->execute([':id'=>$this->id]))
                {                    
                    return true;
    
                } 
                else
                {    
                    return false;
                }
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

        public function getDados(int $id): array
        {
            return [];
        }
    }