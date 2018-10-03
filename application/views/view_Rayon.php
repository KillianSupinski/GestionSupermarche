<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JS/fonction.js"></script>
    <script src="JQuery/jquery-3.1.1.js"></script>
    <script>

    $
        (
            function()
            {
                $('select[id=idRayon]').change
                (
                    
                    function()
                    {  
                        AfficherLesEmploye($(this).val());
                        AfficherLesHeures($(this).val());
                    }
                )
            }
        );


    </script>
</head>
<body>
    <select id="idRayon">
    <?php
    foreach($lesRayons as $unRayon)
    {
        echo " <option value='".$unRayon->numR."' >".$unRayon->nomR ;
    }
    ?>
    </select>
</body>
</html>