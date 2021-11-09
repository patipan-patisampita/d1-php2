<?php
    //Define Class
    class Countries {
        //Properties
        public $proivince;
        public $hit;

        //Methods
        function set_proivince($proivince){
            $this->proivince = $proivince;
        }
        function get_province(){
            return $this->proivince;
        }
    }
    //Define Object
    $newTour = new Countries();
    $newHit = new Countries();
    $newTour->set_proivince('Trat');
    $newHit->set_proivince('koachang');
    echo $newTour->get_province();
    echo "<br />";
    echo $newHit->get_province();

?>