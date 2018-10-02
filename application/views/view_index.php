<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JS/mesFonctions.js"></script>
    <script src="JQuery/jquery-3.1.1.js"></script>
    <script>
 
        $
        (
            function()
            {
                $('select[id=idSecteur]').change
                (
                    function()
                    {
                        AfficherLesRayons($(this).val());
                    }
                )
            }
        );

</script>
</head>

<body>
<select id="idSecteur">
    <?php 
    
    foreach($lesSecteurs as $unSecteur)
    {
       echo " <option value='".$unSecteur->numS."'>"; echo $unSecteur->nomS ;
    }
    
    ?>
    </select> 

    <div name="divRayons">Les Rayons</div><br>
    <div name="divEmploye">Les Employés</div><br>
</body>
</html>