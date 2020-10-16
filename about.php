<?php
$background_option = rand(0, 1);
$story_option = rand(1, 3);

if ($background_option) {
    $background_image = 'https://g2.dcdn.lt/images/pix/880x550/tEeDEUXy_Ig/file14914141_byvis_didi_1.jpg';
    $class = 'black_font';
} else {
    $background_image = 'https://www.wallpaperup.com/uploads/wallpapers/2013/03/14/52018/ba7305b276ca31542cb507fe3ba6a068-700.jpg';
    $class = 'white_font';
}

if ($story_option === 1) {
    $story = 'We meet every day at 9am with a six pack of beers and try to learn PHP tricks.';
} else if ($story_option === 2) {
    $story = 'Studying remotely makes us anti-social so better we come back to class as soon as possible!';
} else if ($story_option === 3) {
    $story = 'We like to play pool and table tennis on those rare occasions when we are sober!';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="10" >
    <title>About</title>
    <style>
        * {
            font-family: 'Orbitron', sans-serif;
            color: black;
            margin: 0px;
        }
        body {
            background-image: url(<?php print $background_image; ?>);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
        }
        header {
            background-color: dimgrey;
            padding: 10px;
        }
        ul {
            list-style: none;
            padding-right: 50px;
        }
        .navigation-links {
            display: flex;
            justify-content: flex-end;
        }
        a {
            text-decoration: none;
            color: sandybrown;
            margin: 0 10px;
            letter-spacing: 3px;
        }
        .selected {
            color: indianred;
        }
        main {
            text-align: center;
            background-image: url(<?php print $background_image; ?>);
            background-size: cover;
            background-repeat: no-repeat;
            padding: 10px;
        }
        .story {
            padding: 20px 0;
        }
        h1 {
            font-size: 40px;
            padding: 10px;
        }
        h2 {
            font-size: 20px;
        }
        .white_font {
            color: white;
        }
        .black_font {
            color: black;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <ul class="navigation-links">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="kiausrakulas.php">Kiaušgitrakulas</a>
            </li>
            <li>
                <a class="selected" href="/about.php">About</a>
            </li>
            <li>
                <a href="/contact.php">Contact</a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <h1 class="<?php print $class; ?>">We are Bybis Kiaušai!<br></h1>
    <h2 class="<?php print $class; ?>">The best fucking team in the world!</h2>
    <div class="story"><p class="<?php print $class; ?>"><?php print $story; ?><p></div>
</main>
</body>
</html>
