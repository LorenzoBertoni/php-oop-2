<?php
require_once __DIR__ . '/../traits/Address.php';
    class Property {
        use Address;
        public $mq;
        public $n_of_rooms;
        public $n_of_bathrooms;

        public function __construct($address, $civicNumber,  $mq, $rooms, $bathrooms)
        {
            $this->address = $address;
            $this->civicNumber = $civicNumber;
            $this->mq = $mq;
            $this->n_of_rooms = $rooms;
            $this->n_of_bathrooms = $bathrooms;
        }

        public function getPropertyInfo() {
            echo "Indirizzo: " . $this->address . " " . $this->civicNumber . "<br>";
            echo "Metri Quadri: " . $this->mq . "<br>";
            echo "Stanze: " . $this->n_of_rooms . "<br>";
            echo "Bagni: " . $this->n_of_bathrooms . "<br>";
        }
    }