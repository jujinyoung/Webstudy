<?php
    $con = mysqli_connect("localhost", "jujinyoung1838", "juinyoung8!", "user");
    mysqli_query($con,'SET NAMES utf8');

    $userID = $_POST["userID"];
    $userPassword = $_POST["userPassword"];
    $userName = $_POST["userName"];
    $userAge = $_POST["userAge"];

    $statement = mysqli_prepare($con, "INSERT INTO USER VALUES (?,?,?,?)");
    mysqli_stmt_bind_param($statement, "sssi", $userID, $userPassword, $userName, $userAge);
    mysqli_stmt_execute($statement);


    $response = array();
    $response["success"] = true;


    echo json_encode($response);



?>
