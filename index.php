<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>

<body>
    <main>
        <form action="" method="GET">
            <input type="text" name="numberOfCharacters">
            <button>Generate password</button>

            <?php
            if (isset($_GET['numberOfCharacters'])) {
                echo "<h1> {$_GET['numberOfCharacters']} </h1>";
            }
            ?>
        </form>
    </main>
</body>

</html>