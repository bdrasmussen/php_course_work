<?php
    
    require_once('product.php');
    require_once('tools.php');
    
    class Electronics extends Product
    {
        protected $recyclable;
        
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