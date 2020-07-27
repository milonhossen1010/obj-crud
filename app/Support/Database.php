<?php
    namespace Crud\Support;
    use mysqli;
    /**
     * Class Database
     */
    abstract class Database{
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db = "obj";
        private $connection;
    }

   private function connection(){
       return $this -> connection = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db);
    }