<?php
    if(isset($_POST['submitForm'])){
        session_start(); 
        $voorNaam = $_POST['inputVoorNaam'];
        $achterNaam = $_POST['inputAchterNaam'];
        $email = $_POST['inputEmail'];
        $onderwerp = $_POST['inputOnderwerp'];
        $bericht = $_POST['inputTextErea'];
        $to = "info@timvanandel.nl";

        $naam = $voorNaam . " " . $achterNaam;
        $headers = "";

        // $formcontent="From: $naam \n Message: $bericht";
        // $recipient = "tim.van.andel.2004@gmail.com";
        // $subject = $onderwerp;
        // $mailheader = "From: $email \r\n";
        // mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
        // echo "Thank You!";


  
        $headers .= "Reply-To: $email\r\n"; 
        $headers .= "Return-Path: $email\r\n"; 
        $headers .= "From: $email\r\n"; 

        $headers .= "Organization: None\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "X-Priority: 3\r\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

        mail($to, $onderwerp, $bericht, $headers) or die($_SESSION['send'] = 'false' and header('Location: index.php'));
        
        $_SESSION['send'] = 'true';
        header('Location: index.php');
    }

?>