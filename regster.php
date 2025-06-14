<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST["first_name"]);
    $middle_name = htmlspecialchars($_POST["middle_name"]);
    $last_name = htmlspecialchars($_POST["last_name"]);
    $sex = htmlspecialchars($_POST["sex"]);
    $department = htmlspecialchars($_POST["department"]);
    $reg_date = htmlspecialchars($_POST["reg_date"]);
    if (empty($first_name) || empty($last_name) {
        die("First name and Last name are required!");
    }
    echo "<h2>Registration Successful!</h2>";
    echo "<p>First Name: $first_name</p>";
    echo "<p>Middle Name: $middle_name</p>";
    echo "<p>Last Name: $last_name</p>";
    echo "<p>Sex: $sex</p>";
    echo "<p>Department: $department</p>";
    echo "<p>Registration Date: $reg_date</p>";
} else {
    // በPOST ዘዴ ካልተላከ ማስጠንቀቂያ
    echo "Invalid request method.";
}
?>
