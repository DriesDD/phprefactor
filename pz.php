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
        case 'Manuele':
            return 'somewhere in Belgium';
        case 'Students':
            return 'BeCode office';
        default:
            return 'unknown';
    }
}

function getPrice($pizzaType)
{
    switch ($pizzaType) {
        case 'marguerita':
            return '5';
        case 'golden':
            return '100';
        case 'calzone':
            return '10';
        case 'hawaii':
            throw new Exception('Computer says no');
        default:
            return 'unknown';
    }
}

(function () {
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
})();