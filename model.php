<?php
    trait login_model{
        public function list(){
            $conn = new PDO("mysql:host=localhost;dbname=lop_12a3","root","");
            $conn->exec("set names 'utf8'");
            $query = $conn->prepare("select * from noptien");
            $query->setFetchMode(PDO::FETCH_OBJ);
            $query->execute();
            $result = $query->fetchAll();
            return $result;
        }
    }
?>