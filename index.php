<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>ARTIST WEBSITE</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
</head>
<body class="body">
<div class="heading">ARTIST NAME</div>

<div class="images-header">
    <div>

        <div class="icons magnify">

            <a href="https:artist-page">
                <div class="icon link-1">
                    <i class="icon-link-1"></i></div>
            </a>

            <a href="https://www.linkedin.com/feed/?trk=guest_homepage-basic_google-one-tap-submit">
                <div class="icon link-1"><i class="fa fa-linkedin-square" aria-hidden="true"></i></div>
            </a>

            <a href="">
                <div class="icon link-1">
                    <i class="fa fa-download" aria-hidden="true"></i></div>
            </a>
        </div>

        <header class="header">
            <div class="filters">Poetry</div>
            <div class="filters">Music</div>
            <div class="filters">Other</div>
        </header>

<?php

$db = new PDO('mysql:host=db; dbname=collector-app', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `id`, `name`, `type`,`about`, `image`, `verse`, `date` FROM `artist-works`;');
$query->execute();

$result = $query->fetchALL();

//foreach($result
echo '<div class="contain">';

foreach ($result as $poem) {
    echo '<div class="container">' .
        '<a href=details.php?id=' . $poem['id'] . '>' . '<div class="image-description-container">' .

        '<img class="images" src="' . $poem['image'] . '">' .
        '<div class="description">' . '<div class="name">' . $poem['name'] . '</div>' .
        '<div class="type">' . $poem['type'] . '<br>' . '</div>' .
        '<div class="about">' . $poem['about'] . '<br>' . '</div>' .
        '<div class="date">' . $poem['date'] . '<br><hr>' . '</div>' .
        '</div>' .
        '</div>' .
        '</div>' . '</a>';
};
