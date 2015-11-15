<?php
    
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
    }
    
?>