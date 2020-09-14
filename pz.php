<?php

function orderPizza($pizzaType, $Customer)
{
    $Customer = ucfirst($Customer);
    $Address = getAddress($Customer);
    $Price = getPrice($pizzaType);

    echo 'Creating new order...<br>';
    echo "A {$pizzaType} pizza should be sent to {$Customer}.<br>";
    echo "The address: {$Address}.<br>";
    echo "The bill is €{$Price}.<br>";
    echo "Order finished.<br><br>";
}

function getAddress($Customer)
{
    switch ($Customer) {
        case 'Koen':
            return 'a yacht in Antwerp';
            break;
        case 'Manuele':
            return 'somewhere in Belgium';
            break;
        case 'Students':
            return 'BeCode office';
            break;
        default:
            return 'unknown';
            break;
    }
}

function getPrice($pizzaType)
{
    switch ($pizzaType) {
        case 'marguerita':
            $Price = '5';
            break;
        case 'golden':
            $Price = '100';
            break;
        case 'calzone':
            $Price = '10';
            break;
        case 'hawaii':
            throw new Exception('Computer says no');
            break;
        default:
            $Price = 'unknown';
            break;
    }
    return $Price;
}

(function () {
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
})();