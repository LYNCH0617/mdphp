<?php

    class Database {
        protected $connection;
        function connect(){
            try{
                $this->connection = new PDO("mysql:host=localhost;dbname=practiceoop", "root","");
            }
            catch(PDOException $e){
                echo "connection error" . $e->getMessage();
            }
            return $this->connection;
        }
    }
?>
