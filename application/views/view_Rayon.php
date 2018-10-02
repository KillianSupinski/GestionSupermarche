<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JS/mesFonctions.js"></script>
    <script src="JQuery/jquery-3.1.1.js"></script>
</head>
<body>
    <select id="lstRayon">
    <?php
    foreach($lesRayons as $unRayon)
    {
        echo " <option value='".$unRayon->numR."' >".$unRayon->nomR ;
    }
    ?>
    </select>
</body>
</html>