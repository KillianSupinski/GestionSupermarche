function AfficherLesRayons(idSecteur)
{
    //alert(idSecteur);

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