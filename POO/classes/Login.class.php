<?php
    require(__DIR__ . '/../interfaces/login.interface.php');
    require(__DIR__ . '/../classes/abstratas/Database.class.php');

    class Login extends Database implements iLogin{
        protected $user;
        protected $senha;

        public function setCredenciais(array $dados): bool
        {
            $this->user = $dados['user'] ?? null;
            $this->senha = $dados['senha'] ?? null;           

            return true;
        }

        public function login($user, $senha){
            $stmt = $this->prepare('SELECT user FROM tbl_admin WHERE user = :user AND senha = :senha');

            if($stmt->execute([':user' => $this->user, ':senha' => $this->senha]))
            {
                echo "<script language='javascript' type='text/javascript'>alert('Bem-Vindo.');window.location.href='../views/Admin.html'</script>";
                return true;
            }
            else
            {
                echo "<script language='javascript' type='text/javascript'>alert('Login inválido.');window.location.href='../views/index.html'</script>";
                return false;
            }
        }

        public function logoff(){
            return true;
        }

    }