<?php

class Model_Secteur extends CI_Model
{
    public function getAllSecteur()
    {
        $sql = $this->db->query("select numS, nomS from secteur");
        return $sql->result();
    }
    
    public function getAllRayons($idSect)
    {
        
        $sql = $this->db->query("select rayon.numR, rayon.nomR
                                 from rayon, secteur
                                 where secteur.numS = rayon.numSecteur
                                 AND secteur.numS =".$idSect);
    }
}

