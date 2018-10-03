<?php
class ctrl_Secteur extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_Secteur');
        $data["lesSecteurs"] = $this->Model_Secteur->getAllSecteur();
        $this->load->view('view_index', $data);
    }

    public function AfficherLesRayonsBis()
    {
        $this->load->model('Model_Secteur');
        $data["lesRayons"] = $this->Model_Secteur->getAllRayons($_GET['idSect']);
        $this->load->view('view_Rayon', $data);
    }
    public function AfficherLesEmployeBis()
    {
        $this->load->model('Model_Secteur');
        $data["lesEmployes"] = $this->Model_Secteur->getAllEmploye($_GET['idRay']);
        
        $this->load->view('view_Employe', $data);
    }
    public function AfficherLesHeures()
    {
        $this->load->model('Model_Secteur');
        $data["lesHeures"] = $this->Model_Secteur->getSumHeure($_GET['idRay']);
        
        $this->load->view('view_Heure', $data);
    }
}