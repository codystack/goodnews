<?php
//Connect Database
include ('config/db.php');

session_start();
if (!isset($_SESSION['email'])) {
    header('location: ./');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: ./");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Growing Digital Income Store Agency | helping you save your passive income" />
    <meta name="description" content="Growing Digital Income Store Agency, Let's help you grow your income " /> 
    <meta name="author" content="ThankGod Okoro"/>

    <link rel="shortcut icon" type="image" href="assets/images/gefavicon.png">

    <link href="assets/fonts/feather/feather.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/libs/dragula/dist/dragula.min.css" rel="stylesheet" />
    <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="assets/libs/prismjs/themes/prism.css" rel="stylesheet" />
    <link href="assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
    <link href="assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/libs/@yaireo/tagify/dist/tagify.css" rel="stylesheet">
    <link href="assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
    <link href="assets/libs/tippy.js/dist/tippy.css" rel="stylesheet">
    <link href="assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title> GDIS&trade; :: Agent Dashboard</title>
</head>

<body>