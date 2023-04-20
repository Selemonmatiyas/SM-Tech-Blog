<?php
class Connection{
    private $servername = "localhost";
    private $username = "sola";
    private $password ="";
    private $dbname ="sola_blog";
   
    public function connect(){
        $conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        if($conn->errno){
            die("Connection failed: " . $con->error());
        }
        else{
            return $conn;
        }
    }
}
$obj = new Connection();
$conn = $obj->connect();
?>