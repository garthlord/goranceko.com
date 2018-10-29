<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ResumeController extends AbstractController
{
    /**
     * @Route("/", name="resume_goran")
     */
    public function goranceko()
    {
        return $this->render('resume/index.html.twig');
    }
    
    /**
     * @Route("/jasna", name="resume_jasna")
     */
    public function jasnaborbeljceko()
    {
        return $this->render('base.html.twig');
    }
}
