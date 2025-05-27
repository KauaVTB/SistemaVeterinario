<?php
class Database {
    private $host = 'localhost';
    private $port = '3306';
    private $db_name = 'vet_clinic';
    private $username = 'root';
    private $password = '654321';
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host={$this->host};port={$this->port};dbname={$this->db_name}", $this->username, $this->password);
            $this->conn->exec("set names utf8");
           // echo "Conexão realizada com sucesso!<br>";
        } catch(PDOException $exception) {
            echo "Erro de conexão: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

?>
