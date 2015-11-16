<?php
    
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
            $this->description;
        }
        
        public function getDescription()
        {
            return $this->description;
        }
        
        public function setPrice($price)
        {
            $this->price;
        }
        
        public function getPrice()
        {
            return $this->price;
        }
    }
?>