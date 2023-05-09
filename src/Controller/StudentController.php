<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    #[Route('/student', name: 'app_student')]
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }
/*xml,yml, annotation, attribut */
    #[Route('/list/', name: 'list_student')]
    public function ListStudent($category):Response{
        return new Response("Bonjour 3A10");
    }
    #[Route('/list/{student}', name: 'list_student')]
    public function ListStudent1($student): Response
    {
        return new Response("Student name:".$student);
    }
    #[Route('/list/', name: 'list_student')]
    public function AffichageStudent():Response{
        $Student="3A30";
        $Salle="j21";
        $formations = array(
            array('ref' => 'form147', 'Titre' => 'Formation Symfony
            4','Description'=>'formation pratique',
            'date_debut'=>'12/06/2020', 'date_fin'=>'19/06/2020',
            'nb_participants'=>19) ,
            array('ref'=>'form177','Titre'=>'Formation SOA' ,
            'Description'=>'formation
            theorique','date_debut'=>'03/12/2020','date_fin'=>'10/12/2020',
            'nb_participants'=>0),
            array('ref'=>'form178','Titre'=>'Formation Angular' ,
            'Description'=>'formation
            theorique','date_debut'=>'10/06/2020','date_fin'=>'14/06/2020',
            'nb_participants'=>12));
        return $this->render('student/list.html.twig',array("cat"=>$Student,"salle"=>$Salle,"formation"=> $formations));
    }
}
