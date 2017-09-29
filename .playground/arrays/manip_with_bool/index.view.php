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
                      
        </h1>
    </header>
    <ul>
        <?php foreach ($task as $feature => $info) : ?>
            <li>
                <strong>
                    <?=$feature == 'assigned_to' ? 'Assigned To' : ucfirst($feature);?>:
                </strong>
                <?php
                    if( gettype($info) === "string") {
                        echo $info;
                    } else {
                        if($info) {
                            echo 'Completed!';
                        } else {
                            echo 'Not Completed';
                        }
                    }
                ?>
            </li>
        <?php endforeach ?>
    </ul>  
</body>
</html>