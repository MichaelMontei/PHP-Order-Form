<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// We are going to use session variables so we need to enable sessions
session_start();

// Use this function when you need to need an overview of these variables
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

// TODO: provide some products (you may overwrite the example)
$products = [
    ['name' => 'Pixelalo Pokéball', 'price' => 10],
    ['name' => 'Pixelalo Bulbasaur', 'price' => 10],
    ['name' => 'Pixelalo Charmander', 'price' => 10],
    ['name' => 'Pixelalo Wall-E', 'price' => 10],
    ['name' => 'Pixelalo Morty', 'price' => 10],
    ['name' => 'Pixelalo Rick', 'price' => 10],
    ['name' => 'Pixelalo Naruto Uzumaki', 'price' => 10],
    ['name' => 'Pixelalo Kakashi Hatake', 'price' => 10],
];

function getProducts($products){
        foreach ($_POST['products'] as $product) {
            echo implode(": ", $products[$product]) . "<br>";
        }
}

$_SESSION["totalValue"] = 0;
$email_error = $street_error = $city_error = $streetnumber_error = $zipcode_error = "";
$email = $street = $streetNumber = $zipcode = $city = "";

function validate()
{ // TODO: This function will send a list of invalid fields back

}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $email_error = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }
        if (empty($_POST["street"])) {
            $street_error = "Street is required";
        } else {
            $street = test_input($_POST["street"]);
        }
        if (empty($_POST["city"])) {
            $city_error = "City is required";
        } else {
            $city = test_input($_POST["city"]);
        }
        if (empty($_POST["streetnumber"])) {
            $streetnumber_error = "Streetnumber is required";
        } else {
            $streetNumber = test_input($_POST["streetnumber"]);
        }
        if (empty($_POST["zipcode"])) {
            $zipcode_error = "Zipcode is required";
        } else {
            $zipcode = test_input($_POST["zipcode"]);
        }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



function handleForm(){      // TODO: form related tasks (step 1)

    $street = $_POST["street"];
    $streetNumber = $_POST["streetnumber"];
    $zipcode = $_POST["zipcode"];
    $city = $_POST["city"];
    $address = $street . " " . $streetNumber . " " . $city . " " . $zipcode;

    echo "We will ship your order to the following address: " .$address . "<br>";


    // Validation (step 2)
    $invalidFields = validate();
    if (!empty($invalidFields)) {
        // TODO: handle errors

    } else {
        // TODO: handle successful submission
    }
}

// TODO: replace this if by an actual check
if (isset($_POST["submit"])) {
    handleForm();
    getProducts($products);
}

require 'form-view.php';
