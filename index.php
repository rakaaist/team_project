<?php
    $team_name = 'Bybys ir kiausai';
    $names = rand(1, 4);

    $teammate_name = '';

    if ($names === 1) {
        $teammate_name = 'Laurynas';
    } elseif ($names === 2) {
        $teammate_name = 'Aiste';
    } elseif ($names === 3) {
        $teammate_name = 'Tadas';
    } else {
        $teammate_name = 'Arvydas';
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kiausrakulas</title>
    <style>
        * {
            font-family: 'Orbitron', sans-serif;
            color: #151414;
            margin: 0;
        }
        body {
            background: url("https://images.unsplash.com/photo-1583434987437-1b9dcbe44c9e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1929&q=80");
            background-size: cover;
            height: 100vh;
        }
        h1 {
            margin: 40px 0 20px 0;
        }
        h1,
        p {
            text-align: center;
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
    </style>
</head>
<body>
    <header>
        <nav>
            <ul class="navigation-links">
                <li><a class="selected" href="index.php">Home</a></li>
                <li><a href="kiausrakulas.php">Kiaušrakulas</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1><?php print $team_name ?></h1>
        <p>Siuo metu laisvas kiausrakulas: <?php print $teammate_name ?></p>
    </main>
</body>
</html>