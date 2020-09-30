<?php
    $link=mysqli_connect("localhost","root","",);
    mysqli_select_db($link,"sample");
    $sql="SELECT * FROM sample;";
    $aResult=mysqli_query($link,$sql);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <?php

    while($rows = mysqli_fetch_array($aResult,MYSQLI_ASSOC))
    { 
        $id = $rows['id'];
        $sample = $rows['sample'];

    ?>
    <h1><?php echo $sample;?></h1>

    <?php } ?>
</body>
</html>