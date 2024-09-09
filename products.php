<?php 
    require_once "database.class.php";

    class Product{
        private $conn;

        function __construct()
        {
            $db = new Database;
            $this->conn = $db->connect();
        }

    function getData(){
        $sql = "SELECT * FROM students";
        $query=$this->conn->prepare($sql);
        if($query->execute()){
            $data=$query->fetchAll();
        }
        return $data;
    }
    }
    ?>
