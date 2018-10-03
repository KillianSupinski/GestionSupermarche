
function AfficherLesRayons(idSecteur)
{
  //  alert(idSecteur);
  //console.log(idSecteur);

$.ajax
(
    
    {
        
        type:"get",
        url:"index.php/ctrl_Secteur/AfficherLesRayonsBis",
        data:"idSect="+idSecteur,
        success:function(data)
        {
            
            $("#divRayons").empty();
            $("#divRayons").append(data);
        },
        error:function()
        {
            alert("Ereur d'affichage sur les Rayons");
        }
    }
);

}
function AfficherLesEmploye(idRayon)
{
  //  alert(idSecteur);
  //console.log(idSecteur);

$.ajax
(
    
    {
        
        type:"get",
        url:"index.php/ctrl_Secteur/AfficherLesEmployeBis",
        data:"idRay="+idRayon,
        success:function(data)
        {
            $("#divEmploye").empty();
            $("#divEmploye").append(data);
        },
        error:function()
        {
            alert("Ereur d'affichage sur les Rayons");
        }
    }
);
}
function AfficherLesHeures(idRayon)
{
$.ajax
(
    
    {
        
        type:"get",
        url:"index.php/ctrl_Secteur/AfficherLesHeures",
        data:"idRay="+idRayon,
        success:function(data)
        {
            
            $("#divHeure").empty();
            $("#divHeure").append(data);
        },
        error:function()
        {
            alert("Ereur d'affichage sur les Rayons");
        }
    }
);
}
