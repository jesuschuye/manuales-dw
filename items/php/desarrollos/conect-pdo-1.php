<?php 
class Conexion {
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "codigos";
        private $conect;

        public function __construct() {
            $connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
            try {
                    $this->conect = new PDO($connectionString, $this->user, $this->password);
                    $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo "Conexión exitosa";    
            } catch (Exception $e) {
                    $this->conect = "Error de conexión";
                    echo "ERROR: ".$e->getMessage();
            }
        }
}

$conect = new Conexion();

?>