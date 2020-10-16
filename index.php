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
            margin: 0 auto;
        }
        body {
            background: url("https://images.unsplash.com/photo-1583434987437-1b9dcbe44c9e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1929&q=80");
            background-size: cover;
        }

        h1,
        p {
            text-align: center;
        }

        header {
            background-color: dimgrey;
            padding: 10px;
        }

        main {
            background-image: url("<?php print $background_image; ?>");
            background-repeat: no-repeat;
            background-size: cover;
            height: 800px;
        }

        .navigation-links {
            display: flex;
            justify-content: flex-end;
            list-style: none;
            padding-right: 50px;
        }

        a {
            text-decoration: none;
            letter-spacing: 3px;
        }
    </style>
</head>
<body>
    <main>
        <header>
            <nav>
                <ul class="navigation-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="kiausrakulas.php">Kiaušrakulas</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
    </main>
        <h1><?php print $team_name ?></h1>
        <p>Siuo metu laisvas kiausrakulas: <?php print $teammate_name ?></p>
</body>
</html>