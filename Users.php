<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $id = $_POST["id"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    // You can perform additional actions here, like saving to a database or sending emails

    // For this example, we'll just display a confirmation message
    echo "<h1>Appointment Confirmed</h1>";
    echo "<p>Thank you, $firstName $lastName, for booking an appointment on $date at $time.</p>";
}
?>


