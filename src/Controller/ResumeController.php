<?php

namespace App\Controller;

use App\Utils\Resume;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ResumeController extends AbstractController
{
    private $_host;

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

    /**
     * @Route("/resume_download/{person}", name="resume_download")
     */
    public function download(Pdf $snappy, $person)
    {
        // in dev environment this will not work, you should replace it with real domain
        // ToDo - find alternative that will work in dev environment also
        $this->_host = getenv('WEBSITE_URL');

        $route = "resume_{$person}";

        return new PdfResponse(
            $snappy->getOutput("{$this->_host}{$this->generateUrl($route)}"),
            "{$route}.pdf"
        );

    }
}
