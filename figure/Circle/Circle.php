<?php 
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