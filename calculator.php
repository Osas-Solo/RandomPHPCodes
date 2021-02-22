<?php

    $first_number = $_GET["first-number"];
    $second_number = $_GET["second-number"];
    $operation = $_GET["operation"];
    $operation_sign = "";
    $result = 0;

    switch ($operation) {
        case "addition":
            $result = add_numbers($first_number, $second_number);
            $operation_sign = "+";
            break;

        case "subtraction":
            $result = subtract_numbers($first_number, $second_number);
            $operation_sign = "-";
            break;

        case "multiplication":
            $result = multiply_numbers($first_number, $second_number);
            $operation_sign = "*";
            break;

        case "division":
            $result = divide_numbers($first_number, $second_number);
            $operation_sign = "/";
            break;
    }

    echo $first_number . " " . $operation_sign . " " . $second_number . " = " . $result;

    function add_numbers($first_number, $second_number) {
        return $first_number + $second_number;
    }

    function subtract_numbers($first_number, $second_number) {
        return $first_number - $second_number;
    }

    function multiply_numbers($first_number, $second_number) {
        return $first_number * $second_number;
    }

    function divide_numbers($first_number, $second_number) {
        return $first_number / $second_number;
    }

?>