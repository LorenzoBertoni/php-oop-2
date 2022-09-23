<?php 
    require_once __DIR__ . '/../traits/Address.php';
    class User {
        public $nickName; 
        use Address;
        public $email;
        protected $password;
        protected $level;
        
        public function __construct($nickName, $email, $address = null, $civicNumber)
        {
            $this->nickName = $nickName;
            $this->email = $email;
            $this->address = $address;
            $this->civicNumber = $civicNumber;
        }

        public function setPassword($password) {
            if (strlen($password) >= 5) {
                $this->password = $password;
            } else {
                throw new Exception("password poco sicura. La password dovrebbe contenere almeno 5 caratteri");
            }
        }

        public function setLevel($level) {
            if ($level == "employee") {
                $this->level = $level; 
            } else {
                throw new Exception("Non puoi accedere all'area riservata ai dipendenti con le credenziali attuali");
            }
        }

        public function getUserInfo() {
            echo "Nickname: " . $this->nickName . "<br>";
            echo "Indirizzo di residenza: " . $this->address . " " . $this->civicNumber . "<br>";
            echo "Email: " . $this->email . "<br>";
            echo "Password: " . $this->password . "<br>";
        }
    }
