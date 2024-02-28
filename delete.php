<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>ARTIST WEBSITE</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARTIST WEBSITE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://kit.fontawesome.com/a767a9281d.js" crossorigin="anonymous"></script>
</head>
<body class="body">

<header class="header">
    <a href="index.php"><div class="filters">Home</div></a>
    <div class="filters">Poetry</div>
    <div class="filters">Music</div>
    <div class="filters">Other</div>
</header>

<?php

$db = new PDO('mysql:host=db; dbname=collector-app', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$poemId = $_GET['id'];
$query=$db->prepare('DELETE FROM `artist-works` (`name`,`type`,`image`, `about`, `verse`, `date` WHERE `id`=' . $poemId);

$query->execute();


