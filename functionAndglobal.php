<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 5;
    $y = 5;

    function mytest(){
        global $x , $y;
        global $z;
        $z = $x + $y;
        echo "<p>Variable z is: $z<p>";
    }
    mytest();
    echo $z;

    $text = "<br>Hello";
    echo $text, " World!";
    ?>
</body>
</html>
