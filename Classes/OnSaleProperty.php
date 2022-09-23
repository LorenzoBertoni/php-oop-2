<?php
    require_once __DIR__ . '/Property.php';

    class OnSaleProperty extends Property {
        public $price;

        public function __construct($address, $civicNumber, $mq, $n_of_rooms, $n_of_bathrooms, $price)
        {
            parent::__construct($address, $civicNumber, $mq, $n_of_rooms, $n_of_bathrooms);

            $this->price = $price;
        }

        public function getPrice() {
            echo "Prezzo: " . $this->price;
        }
    }