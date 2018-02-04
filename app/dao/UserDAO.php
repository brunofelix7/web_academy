<?php

    class UserDAO extends Database implements IUser{

        public function __construct(){
            try{
                $db = Database::getInstance();
                $this->conn = $db->getConnection();
              }catch(PDOException $e){
                echo "Falha de conexao. " . $e->getMessage();
            }
        }

        //  Login
        public function login(User $user){
            try{
                $userLogged = null;
                $username = $user->getUsername();
                $password = $user->getPassword();
                $sql = sprintf(UserSQL::LOGIN_SQL, $username, $password);
                $result = $this->conn->query($sql);
                if($result):
                    foreach ($result as $row) {
                        $userLogged = new User($row['username'], $row['password']);
                    }
                    return $userLogged;
                else:
                    return null;
                endif;
              }catch(PDOException $e){
                echo "Erro ao consultar usuario. " . $e->getMessage();
            }
        }
    }

?>
