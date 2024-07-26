<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $jokes=array("1"=>"What is the shit made by bull called?Bullshit",
        "Bijesh Maharjan",
        "Did you know Sanish height and Average elephant's penis is the same size?",
        "What do you call a carefull wolf? A ware Wolf"
);
        $index=rand(0,4);
        $randomJokes=$jokes[$index];
        echo"$randomJokes";
    ?>
</body>
</html>