<?php

function orderPizza($pizzaType, $Customer)
{   echo 'Creating new order... <br>';
    echo 'A ' . $pizzaType;
    $Price = calc_cts($pizzaType);

    $address = 'unknown';
    switch ($Customer) {
        case 'koen': $address = 'a yacht in Antwerp';
            break;   
        case 'manuele': $address = 'somewhere in Belgium';
            break;  
        case 'students': $address = 'BeCode office';
            break;      
        default: $address = 'unknown';
            break;
    }

    echo ' pizza should be sent to ' . $Customer . ". <br>The address: {$address}.";
    echo '<br>';
    echo 'The bill is €' . $Price . '.<br>';
    echo "Order finished.<br><br>";
}

function total_price($Price)
{
    return $Price;
}

function test($p_type)
{
    echo "Test: type is {$p_type}. <br>";
}

function calc_cts($p_type)
{
    $cst = 'unknown';

    if ($p_type == 'marguerita') {
        $cst = 5;
    } else {
        if ($p_type == 'golden') {
            $cst = 100;
        }

        if ($p_type == 'calzone') {
            $cst = 10;
        }

        if ($p_type == 'hawai') {
            throw new Exception('Computer says no');
        }
    }

    return $cst;
}

function ordr_piz_all()
{
    $test = 0;
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');

    orderPizza('golden', 'students');
}

function make_Allhappy($do_it)
{
    if ($do_it) {
        ordr_piz_all();
    } else {
        // Should not do anything when false
    }
}

make_Allhappy(true);
