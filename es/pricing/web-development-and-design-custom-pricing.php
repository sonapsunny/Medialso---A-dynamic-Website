<?php

include 'config.php';

$name = $_POST['name'];
$companyName = $_POST['companyName'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$consultation = isset($_POST['consultation']) ? implode(", ", $_POST['consultation']) : "";

$pages = isset($_POST['pages']) ? intval($_POST['pages']) : 0;

$design = isset($_POST['design']) ? implode(", ", $_POST['design']) : "";

$development = isset($_POST['development']) ? implode(", ", $_POST['development']) : "";

$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;


$free = isset($_POST['free']) ? intval($_POST['free']) : 0;

$hosting = isset($_POST['hosting']) ? implode(", ", $_POST['hosting']) : "";

$sql = "INSERT INTO web_development_and_design_custom_pricing_form_data (name, companyName, phone, email, consultation, pages, design, development, quantity, free, hosting)
VALUES ('$name', '$companyName', '$phone', '$email', '$consultation', '$pages','$design' ,'$development', '$quantity', '$free', '$hosting')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redirect back to the form page
header("Location: pricing/web-development-and-design-pricing.php");
exit();
?>