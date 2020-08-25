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



            /**
             * Database connection setup
             */
           private function connection(){

                return $this -> connection = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db);
           
            }


            /**
             *  FileUpload managements
             */
            public function fileUpload($file, $location = "", $file_type = ['jpg', 'png', 'gif', 'jpeg'])
            {
                # code...
            }



            /**
             * Data insert method
             */
            public function insert($table, array $data)
            {
             
                // Make colums SQL form data
                $array_key = array_keys($data);
                $array_col = implode(',' , $array_key);


                // Make Values SQL form data
                $array_val = array_values($data);
                

                foreach ($array_val as $value) {
                   $form_val[] = "'" . $value . "'";
                }

                $array_values = implode(',' , $form_val);

            // echo "<pre>";
            // print_r($array_col);
            // echo "</pre>";

                 $sql = "INSERT INTO $table ($array_col) VALUES ($array_values) ";
                 $this -> connection() -> query($sql);
            }

    }


