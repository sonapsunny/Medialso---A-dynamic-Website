<?php

include 'config.php';

$name = $_POST['name'];
$companyName = $_POST['companyName'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$keyword = isset($_POST['keyword']) ? implode(", ", $_POST['keyword']) : "";

$pageSEO = isset($_POST['pageSEO']) ? intval($_POST['pageSEO']) : 0;

$audit = isset($_POST['audit']) ? implode(", ", $_POST['audit']) : "";

$blogPost = isset($_POST['blogPost']) ? intval($_POST['blogPost']) : 0;
$content = isset($_POST['content']) ? implode(", ", $_POST['content']) : "";

$optimization = isset($_POST['optimization']) ? implode(", ", $_POST['optimization']) : "";

$building = isset($_POST['building']) ? implode(", ", $_POST['building']) : "";

$analysis = isset($_POST['analysis']) ? implode(", ", $_POST['analysis']) : "";

$report = isset($_POST['report']) ? implode(", ", $_POST['report']) : "";

$sql = "INSERT INTO seo_custom_pricing_form_data (name, companyName, phone, email, keyword, pageSEO, audit, blogPost, content, optimization, building, analysis, report)
VALUES ('$name', '$companyName', '$phone', '$email', '$keyword', '$pageSEO', '$audit' , '$blogPost',' $content', '$optimization', '$building', '$analysis', '$report')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
// Redirect back to the form page
header("Location: pricing/seo-pricing.php");
exit();
?>