<?php

    class Database{

        private $conn;
        private static $instance;
        private const DB_HOST = "localhost:3306";
        private const DB_USERNAME = "root";
        private const DB_PASSWORD = "root";
        private const DB_NAME = "db_academy";

        public function __construct(){
            $this->conn = new PDO("mysql:host=" . self::DB_HOST . ";" . "dbname=" . self::DB_NAME, self::DB_USERNAME, self::DB_PASSWORD);
        }

        public static function getInstance() {
            if(empty(self::$instance)) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        private function __clone(){

        }

        public function getConnection(){
            return $this->conn;
        }

        public function __destruct(){
            $this->conn = null;
        }

    }

?>
