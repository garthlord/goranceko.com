<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;;
use Symfony\Component\HttpFoundation\Response;

class SeoController extends AbstractController
{
    private $_host;
    const CHANGEFREQ = 'always';
    const PRIORITY = '0.5';

    /**
     * @Route("/sitemap.xml", name="sitemap")
     */
    public function sitemap()
    {
        $this->_host = getenv('WEBSITE_URL');
        $date = date('Y-m-d');
        $urlset = [
            [
                'loc' => $this->_host,
                'lastmod' => $date,
                'changefreq' => self::CHANGEFREQ,
                'priority' => self::PRIORITY,
            ],
            [
                'loc' => $this->_host . '/jasna',
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

    /**
     * @Route("/robots.txt", name="robots")
     */
    public function robots()
    {
        $this->_host = getenv('WEBSITE_URL');
        $response = new Response(
            $this->renderView('seo/robots.txt.twig', ['sitemap' => $this->_host . $this->generateUrl('sitemap')])
        );
        $response->headers->set('Content-Type', 'text/plain');
 
        return $response;
    }
}
