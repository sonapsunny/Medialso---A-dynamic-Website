<?php

include 'config.php';

$name = $_POST['name'];
$companyName = $_POST['companyName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$consultation = isset($_POST['consultation']) ? implode(", ", $_POST['consultation']) : "";
$contentStrategy = $_POST['contentStrategy'];
$postPerMonth = $_POST['postPerMonth'];
$customGraphic = $_POST['customGraphic'];
$communityManagementHours = $_POST['communityManagementHours'];
$communityManagementMinutes = $_POST['communityManagementMinutes'];
$audienceEngagementHours = $_POST['audienceEngagementHours'];
$audienceEngagementMinutes = $_POST['audienceEngagementMinutes'];

$sql = "INSERT INTO social_media_management_custom_pricing_form_data (name, companyName, phone, email, consultation, contentStrategy, postPerMonth, customGraphic, communityManagementHours, communityManagementMinutes, audienceEngagementHours, audienceEngagementMinutes) VALUES ('$name', '$companyName', '$phone', '$email', '$consultation', '$contentStrategy', '$postPerMonth', '$customGraphic', '$communityManagementHours', '$communityManagementMinutes', '$audienceEngagementHours', '$audienceEngagementMinutes')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


// Redirect back to the form page
header("Location: social-media-management-pricing.php");
exit();
?>