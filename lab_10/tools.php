<?php

    require_once('product.php');
    require_once('electronics.php');

    class Tools extends Product
    {
        protected $shipper;
        protected $weight;
        
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
            $this->weight;
        }
        
        public function getWeight()
        {
            return $this->weight;
        }
    }
    
?>