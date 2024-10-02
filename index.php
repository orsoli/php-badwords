<?php 
$title = "PHP Badwords";
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
        <!-- Inputs form  -->
        <form action="store.php" method="GET">
            <div class="mb-3">
                <label for="phrases" class="form-label">Insert a phrases to censored</label>
                <input type="text" class="form-control" name="phrase" id="phrases">
            </div>
            <div class="mb-3 w-25">
                <label for="censoredWord" class="form-label">Insert a word you want to censored</label>
                <input type="text" class="form-control" name="censoredWord" id="censoredWord">
            </div>
            <button type="submit" class="btn btn-primary">Censored</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>

    </div>
</body>

</html>