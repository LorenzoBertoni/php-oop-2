<?php
    require_once __DIR__ . '/Classes/Customer.php';
    require_once __DIR__ . '/Classes/Employee.php';
    
    //***CLIENTE***
    $customer = new Customer("Mario Rossi", "mariorossi@gmail.com");

    //*eccezione sollevata in caso di password poco sicura
    try {
        $customer->setPassword("roots");
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }

    //*eccezione sollevata in caso di accesso negato
    try {
        $customer->setLevel("customer");
    } catch (Exception $e) {
        echo $customer->nickName . "=>" . "Livello di accesso: Cliente => " . $e->getMessage() . "<br>";
    }

    //***DIPENDENTE***
    $employee = new Employee("Luca Bianchi", "lucabianchi@gmail.com");

    //*eccezione sollevata in caso di password poco sicura
    try {
        $employee->setPassword("password");
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }

    //*eccezione sollevata in caso di accesso negato
    try {
        $employee->setLevel("employee");
        echo $employee->nickName . "=>" . "Livello di accesso: Dipendente => Puoi accedere all'area riservata ai dipendenti <br>";
    } catch (Exception $e) {
        echo "Livello di accesso: " . $e->getMessage() . "<br>";
    }

    //*stampa delle informazioni
    echo "<br><br>";
    $customer->getUserInfo();
    echo "<br><br>";
    $employee->getUserInfo();