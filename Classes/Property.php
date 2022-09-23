<?php
    class Property {
        public $address;
        public $mq;
        public $n_of_rooms;
        public $n_of_bathrooms;

        public function __construct($address, $mq, $rooms, $bathrooms)
        {
            $this->address = $address;
            $this->mq = $mq;
            $this->n_of_rooms = $rooms;
            $this->n_of_bathrooms = $bathrooms;
        }

        public function getPropertyInfo() {
            echo "Indirizzo: " . $this->address . "<br>";
            echo "Metri Quadri: " . $this->mq . "<br>";
            echo "Stanze: " . $this->n_of_rooms . "<br>";
            echo "Bagni: " . $this->n_of_bathrooms . "<br>";
        }
    }