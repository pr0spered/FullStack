<?php


if ($_SERVER["REQUEST_METHOD"]  ==  "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $pet = htmlspecialchars($_POST["favouritepet"]);

    if (empty($firstname)) {
        // echo "U rlly thought that would work?? :)";
        header("Location: ../index.php");
        exit();
    }

    if (empty($lastname)) {
        // echo "U rlly rlly thought that would work?? T_T";
        header("Location: ../index.php");
        exit();
    }

    // if (empty($pet)) {
    //     exit();
    //     echo "U rlly thought that would work?? :)";
    //     // header("Location: ../index.php");
    // }

    echo "Data Submitted";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $pet;
}

else {
    // echo "Go Back bruh";
    header("Location: ../index.php");
}