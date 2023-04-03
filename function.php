<?php


     Class crupApp{
        private $conn;

        public function __construct()
        {
            $dbhost = 'localhost';
            $dbuser= 'root';
            $dbpass = "";
            $dbname = 'crudapp';

            $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

            if(!$this->conn)
            {
                die("Database Connection Error");
            }
        }

        public function add_data($data){
            $std_name = $data['name'];
            $std_roll = $data['number'];
            $std_img = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];

            echo $std_img;

            $query = "insert into students(std_name, std_roll, std_image) values
            ('$std_name', $std_roll, '$std_img')";

            if(mysqli_query($this->conn, $query)){
                return "Information Added Succesfully";
            }
        }
     }


?>