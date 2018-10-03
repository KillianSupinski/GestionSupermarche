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
        return $sql->result();
    }
    public function getAllEmploye($idRay)
    {
        $sql = $this->db->query("select employe.prenomE, travailler.date, travailler.temps
                                from rayon, travailler, employe
                                where rayon.numR = travailler.codeR
                                AND travailler.codeE = employe.numE
                                AND rayon.numR=".$idRay);
        return $sql->result();
    }
    public function getSumHeure($idRay)
    {
        $sql = $this->db->query("select SUM(travailler.temps) as tempstotal
                                from rayon, travailler, employe
                                where rayon.numR = travailler.codeR
                                AND travailler.codeE = employe.numE
                                AND rayon.numR=".$idRay);
        return $sql->result();
    }
}

