<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./res/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class=" bg-light">
    <nav class=" nav navbar bg-info">
        <?php
        if(isset($_SESSION['un'])){
            ?>
            <div class="m-2"><p class="h2">myweb</p></div>
            <div ><a class="me-4 btn btn-danger" href="./logout.php">Logout</a></div>
            <?php

        }
        else{
            ?>
           <div class="m-2"><p class="h2">myweb</p></div>
            <div ><a class="me-4 btn btn-success" href="./login.php">Login</a></div>
            <?php
        }
        ?>
    </nav>
