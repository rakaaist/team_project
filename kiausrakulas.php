<?php

$random_num = rand(1, 5);

if ($random_num === 1) {
    $oracle_text = 'Tikrai taip';
}   elseif ($random_num === 2) {
    $oracle_text = 'Taip';
}   elseif ($random_num === 3) {
    $oracle_text = 'Gal';
}   elseif ($random_num === 4) {
    $oracle_text = 'Ne';
}   else {
    $oracle_text = 'NICHUJA';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP FIGHT CLUB</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            font-family: 'Orbitron', sans-serif;
        }
        .background-main {
            background-image: url("byvis.jpg");
            background-size: cover;
            background-position: center;
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
        .page-title {
            letter-spacing: 10px;
            color: black;
            padding: 50px 0 30px 310px;
        }
        .background-oracle {
            position: relative;
            width: 550px;
            height: 550px;
            background-image: url("magicball.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            border-radius: 50%;
            margin-left: 200px;
        }

        .oracle-text {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, 50%);;
            font-family: 'Orbitron', sans-serif;
            color: #66ff99;
            font-size: 25px;
            animation: oracle_text_anime 1.5s;
        }

        @keyframes oracle_text_anime {
            from {
                transform: rotateX(360deg) translate(-50%, 50%);
                font-size: 70px;
            }
            to {
                transform: rotateX(-360deg) translate(-50%, 50%);
                font-size: 30px;
            }
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
                <a class="selected" href="kiausrakulas.php">Kiaušrakulas</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
        </ul>
    </nav>
</header>
<main class="background-main">
    <div class="kiausrakulas-container">
        <h1 class="page-title">Kiaušrakulas</h1>
        <div class="background-oracle"><span class="oracle-text"><?php print $oracle_text; ?></span></div>
    </div>
</main>
</body>
</html>
