<?php 
$title = "PHP Badwords";
$phrase = $_GET["phrase"];
$censoredWord = $_GET["censoredWord"];
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
            <strong>
                <i>
                <?php
                echo var_dump($phrase)
                ?>
                </i>
            </strong>
        </div>
        <div class="border"></div>
    </div>
</body>

</html>