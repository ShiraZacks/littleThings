<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Life doesn't need to be perfect to be wonderful! Take the time to appreciate the little things in life. Check us out for a quote of the day and a little thing to appreciate!">
    <meta name=”robots” content="index, nofollow">
    <meta name="title" content="Little Things in Life">
    <title>Little Things</title>
    <link rel="stylesheet" type="text/css" href="style.css?<?= time() ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Della+Respira&family=Fondamento&family=Macondo&family=Satisfy&display=swap" rel="stylesheet">
    <script defer type="text/javascript" charset="utf-8" src="script.js?<?= time() ?>"></script>
    <link rel="icon" type="image/png" href="icons/happiness.png">
</head>

<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$DBName = 'littlethingsinlife';
$conn = mysqli_connect($servername, $username, $password, $DBName);
if (mysqli_connect_errno()) {
    echo "Something went wrong... Please contact me to let me know you see this message!! 10 points if you are the first one!" . mysqli_connect_error();
    exit();
}
$grabQuote = mysqli_query($conn, 'SELECT `quote` FROM `quotes` WHERE `day` = DAYOFYEAR(CURRENT_DATE())');
$quote = mysqli_fetch_array($grabQuote);
$grabThing = mysqli_query($conn, 'SELECT `thing` FROM `things` WHERE `day` = DAYOFYEAR(CURRENT_DATE())');
$thing = mysqli_fetch_array($grabThing);
?>

<body class="centerText">
    <div class="sectionTextDark">
        <h1 class="logo highlight"><span class="spacerSpan">〖</span>LITTLE THINGS IN LIFE<span class="spacerSpan">〗</span></h1>
        <img class="bottomBorder" src="icons/flower_7.png">
    </div>

    <div class=" sectionText3">
        <h2>Today, let's take a moment to appreciate</h2>
        <h2><?php print $thing['thing']; ?></h2>
    </div>

    <div class="sectionTextDark">
        <h2 class="quoteTitle">Today's Saying</h2>
        <h2><?php print $quote['quote']; ?></h2>
    </div>

    <div class="sectionText3">
        <h3>In our fast-paced and busy world, it's easy to overlook the small moments that bring us joy and happiness.</h3>
        <h3>Take the time to notice and appreciate the little things in life!</h3>
        <h3>Check back every day for a new idea and saying, and feel free to <a href="addLittleThing.php">share</a> your own bits of happiness.</h3>
    </div>

    <footer class="sectionTextDark">
        <p><a class="light" href="contact.php">Contact me</a> <a class="light" href="addLittleThing.php">Share your little things</a></p>
        <p>&copy; <?php echo date("Y"); ?> Little Things In Life <a href="https://shirazacks.github.io/">Shira Zacks</a></p>
    </footer>
</body>

</html>