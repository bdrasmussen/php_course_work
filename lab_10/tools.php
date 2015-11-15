<?php

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
            $this->weight;
        }
        
        public function getWeight()
        {
            return $this->weight;
        }
    }
    
?>