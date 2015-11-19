<?php
    require_once('connectvars.php');
    
    class Product
    {
        protected $title;
        protected $description;
        protected $price;
        
        public function setTitle($title)
        {
            $this->title = $title;
        }
        
        public function getTitle()
        {
            return $this->title;
        }
        
        public function setDescription($description)
        {
            $this->description = $description;
        }
        
        public function getDescription()
        {
            return $this->description;
        }
        
        public function setPrice($price)
        {
            $this->price = $price;
        }
        
        public function getPrice()
        {
            return $this->price;
        }
        public function addDatabase()
        {
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                or die('Error connecting to MySQL server.');
            $query = "insert into products(Title, Description, Price) values ('$this->title', '$this->description', '$this->price');";
            
            mysqli_query($dbc, $query)
                or die('Error querying database.');
        
        }        
    }
?>