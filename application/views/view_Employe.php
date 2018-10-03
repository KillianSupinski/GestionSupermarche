<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JS/fonction.js"></script>
    <script src="JQuery/jquery-3.1.1.js"></script>
</head>
<body>

        <?php
        foreach($lesEmployes as $unEmploye)
        {

            echo $unEmploye->prenomE," ",$unEmploye->date. " ". $unEmploye->temps."<br>" ;
            
        }
        ?>
</body>
</html>