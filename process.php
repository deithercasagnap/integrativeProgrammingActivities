<?php
include("config.php");

if(isset($_POST["register"])){

    $role = $_POST["role"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $studentID = $_POST["studentID"];

    $login_query = "INSERT INTO users(users.studentID, users.studentNumber, users.firstName, users.middleName, users.lastName, users.role, users.username, users.password, users.dateCreated)
                    VALUES ('$studentID', null, '$firstName', '$middleName', '$lastName', '$role', '$username', '$password', current_timestamp())";          

    $login_result = mysqli_query($connection, $login_query);

    header("Location: config.php");
}


?>