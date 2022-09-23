<?php
    require_once __DIR__ . '/Property.php';

    class OnRentProperty extends Property {
        public $rent;

        public function __construct($address, $mq, $n_of_rooms, $n_of_bathrooms, $rent)
        {
            parent::__construct($address, $mq, $n_of_rooms, $n_of_bathrooms);

            $this->rent = $rent;
        }

        public function getRent() {
            echo "Canone di affitto al mese: " . $this->rent;
        }
    }