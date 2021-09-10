<?php

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