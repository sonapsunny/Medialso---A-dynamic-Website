<?php

include 'config.php';

// Retrieve form data
$name = $_POST['name'];
$company = $_POST['company'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$logo = $_POST['logo'];

$logoIdentity = isset($_POST['logoIdentity']) ? implode(", ", $_POST['logoIdentity']) : "";

$brandGuidelines = $_POST['brandGuidelines'];

$stationaries = isset($_POST['stationaries']) ? implode(", ", $_POST['stationaries']) : "";

$mockUps = $_POST['mockUps'];
$revisions = $_POST['revisions'];

// Insert data into the database
$sql = "INSERT INTO branding_custom_pricing_form_data (name, company, phone, email, logo, logo_identity, brand_guidelines, stationaries, mockups, revisions)
VALUES ('$name', '$company', '$phone', '$email', '$logo', '$logoIdentity', '$brandGuidelines', '$stationaries', '$mockUps', '$revisions')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redirect back to the form page
header("Location: branding-pricing.php");
exit();
?>