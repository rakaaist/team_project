<?php
$random_background = rand(1, 2);

    if ($random_background === 1) {
        $background_image = 'https://jp.lt/wp-content/uploads/2019/03/beavis-920x584.png';
    } else {
        $background_image = 'https://i.imgur.com/in25BfW.jpg';
    }

    $phone_prefix = '+370';
    $random_phone_number_1 = rand(1111111, 9999999);
    $random_phone_number_2 = rand(1111111, 9999999);
    $random_phone_number_3 = rand(1111111, 9999999);
    $random_phone_number_4 = rand(1111111, 9999999);

    $finalized_phone_number_1 = $phone_prefix . $random_phone_number_1;
    $finalized_phone_number_2 = $phone_prefix . $random_phone_number_2;
    $finalized_phone_number_3 = $phone_prefix . $random_phone_number_3;
    $finalized_phone_number_4 = $phone_prefix . $random_phone_number_4;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacts</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        * {
            font-family: 'Orbitron', sans-serif;
            margin: 0px;
        }
        header {
            background-color: dimgrey;
            padding: 10px;
        }
        main {
            background-image: url("<?php print $background_image; ?>");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }
        article {
            padding: 60px;
        }
        ul {
            list-style: none;
            padding-right: 50px;
        }
        .navigation-links {
            display: flex;
            justify-content: flex-end;
        }
        .selected {
            color: indianred;
        }
        a {
            text-decoration: none;
            color: sandybrown;
            letter-spacing: 3px;
        }
        h1 {
            padding-bottom: 30px;
            color: sandybrown;
        }
        li {
            margin: 0 10px;
        }
        p {
            color: crimson;
            font-size: 15px;
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
                <a href="kiausrakulas.php">Kiaušrakulas</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>
            <li>
                <a href="contact.php" class="selected">Contact</a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <article>
        <h1>Contact Us!</h1>
        <ul>
            <li>
                <p><i class="fas fa-phone"></i> Aiste <?php print $finalized_phone_number_1; ?></p>
            </li>
            <li>
                <p><i class="fas fa-phone"></i> Arvydas <?php print $finalized_phone_number_2; ?></p>
            </li>
            <li>
                <p><i class="fas fa-phone"></i> Laurynas <?php print $finalized_phone_number_3; ?></p>
            </li>
            <li>
                <p><i class="fas fa-phone"></i> Tadas <?php print $finalized_phone_number_4; ?></p>
            </li>
        </ul>
    </article>
</main>
</body>
</html>
