<?php 
class Database{
    private $hostname = "localhost";
    private $username = "root";
    private $password = ""; 
    private $database = "t_sepatu";

    protected $db; 

    public function __construct()
    {
        $this->db = new mysqli($this->hostname, $this->username, $this->password, $this->database);
    }
}
?>