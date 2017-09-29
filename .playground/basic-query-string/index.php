<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        header {
            background: lightgrey;
            padding: 2em;
            text-align: center; 
        }
    </style>

</head>
<body>
    <header>
        <h1>
            <?php
                $name = isset($_GET['name']) ? $_GET['name'] : 'world';
                echo "Hello, $name"; 
            ?>
        </h1>
    </header>    
    <header>
        <h1>
            <?= htmlspecialchars(isset($_GET['name']) ? "Hello, " . $_GET['name'] : "Hello, world"); 
            ?>
        </h1>
    </header>
</body>
</html>