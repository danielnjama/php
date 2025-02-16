<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP Page</title>
</head>
<body>
    <h1>Welcome to My PHP Website</h1>
    
    <p>This is a simple PHP page with no database connection.</p>

    <div>
        <?php
            // Simple PHP code to display a message
            echo "Hello, this message is generated by PHP!";
        ?>
    </div>

    <p>Current Date and Time:</p>
    <div>
        <?php
            // Display the current date and time using PHP
            echo date("Y-m-d H:i:s");
        ?>
    </div>
</body>
</html>
