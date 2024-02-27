<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>ARTIST WEBSITE</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body class="body">

<header class="header">
    <div class="icons magnify">
        <a href="index.php">
            <div class="icon-link-1"><h1>Home</h1>
                <box-icon name='home-alt-2' type='solid' color='#edeade'></box-icon>
            </div>
        </a>
        <a href="httpsne-tap-submit">
            <div class="icon link-1"><i class="fa fa-" aria-hidden="true"></i></div>
        </a>
        <a href="">
            <div class="icon link-1">
                <i class="fa fa-download" aria-hidden="true"></i></div>
        </a>
</header>
<?php

$poemId = $_GET['id'];

$db = new PDO('mysql:host=db; dbname=collector-app', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `id`, `name`, `type`,`about`, `image`, `verse`, `date` FROM `artist-works` WHERE `id`=' . $poemId);
$query->execute();

$poem = $query->fetch();


echo '<div class="contain-1">';


echo '<div class="container-1">' .
    '<div class="image-description-container-1">' .
    '<img class="images-1" src="' . $poem['image'] . '">' .
    '<div class="description-1">' . '<div class="name">' . $poem['name'] . '</div>' .
    '<div class="about">' . $poem['about'] . '<br>' . '</div>' .
    '<div class="date">' . $poem['date'] . '<br><hr>' . '</div>' .
    '<div class="verse">' . $poem['verse'] . '<br><hr>' . '</div>' .
    '</div>' . '</div>' . '</div>';

