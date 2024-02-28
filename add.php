<?php

session_start();

?>

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


if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['image'])) {
    $image=$_POST['image'];
}
if (!isset($_POST['image'])) {
    $image='https://media.istockphoto.com/id/520946304/photo/classical-symphony-shines-with-musical-notes-from-an-ancient-book.jpg?s=2048x2048&w=is&k=20&c=KiNVcTXQJlkUcd3yCjbAQLztVxkWYp-D2tzuE0Gw5mM=';
}
if (isset($_POST['type'])) {
    $type= $_POST['type'];
}
if (isset($_POST['about'])) {
    $about=$_POST['about'];
}
if (isset($_POST['year'])) {
    $year=intval($_POST['year']);
}
if (isset($_POST['verse'])) {
    $verse=$_POST['verse'];
}

$query=$db->prepare('INSERT INTO `artist-works` (`name`,`type`,`image`, `about`, `verse`, `date`)
VALUES (:name,:type,:image, :about, :verse, :year);');

$query->bindParam(':name', $name);
$query->bindParam(':type', $type);
$query->bindParam(':image', $image);
$query->bindParam(':about', $about);
$query->bindParam(':verse', $verse);
$query->bindParam(':year', $year);

$query->execute();

    echo '<div class="container">' .
        '<div class="image-description-container">' .
        '<img class="images" src="' . $image. '">'.

//        if (isset($_POST['image'])) {
//        echo '<img class="images" src="' . $image. '">' .}
//        else {
//           echo  '<img class="images" src="' .'https://media.istockphoto.com/id/520946304/photo/classical-symphony-shines-with-musical-notes-from-an-ancient-book.jpg?s=2048x2048&w=is&k=20&c=KiNVcTXQJlkUcd3yCjbAQLztVxkWYp-D2tzuE0Gw5mM=';
//            . '">'
//             }

        '<div class="description">' . '<div class="name">' . $name . '</div>' .
        '<div class="type">' . $type . '<br>' . '</div>' .
        '<div class="about">' . $about . '<br>' . '</div>' .
        '<div class="date">' . $year .
        '<div class="about">' . $verse . '<br>' . '</div>' .'<br><hr>' . '</div>' . '</div>' . '</div>' . '</div>'
.'<div class="container-1">'.
//
//if ((isset($_POST['image'])
//|| (isset($_POST['type'])
//|| (isset($_POST['about'])
//|| (isset($_POST['year'])
//|| (isset($_POST['verse']))
// { echo '<p class="text">'.'Form submitted successfully'.'</p>';}
 '</div>'.'</div>'.'</div>'.'</div>';
?>
</body>
</html>

