<!DOCTYPE html>
<?php
/*
* Holland College Student Registration
* @author Brownhill Udeh
* @since September 10, 2025
* Class - CIS2288 Assignment1
* Description - Display student registration information from the post form $request 
*/

//Defining variables
$firstName = htmlspecialchars($_POST['firstName']);
$lastName = htmlspecialchars($_POST['lastName']);
$street = htmlspecialchars($_POST['addressStreet']);
$streetNo = htmlspecialchars($_POST['addressStreetNumber']);
$postalCode = htmlspecialchars($_POST['addressPostalCode']);
$city = htmlspecialchars($_POST['addressCity']);
$province = htmlspecialchars($_POST['addressProvince']);
$phone = htmlspecialchars($_POST['phoneNumber']);
$numberOfSemesters = htmlspecialchars($_POST['numberOfSemesters']);
$numberOfCoursePerSemester = htmlspecialchars($_POST['numberOfCoursesPerSemester']);
$healthCard = htmlspecialchars($_POST['healthCareDeduction']);
$scholarship = htmlspecialchars($_POST['scholarshipAmount']);

const COURSEPRICE = 800;
$totalCost = (COURSEPRICE * (int)$numberOfCoursePerSemester * (int)$numberOfSemesters) - ((int)$scholarship + (int)$healthCard);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holland College :: Student Registration System</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container">
        <h1 class="pageTitle">Holland College</h1>
        <h2>Student Registration</h2>

        <?php
        date_default_timezone_set('America/Halifax');
        echo "<p>Student registration processed at " . date('H:i, jS F Y') . "</p>";
        echo "<hr>";
        echo "The student name is: " . $firstName . " " . $lastName . "<br>";
        echo "<br>";
        echo "The student address is: " . $streetNo . " " . $street . ", "  . $city . ", " . $province . ". " . strtoupper($postalCode) . "<br>";
        echo "<br>";
        echo "The student phone number is: " . $phone . "<br>";
        echo "<br>";

        echo "The student's tuition cost is: $" . $totalCost .
            ". They are taking " . $numberOfCoursePerSemester .
            " courses per semester for " . $numberOfSemesters . " semesters.<br>";

        ?>

    </div>

</body>

</html>