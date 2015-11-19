<?php
    
    require_once('product.php');
    require_once('connectvars.php');
    
    class Electronics extends Product
    {
        private $recyclable;
        
        public function setRecyclable($recyclable)
        {
            $this->recyclable = $recyclable;
        }
        
        public function getRecyclable()
        {
            return $this->recyclable;
        }
        
        public function addDatabase()
        {
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                or die('Error connecting to MySQL server.');
            $query = "insert into products(Title, Description, Price, Recyclable) values ('$this->title', '$this->description', '$this->price', '$this->recyclable');";
            
            mysqli_query($dbc, $query)
                or die('Error querying database.');
        
        }

    }
    
?>