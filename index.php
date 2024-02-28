<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oswald:wght@200..700&display=swap"
          rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
</head>
<body class="body">
<div class="heading">ARTIST NAME</div>


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

$query = $db->prepare('SELECT `id`, `name`, `type`,`about`, `image`, `verse`, `date` FROM `artist-works`;');
$query->execute();

$result = $query->fetchALL();

//foreach($result
echo '<div class="contain">';

foreach ($result as $poem) {
    echo '<div class="container">' . '<a href=details.php?id=' . $poem['id'] . '>' . '<div class="image-description-container">' .

        '<img class="images" src="' . $poem['image'] . '">' . '<div class="description">' . '<div class="name">' . $poem['name'] . '</div>' . '<div class="type">' . $poem['type'] . '<br>' . '</div>' . '<div class="about">' . $poem['about'] . '<br>' . '</div>' . '<div class="date">' . $poem['date'] . '<br><hr>' . '</div>' . '</div>' . '</div>' . '</div>' . '</a>';
}

echo '<form method="post" action="add.php" class="container-form add">
<div class="form"><p class="h1">Submit new work</p>
<label for="name">Name of works:</label>
<input type="text" name="name" id="name"></div>
<div class="form">
<label for="image">Image URL:</label>
<input type="url" name="image" id="image"></div>
<div class="form">
<label for="type">Type of works:</label>
<input type="text" name="type" id="type"></div>
<div class="form">
<label for="about">About:</label>
<input type="text" name="about" id="about"></div>
<div class="form">
<label for="year">Year of production:</label>
<input type="number" name="year" id="year"></div>
<div class="form">
<label for="year">Lyrics/poem:</label>
<input type="text" name="verse" id="verse"></div>
<div class="form"><button class="submit">Submit</button></div>
</form>';
