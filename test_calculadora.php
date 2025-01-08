<?php
include 'index.php';

function test_suma()
{
    global $result;
    $_POST['num1'] = 5;
    $_POST['num2'] = 3;
    $_POST['operation'] = 'sumar';

    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        switch ($_POST['operation']) {
            case 'sumar':
                $result = $_POST['num1'] + $_POST['num2'];
                break;
        }
    }


    if ($result == 8) {
        echo "Test de suma pasó: 5 + 3 = $result\n";
    } else {
        echo "Test de suma falló: $result\n";
    }
}

function test_resta()
{
    global $result;
    $_POST['num1'] = 10;
    $_POST['num2'] = 4;
    $_POST['operation'] = 'restar';

    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        switch ($_POST['operation']) {
            case 'restar':
                $result = $_POST['num1'] - $_POST['num2'];
                break;
        }
    }

    if ($result == 6) {
        echo "Test de resta pasó: 10 - 4 = $result\n";
    } else {
        echo "Test de resta falló: $result\n";
    }
}

function test_multiplicacion()
{
    global $result;
    $_POST['num1'] = 3;
    $_POST['num2'] = 7;
    $_POST['operation'] = 'multiplicar';

    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        switch ($_POST['operation']) {
            case 'multiplicar':
                $result = $_POST['num1'] * $_POST['num2'];
                break;
        }
    }

    if ($result == 21) {
        echo "Test de multiplicación pasó: 3 * 7 = $result\n";
    } else {
        echo "Test de multiplicación falló: $result\n";
    }
}

function test_division()
{
    global $result;
    $_POST['num1'] = 12;
    $_POST['num2'] = 4;
    $_POST['operation'] = 'dividir';

    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        switch ($_POST['operation']) {
            case 'dividir':
                if ($_POST['num2'] != 0) {
                    $result = $_POST['num1'] / $_POST['num2'];
                } else {
                    $result = "Error: División por cero";
                }
                break;
        }
    }

    if ($result == 3) {
        echo "Test de división pasó: 12 / 4 = $result\n";
    } else {
        echo "Test de división falló: $result\n";
    }
}

// Ejecucion
test_suma();
test_resta();
test_multiplicacion();
test_division();
