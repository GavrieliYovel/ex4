<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome</h1>
    <?php
        $un = $_GET["username"];
        $coin = $_GET["coins"];
        $ph = $_GET["phone"];

        if($un == "yovel gavrieli")
            echo "<h2>" . $un . "</h2><br> <h3> New coin balance: " . $coin . "<br> New phone number: " . $ph . "</h3>";
        else
            echo "<h2>Username is not exist </h2>";
     ?>
</body>
</html>