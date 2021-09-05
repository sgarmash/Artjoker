<?php 

    abstract class Figure {
        abstract public function area();
        abstract public function perimeter();
    }
 
    class Rectangle extends Figure {

        private $width;
        private $height;
    
        public function __construct( $width, $height )
        {
            $this->width = $width;
            $this->height = $height;
        } 

        public function area() 
        {
            return $this->width * $this->height;
        }
    
        public function perimeter()
        {
            return ($this->width + $this->height) * 2;
        }

    }

    class Circle extends Figure {

        private $radius;

        public function __construct ( $radius )
        {
            $this->radius = $radius;
        }

        public function area() {
            return M_PI * $this->radius * $this->radius;
        }
    
        public function perimeter(){
            return 2 * M_PI * $this->radius;
        }

    }

    class Triangle extends Figure {

        private $width;
        private $height;

        public function __construct ( $width, $height )
        {
            $this->width = $width;
            $this->height = $height;
        }

        public function perimeter () 
        {
            return 3 * $this->width;

        }
        
        public function area()
        {
            return ( $this->width * $this->height ) / 2;
        }

    }
    