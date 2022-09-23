<?php
    require_once __DIR__ . '/Classes/Customer.php';
    require_once __DIR__ . '/Classes/Employee.php';
    require_once __DIR__ . '/Classes/OnSaleProperty.php';
    require_once __DIR__ . '/Classes/OnRentProperty.php';

    //***CLIENTE***
    $customer = new Customer("Mario Rossi", "mariorossi@gmail.com", "Corso Roma", 10);

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
    $employee = new Employee("Luca Bianchi", "lucabianchi@gmail.com", "Via Paolo Sarpi", 47);

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

    //*stampa delle informazioni Utenti
    echo "<h1>UTENTI</h1>";
    $customer->getUserInfo();
    echo "<br><br>";
    $employee->getUserInfo();


    //*** IMMOBILI ***/

    $onSaleProperty = new OnSaleProperty("Via Giuseppe Mazzini", 38, 200, 5, 3, 200000);

    $onRentProperty = new OnRentProperty("Via Cadamosto", 40, 100, 2, 1, 500);

    //*stampa delle informazioni Immobili
    echo "<h1>IMMOBILI</h1>";
    $onSaleProperty->getPropertyInfo();
    $onSaleProperty->getPrice();
    echo "<br><br>";
    $onRentProperty->getPropertyInfo();
    $onRentProperty->getRent();