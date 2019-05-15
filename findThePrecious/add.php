<?php

require('function.php');
$showForm = "yes";
//print_r ($_POST);
//$connexion= baseConnect();

//echo $_POST['startTime1'],$_POST['titleStage'],$_POST['sportName'],$_POST['numberParticipant'],$_POST['dateStart'],$_POST['dateEnd'],
//$_POST['descriptionStage'],$_POST['startTime1'],$_POST['endTime1'],$_POST['startTime2'],$_POST['endTime2'];

//die;

if ($_POST) {


    $errors = array();
    $answers = array();
// email
    if (empty($_POST["email"])) {
        $errors["email"] = "Please enter an email";
    } else {
        $answers["email"] = $_POST["email"];
    }
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $answers["email"] = $_POST["email"];
    } else {
        $errors["email"] = "Please enter a valid email address";
    }
//pseudo
    if (empty($_POST["pseudo"])) {
        $errors["pseudo"] = "Please enter your pseudo";
    }

//option
    if (empty($_POST["option"])) {
        $errors["option"] = "Please select an option";
    } else {
        $answers["option"] = $_POST["option"];
    }

//message
    if (empty($_POST["message"])) {
        $errors["message"] = "Please type your message";
    } else {
        $answers["message"] = $_POST["message"];
    }


//checkErrors
    if (count($errors) == 0) {

        $connexion = baseConnect();
        $email = $_POST['email'];
        $pseudo = $_POST['pseudo'];
        $action = $_POST['option'];
        $message = $_POST['message'];


        $requete = "INSERT INTO Contact (email,pseudo,action,message) VALUES ('$email', '$pseudo', '$action','$message')";
        $connexion->query($requete);
        $showForm = "Thank you for your message";

    }

}
?>