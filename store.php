<?php 
// Vaiables
$title = "PHP Badwords"; // Store static title
$censoreCode = "***"; // Store a static string
$phrase = $_GET["phrase"]; // Store the data geting from user using GET method in form inputs
$censoredWord = $_GET["censoredWord"]; // Store the data geting from user using GET method in form inputs
$censoredPhrases = str_ireplace($censoredWord,$censoreCode,$phrase); // Replace string in array strings
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta data  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Orsol Filaj">
    <meta name="description" content="boilerplate">
    <!-- Title  -->
    <title>PHP Badwords</title>

    <!-- Link Bootstrap Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Link Bootstrap icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Link font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

</head>

<body>
    <!-- Container  -->
    <div class="container border border-1 shadow py-4 my-5">
        <!-- Title   -->
        <h1 class="text-center text-decoration-underline py-4">
        <?php 
        echo $title
        ?>
        </h1>
        <!-- Phrase and length geting from form  -->
        <div>
            <i>Your Phrase is:</i>
            <h2>
                <?php
                echo $phrase
                ?>
            </h2>
            <i>Your phrase length is:</i>
            <h2>
                <?php
                echo strlen($phrase)
                ?>
            </h2>
            <!-- Var Dump the phrase  -->
            <strong>
                <i>
                    <?php
                echo var_dump($phrase)
                ?>
                </i>
            </strong>
        </div>
        <div class="border my-3"></div>
        <!-- Censored Phrase and length  -->
        <div>
            <i>Your censored Phrase is:</i>
            <h2>
                <?php
                echo $censoredPhrases
                ?>
            </h2>
            <i>Your censored Phrase length is:</i>
            <h2>
                <?php
                echo strlen($censoredPhrases)
                ?>
            </h2>
            <!-- Var Dump the censored phrase  -->
            <strong>
                <i>
                <?php
                echo var_dump($censoredPhrases)
                ?>
                </i>
            </strong>
        </div>
    </div>
</body>

</html>