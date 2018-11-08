<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SeoController extends AbstractController
{
    const HOST = 'https://www.goranceko.com';
    const CHANGEFREQ = 'always';
    const PRIORITY = '0.5';

    /**
     * @Route("/sitemap.xml", name="sitemap")
     */
    public function index(Request $request)
    {
        $date = date('Y-m-d');
        $urlset = [
            [
                'loc' => self::HOST,
                'lastmod' => $date,
                'changefreq' => self::CHANGEFREQ,
                'priority' => self::PRIORITY,
            ],
            [
                'loc' => self::HOST . '/jasna',
                'lastmod' => $date,
                'changefreq' => self::CHANGEFREQ,
                'priority' => self::PRIORITY,
            ],
        ];

        $response = new Response(
            $this->renderView('seo/sitemap.xml.twig', ['urlset' => $urlset])
        );
        $response->headers->set('Content-Type', 'text/xml');
 
        return $response;
    }
}
