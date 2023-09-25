<?php

class Age {
	private $age;
	private $dateNaiss;

    public function __construct($age, $dt) {
        $this->age = $age;
        $this->dateNaiss = $dt;
    }

    // Setteurs
    public function setAge($age) {
        $this->age = $age;
    
    }public function setDateNaiss($dt) {
        $this->dateNaiss = $dt;
    }

    // Getteurs
    public function getAge() {
        return $this->age;
    }
    public function getDateNaiss() {
        return $this->dateNaiss;
    }
}
 