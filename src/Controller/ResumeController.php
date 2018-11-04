<?php

namespace App\Controller;

use App\Utils\Resume;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ResumeController extends AbstractController
{
    /**
     * @Route("/", name="resume_goran")
     */
    public function goranceko(Resume $resume)
    {
        return $this->render('resume/index.html.twig', [
            'resume' => $resume->getResume('goran'),
        ]);
    }

    /**
     * @Route("/jasna", name="resume_jasna")
     */
    public function jasnaborbeljceko(Resume $resume)
    {
        return $this->render('resume/index.html.twig', [
            'resume' => $resume->getResume('jasna'),
        ]);
    }
}
