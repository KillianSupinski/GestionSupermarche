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
<label>Les secteurs</label><br>
<select id="idSecteur">
    <?php 
    
    foreach($lesSecteurs as $unSecteur)
    {
       echo " <option value='".$unSecteur->numS."'>"; echo $unSecteur->nomS;
    }
    
    ?>
    </select> 
    <br><br>
    <label>Les Rayons</label><br>
    <div id="divRayons"></div><br><br>
    <label>Les employés</label>
    <div id="divEmploye"></div><br>
    <label>Heure total</label><br>
    <div id="divHeure"></div>
</body>
</html>