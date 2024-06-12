<?php

    echo "hello world xd ";//*Echo let us write in our Work environtment.

    //*"echo let us add HTML5 elements inside our php document:
    
    echo "<br>";


    //*In php a var is a reusable container for hold data like strings, integer, float, boolean.

    //*example:

    $cat = "Feline called cat";
    $dog = "Canine called dog";
    $turtle = "Reptile called turtle";

    $product = "apples";

    $first_name = "Angel";
    $second_name = "Augusto";
    $last_name = "Molina";
    $second_last_name = "Sayaverde";

    //*We can create numbers vars, integers and floats:
    $age = 17;
    $amount_of_products = 13;

    $test_note = 2.5;
    $product_price = 12.4;
    $tax_rate = 8.3;


    //*We can create bolean values:
    $online = true;
    $offline = false;
    $employed = false;
    $graduated = true;


    //*And we have the "null" value:

    $final_price = null;


    //*Here we calculate our final price plus taxes
    $final_price = $product_price + ($product_price * ($tax_rate / 100));

    //*This writes "Feline called 'cat'", because we use the "$" for go back one by one in our instaces in php
    echo "{$turtle} <br>";

    //*We can use the curly braces "{}" in our strings for add the values of a variable:

    echo "Here's your complete name {$first_name} {$second_name} {$last_name} {$second_last_name} and my age is {$age} <br>";

    echo "Here you have {$amount_of_products} {$product}, and the cost is \${$product_price}, and your tax rate is of {$tax_rate}% <br>";

    echo "Your final price is: \${$final_price} <br>";

    echo "Your final Maths schoolar result was: {$test_note}<br>";


    //*When we use echo with bolean values will write "1" if we write a true value, and if it's false don't write anything:

    echo "We confirm that your user is online with a '1': {$online} <br>";

    //*Is important to know that we can add in our strings special chars with the "\special_char".

    //*We stoop in 28:12
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
    </html>