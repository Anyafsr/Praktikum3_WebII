<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prak305</title>
</head>
<body>
    <form method="post">
        <input type="text"name="kata">
        <input type="submit"value="submit">
    </form></br>
    <?php
    $letter = NULL;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['kata'])){
            $letter=$_POST['kata'];
            echo "<h2>Input:</h2> <br>$letter<br>";
            echo "<h2>Output:</h2> <br>";
        }
    }
    for($i = 0 ;$i<strlen($letter);$i++){
        $capletter = strtoupper($letter);
        echo $capletter[$i];
        for($j=1;$j<strlen($letter);$j++){
            $smalletter = strtolower($letter);
            echo $smalletter[$i];
        }
    }
    ?>
</body>
</html>