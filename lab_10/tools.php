<?php

    require_once('product.php');
    require_once('connectvars.php');

    class Tools extends Product
    {
        private $shipper;
        private $weight;
        
        public function setShipper($shipper)
        {
            $this->shipper = $shipper;
        }
        
        public function getShipper()
        {
            return $this->shipper;
        }
        
        public function setWeight($weight)
        {
            $this->weight = $weight;
        }
        
        public function getWeight()
        {
            return $this->weight;
        }
        public function addDatabase()
        {
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                or die('Error connecting to MySQL server.');
            $query = "insert into products(Title, Description, Price, Ship, Weight) values ('$this->title', '$this->description', '$this->price', '$this->shipper', '$this->weight');";
            
            mysqli_query($dbc, $query)
                or die('Error querying database.');
        
        }        
    }
    
?>