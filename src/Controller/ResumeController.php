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
        $resume = [
            'name' => 'Goran Čeko',
            'title' => 'Web Developer',
            'email' => 'goranceko11@gmail.com',
            'description' => 'I am working as a Head of Development and I enjoy tackling different programming problems and thinking on different approaches to solving them.',
            'keywords' => 'Goran Čeko,Developer,Web,PHP,MVC,Symfony,Laravel,Node.js,Professional,Reliable',
            'accomplishments' => [
                'Commercial experience: 5 years of software development.',
                'Total experience: 9 years of software development.',
                'Designed, developed, tested and maintained Web/PHP/Javascript based applications.',
                'Worked directly with clients on requirements and technical specifications.',
                'Provided training for team members and colleagues.',
            ],
            'experience' => [[
                    'name' => 'Commercial experience',
                    'jobs' => [[
                            'title' => 'PHP Developer - IN TECH d.o.o.',
                            'start' => 'Jun 2013',
                            'end' => 'Present',
                            'list' => [
                                'Developing new functionalities',
                                'Maintaining web applications and systems',
                                'Providing support for colleagues',
                                'Researching new technologies',
                            ],
                            'projects' => [[
                                    'title' => 'Orders Panel',  
                                    'description' => 'This panel is used for managing book orders, from order itself untill books are shipped to a client. After order is made, book goes through process of technical editing (if necessary), creating invoice, payment, printing and shipping. Order panel communicates with other parts of IntechOpen\'s system (like invoicing system) so it can generate necessary data, show all needed data in one place and check if books satisfies criteria for proceeding to next step.',
                                ],[
                                    'title' => 'Technical Editing Panel',
                                    'description' => 'It serve as a communication platform between Publishing Process Managers and Technical Editors. Also, when Technical Editor uploads formatted XML, file automatically goes through series of transformations and creates PDF file.'
                                ],
                            ],
                        ],
                    ],
                ],[
                    'name' => 'Noncommercial experience',
                    'jobs' => [[
                            'title' => 'Volunteer - Center for gifted children',
                            'start' => 'Jan 2016',
                            'end' => 'Present',
                            'list' => [
                                'Maintaining website in WordPress',
                                'Adding new content to website',
                                'Adding new functionalities to website',
                            ],
                        ],
                    ],
                ],
            ],
            'skills' => [[
                    'title' => 'Languages',
                    'description' => [
                        'PHP, Javascript, SQL, HTML, CSS, Regular expressions',
                    ],
                ],[
                    'title' => 'Frameworks/libraries',
                    'description' => [
                        'MVC, Zend Framework, Laravel, jQuery',
                    ],
                ],[
                    'title' => 'Source control',
                    'description' => [
                        'Git, Github, Subversion, Composer, Bitbucket',
                    ],
                ],[
                    'title' => 'Services/API',
                    'description' => [
                        'Paypal API, Moneybookers API, Google analytics API, Google Chart API, Geo API',
                    ],
                ],[
                    'title' => 'Protocols',
                    'description' => [
                        'HTTP, FTP, SMTP, POP, IMAP',
                    ],
                ],[
                    'title' => 'Concepts',
                    'description' => [
                        'Object oriented, Design patterns, Hooks and plugins',
                        'Data warehouse, Web crawler',
                        'Network routing, iptables',
                    ],
                ],
            ],
            'education' => [[
                    'start' => '2014',
                    'end' => '2014',
                    'title' => '3 days of Symfony and PHP focused hands-on workshops',
                    'link' => 'http://2014.phpsummercamp.com/',
                    'location' => 'PHP Summer Camp, Rovinj',
                ],[
                    'start' => '2010',
                    'end' => '2012',
                    'title' => 'Master\'s degree, Information and Communication Systems',
                    'link' => '',
                    'location' => 'University of Rijeka Department of Informatics',
                ],[
                    'start' => '2007',
                    'end' => '2010',
                    'title' => 'Bachelor\'s degree, Informatics',
                    'link' => '',
                    'location' => 'University of Rijeka Department of Informatics',
                ],[
                    'start' => '2003',
                    'end' => '2007',
                    'title' => 'Mechanical engineer (Computer Technician)',
                    'link' => '',
                    'location' => 'Technical School of Mechanical Engineering Rijeka',
                ],
            ],
            'about' => [[
                    'key' => 'Full name',
                    'value' => 'Goran Čeko',
                    'link' => '',
                    'target' => '',
                ],[
                    'key' => 'Email',
                    'value' => 'goranceko11@gmail.com',
                    'link' => 'mailto:goranceko11@gmail.com',
                    'target' => '_self',
                ],[
                    'key' => 'Phone',
                    'value' => '(+385) 98/906-1314',
                    'link' => '',
                    'target' => '',
                ],[
                    'key' => 'Skype',
                    'value' => 'goranceko11',
                    'link' => 'skype:goranceko11?chat',
                    'target' => '_self',
                ],[
                    'key' => 'GitHub',
                    'value' => 'garthlord',
                    'link' => 'https://github.com/garthlord',
                    'target' => '_blank',
                ],[
                    'key' => 'Linkedin',
                    'value' => 'goranceko11',
                    'link' => 'http://hr.linkedin.com/in/goranceko11/',
                    'target' => '_blank',
                ],[
                    'key' => 'Location',
                    'value' => 'Rijeka, Croatia (EU)',
                    'link' => '',
                    'target' => '',
                ],[
                    'key' => 'Year of birth',
                    'value' => '1989',
                    'link' => '',
                    'target' => '',
                ],[
                    'key' => 'Nationality',
                    'value' => 'Croatian (EU)',
                    'link' => '',
                    'target' => '',
                ],
            ],
        ];

        return $this->render('resume/index.html.twig', [
            'resume' => $resume,
        ]);
    }
    
    /**
     * @Route("/jasna", name="resume_jasna")
     */
    public function jasnaborbeljceko()
    {
        return $this->render('base.html.twig');
    }
}
