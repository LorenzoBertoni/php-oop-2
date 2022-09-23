<?php
    require_once __DIR__ . '/Classes/Customer.php';
    require_once __DIR__ . '/Classes/Employee.php';

    $customer = new Customer("Mario Rossi", "mariorossi@gmail.com");
    try {
        $customer->setPassword("roots");
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
    
    try {
        $customer->setLevel("customer");
    } catch (Exception $e) {
        echo $customer->nickName . "=>" . "Livello di accesso: Cliente => " . $e->getMessage() . "<br>";
    }
    //var_dump($customer);



    $employee = new Employee("Luca Bianchi", "lucabianchi@gmail.com");

    try {
        $employee->setPassword("password");
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }

    try {
        $employee->setLevel("employee");
        echo $employee->nickName . "=>" . "Livello di accesso: Dipendente => Puoi accedere all'area riservata ai dipendenti <br>";
    } catch (Exception $e) {
        echo "Livello di accesso: " . $e->getMessage() . "<br>";
    }
    //var_dump($employee);

    echo "<br><br>";
    $customer->getUserInfo();
    echo "<br><br>";
    $employee->getUserInfo();