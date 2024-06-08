<?php

require 'inc/function.php';

$produk = query("SELECT * FROM produk");

if (isset($_POST["cari"])) {
    $produk = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css?=<?= time(); ?>">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>CarPro</title>
</head>

<body>

    <!-- Navbar -->

    <?php include('assets/partikels/navbar.php'); ?>

    <!-- Link Page -->

    <?php include('assets/partikels/link.php'); ?>

    <!-- Home -->

    <?php include('assets/partikels/home.php'); ?>

    <!-- About -->

    <?php include('assets/partikels/about.php'); ?>

    <!-- Shop -->

    <?php include('assets/partikels/shop.php'); ?>

    <!-- Credit -->

    <?php include('assets/partikels/credit.php'); ?>

    <!-- Contact -->

    <?php include('assets/partikels/contact.php'); ?>

    <!-- Footer -->

    <?php include('assets/partikels/footer.php'); ?>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- AOS init -->

    <script>
        AOS.init({
            once: true
        });
    </script>

</body>

</html>