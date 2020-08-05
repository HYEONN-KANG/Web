<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>function</h1>
    <?php 
    $str = "Lorem ipsum dolor, sit amet consectetur adipisicing elit.
     Praesentium, deleniti. Excepturi, itaque adipisci impedit 
     tempora exercitationem dicta, enim soluta aut provident blanditiis,
      esse a cumque voluptas perferendis! Possimus, 
      nesciunt accusantium.";
      echo $str;
    ?>

    <h2>strlen()</h2>
    <?php
    echo strlen($str);
    ?>

    <h2>nl2br</h2>
    <?php
    echo nl2br($str);
    ?>
</body>

</html>