<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A developer portfolio with back-office and visitor interface.">
    <title>Portfolio</title>
</head>
<body>

<?php
    if(!empty($_SESSION['message'])){
        echo '<p>'.$_SESSION['message'].'</p>';
        $_SESSION['message'] = ''; // Cleaning the superglobal variable
    } 
?>
