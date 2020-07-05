<?php

namespace App\Utils;

class Resume
{
    public function getResume($person, $host): array
    {
        $resumes = [
            'goran' => [
                'name' => 'Goran Čeko',
                'title' => 'Web Developer',
                'email' => 'goranceko11@gmail.com',
                'description' => 'I am working as a Head of Development and I enjoy tackling different programming problems and thinking on different approaches to solving them.',
                'keywords' => 'Goran Čeko,Developer,Web,PHP,MVC,Symfony,Laravel,Node.js,Professional,Reliable',
                'sections' => [[
                        'name' => 'Accomplishments',
                        'items' => [[
                                'parts' => [[
                                        'type' => 'list',
                                        'list' => [
                                            'Commercial experience: 7 years of software development.',
                                            'Total experience: 11 years of software development.',
                                            'Designed, developed, tested and maintained Web/PHP/Javascript based applications.',
                                            'Worked directly with clients on requirements and technical specifications.',
                                            'Provided training for team members and colleagues.',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],[
                        'name' => 'Commercial experience',
                        'items' => [[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => 'Jun 2013',
                                        'end' => 'Present',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Web Developer - IN TECH d.o.o.',
                                    ],[
                                        'type' => 'list',
                                        'list' => [
                                            'Leading team of developers',
                                            'Mentoring junior developers',
                                            'Developing new functionalities',
                                            'Maintaining web applications and systems',
                                            'Providing support for colleagues',
                                            'Researching new technologies',
                                        ],
                                    ],[
                                        'type' => 'project',
                                        'title' => 'Website Backend',
                                        'description' => 'Backend of the website is built in PHP 7.1 under Symfony Framework. Its main purpose is to be the communication layer between DataBase (MySQL) and Website Frontend. Also it provides an API for our MTS system to be able to change data online (ie. when a new chapter is published) and offers CMS so that static pages are more easily created/updated and featured books/authors are chosen.',
                                    ],[
                                        'type' => 'project',
                                        'title' => 'Website Frontend',
                                        'description' => 'Website Frontend is built in Node.js (Express Framework). Frontend gets all necessary data from Backend over API (GraphQL) and uses data to host all published books and chapters. It offers open access to all chapters as well as an option to download all published chapters. It counts downloads and sends data to Backend.',
                                    ],[
                                        'type' => 'project',
                                        'title' => 'MTS',
                                        'description' => 'Manuscript Tracking System (MTS) is a system intended for authors and editors to use in the process of publishing. It is also used by ASM (Author Service Manager) that follows the whole lifecycle of manuscripts. Partners (technical editors, copyeditors, print and delivery units, etc.) are able to login to the system and to see what is important for their service. This system is built in php 5.3 with Zend Framework.',
                                    ],[
                                        'type' => 'project',
                                        'title' => 'Call System',
                                        'description' => 'Call system is a system used only for sending mass emails to contacts to check if they are interested in publishing in new projects that are starting. System can use an internal SMTP server, external SMTP relay or even SendGrid API to send emails. Built in php with Zend 2 Framework. Various API communication with our MTS is part of the system.',
                                    ],[
                                        'type' => 'project',
                                        'title' => 'SSO',
                                        'description' => 'Single Sign On (SSO) is a Firebase app used only to manage the whole register/login loop. Once logged in to one of our systems, the user can access all of them (Website, MTS, CRM). Is built with Node.js (Vue.js).',
                                    ],[
                                        'type' => 'project',
                                        'title' => 'CRM',
                                        'description' => 'This system is built as a replacement for MTS with more features primarily focused on business intelligence (leads, opportunities, analytics, etc.) CRM is built in Salesforce and is integrated with our MTS system so that both systems are in sync before we transfer all production to Salesforce CRM.',
                                    ],
                                ],
                            ],[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => 'Oct 2019',
                                        'end' => 'Present',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Web Developer - Rijeka Psihologije',
                                    ],[
                                        'type' => 'list',
                                        'list' => [
                                            'Developing web dashboard for application to event Rijeka Psihologije',
                                            'Maintaining web applications and systems',
                                            'System administrating and hosting',
                                        ],
                                    ],[
                                        'type' => 'project',
                                        'title' => 'About',
                                        'description' => 'System is built with php 7.2 with Symfony Framework. It serves as a place for lecturers to apply to participate in the event Rijeka Psihologije. Other than online form to apply it has a login area for Rijeka Psihologije employees to view and manage all applications, it offers various exports for easier organization of events and some postevent activities.'
                                    ],[
                                        'type' => 'project',
                                        'title' => 'Future',
                                        'description' => 'Plan is to build whole website with focus on searching and filtering event activities.'
                                    ],
                                ],
                            ],
                        ],
                    ],[
                        'name' => 'Noncommercial experience',
                        'items' => [[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => 'Jan 2016',
                                        'end' => 'Present',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Volunteer - Center for gifted children',
                                    ],[
                                        'type' => 'list',
                                        'list' => [
                                            'Maintaining website in WordPress',
                                            'Adding new content to website',
                                            'Adding new functionalities to website',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],[
                        'name' => 'Skill set',
                        'items' => [[
                                'parts' => [[
                                        'type' => 'terms',
                                        'terms' => [
                                            [
                                                'title' => 'Languages',
                                                'description' => [
                                                    'PHP, Javascript, Node.js, Vue.js, GraphQL, SQL, HTML, Twig, CSS, SCSS, Regular expressions',
                                                ],
                                            ],[
                                                'title' => 'Frameworks/Libraries',
                                                'description' => [
                                                    'MVC, Symfony, Zend Framework, Laravel, Express, jQuery',
                                                ],
                                            ],[
                                                'title' => 'Source control',
                                                'description' => [
                                                    'Git, Github, Subversion, Bitbucket',
                                                    'Composer, yarn, npm',
                                                ],
                                            ],[
                                                'title' => 'Services/API',
                                                'description' => [
                                                    'Amazon AWS, Amazon S3, Amazon CDN, OAuth',
                                                    'Paypal API, Google analytics API, Google analytics API, Google Chart API, Geo API',
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
                                    ],
                                ],
                            ],
                        ],
                    ],[
                        'name' => 'Education',
                        'items' => [[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => '2019',
                                        'end' => '2019',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'SymfonyLive London 2019',
                                        'href' => 'https://london2019.live.symfony.com/',
                                        'target' => '_blank',
                                    ],[
                                        'type' => 'text',
                                        'text' => 'SymfonyLive, London',
                                    ],
                                ],
                            ],[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => '2014',
                                        'end' => '2014',
                                    ],[
                                        'type' => 'title',
                                        'title' => '3 days of Symfony and PHP focused hands-on workshops',
                                        'href' => 'http://2014.phpsummercamp.com/',
                                        'target' => '_blank',
                                    ],[
                                        'type' => 'text',
                                        'text' => 'PHP Summer Camp, Rovinj',
                                    ],
                                ],
                            ],[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => '2010',
                                        'end' => '2012',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Master\'s degree, Information and Communication Systems',
                                    ],[
                                        'type' => 'text',
                                        'text' => 'University of Rijeka Department of Informatics',
                                    ],
                                ],
                            ],[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => '2007',
                                        'end' => '2010',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Bachelor\'s degree, Informatics',
                                    ],[
                                        'type' => 'text',
                                        'text' => 'University of Rijeka Department of Informatics',
                                    ],
                                ],
                            ],[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => '2003',
                                        'end' => '2007',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Mechanical engineer (Computer Technician)',
                                    ],[
                                        'type' => 'text',
                                        'text' => 'Technical School of Mechanical Engineering Rijeka',
                                    ],
                                ],
                            ],
                        ],
                    ],[
                        'name' => 'About me',
                        'items' => [[
                                'parts' => [[
                                        'type' => 'about',
                                        'list' => [[
                                                'key' => 'Full name',
                                                'value' => 'Goran Čeko',
                                            ],[
                                                'key' => 'Email',
                                                'value' => 'goranceko11@gmail.com',
                                                'href' => 'mailto:goranceko11@gmail.com',
                                                'target' => '_self',
                                            ],[
                                                'key' => 'Phone',
                                                'value' => '(+385) 98/906-1314',
                                            ],[
                                                'key' => 'Skype',
                                                'value' => 'goranceko11',
                                                'href' => 'skype:goranceko11?chat',
                                                'target' => '_self',
                                            ],[
                                                'key' => 'GitHub',
                                                'value' => 'garthlord',
                                                'href' => 'https://github.com/garthlord',
                                                'target' => '_blank',
                                            ],[
                                                'key' => 'Linkedin',
                                                'value' => 'goranceko11',
                                                'href' => 'http://hr.linkedin.com/in/goranceko11/',
                                                'target' => '_blank',
                                            ],[
                                                'key' => 'Location',
                                                'value' => 'Selce, Croatia (EU)',
                                            ],[
                                                'key' => 'Year of birth',
                                                'value' => '1989',
                                            ],[
                                                'key' => 'Nationality',
                                                'value' => 'Croatian (EU)',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'jasna' => [
                'name' => 'Jasna Borbelj Čeko',
                'title' => 'Magistra psihologije',
                'email' => 'jborbelj@gmail.com',
                'description' => '',
                'keywords' => 'Jasna Borbelj Čeko,Magistra psihologije, Psiholog',
                'sections' => [[
                        'name' => 'Radno iskustvo',
                        'items' => [[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => 'Listopad 2018',
                                        'end' => '',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Stručni suradnik psiholog - Sveučilišni Savjetovališni Centar - Psihološko savjetovalište',
                                    ],[
                                        'type' => 'list',
                                        'list' => [
                                            'Individualni i grupni psihološki tretmani',
                                            'Edukativne aktivnosti',
                                            'Vođenje administracije SSC-a',
                                            'Završena edukacija Osnovni trening za primjenu Terapije prihvačanjem i posvećenošću (ACT) organizirana od strane KBT Opcija (Lipanj 2019.)'
                                        ],
                                    ],
                                ],
                            ],[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => 'Listopad 2016',
                                        'end' => 'Listopad 2018',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Stručni suradnik psiholog i profesor - SŠ Otočac',
                                    ],[
                                        'type' => 'list',
                                        'list' => [
                                            'Poslovi stručnog suradnika psihologa – rad s učenicima, roditeljima i nastavnicima',
                                            'Planiranje, programiranje i izvođenje nastave za predmete psihologije i poslovne psihologije',
                                        ],
                                    ],
                                ],
                            ],[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => 'Ožujak 2015',
                                        'end' => 'Listopad 2016',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Stručni suradnik psiholog - Dječji dom Braća Mažuranić',
                                    ],[
                                        'type' => 'list',
                                        'list' => [
                                            'Savjetovanje, podrška i tretman djeci na smještaju i boravku u dječjem domu te djeci i mladima nakon izlaska iz ustanove',
                                            'Savjetovanje i podrška roditeljima, skrbnicima i udomiteljima',
                                            'Savjetovanje i educiranje odgojitelja',
                                            'Rad na projektima, sudjelovanje u Timu za deinstitucionalizaciju ustanove',
                                        ],
                                    ],
                                ],
                            ],[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => 'Rujan 2013',
                                        'end' => 'Ožujak 2015',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Psiholog pripravnik / Pomoćnik u nastavi - OŠ Zvonka Cara',
                                    ],[
                                        'type' => 'list',
                                        'list' => [
                                            'Poslovi podrške, odgoja i obrazovanja djeteta s posebnim potrebama (cerebralna paraliza)',
                                            'Poslovi stučnog suradnika psihologa (Individualni i grupni rad s učenicima, savjetovanje roditelja, savjetovanje i edukacija nastavnog osoblja)',
                                        ],
                                    ],
                                ],
                            ],[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => 'Travanj 2012',
                                        'end' => 'Travanj 2013',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Psiholog pripravnik - DV Rijeka',
                                    ],[
                                        'type' => 'list',
                                        'list' => [
                                            'Poslovi stručnog suradnika dječjeg vrtića',
                                            'Rad u posebnim skupinama s djecom s pervazivnim razvojnim poremećajem',
                                            'Rad u inkluzivnim skupinama djeca s govorno-jezičnim teškoćama',
                                            'Rad u kraćem specijaliziranom programu za darovitu djecu (BistRIć)',
                                            'Provođenje preventivnog programa za djecu u riziku od razvoja anksioznih poremećaja',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],[
                        'name' => 'Iskustvo u neprofitnom sektoru',
                        'items' => [[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => 'Prosinac 2012',
                                        'end' => '',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Psiholog - Centar za poticanje darovitosti Rijeka',
                                    ],[
                                        'type' => 'list',
                                        'list' => [
                                            'Rad u savjetovalištu za roditelje',
                                            'Osmišljavanje i provođenje radionica za potencijalno darovitu djecu (Radoznalci)',
                                            'Provođenje KLIK ljetnih radionica',
                                            'Organizacija i sudjelovanje u godišnjoj manifestaciji Dan darovitih',
                                            'Sudjelovanje u pisanju projektnih prijedloga',
                                            'Član upravnog odbora udruge od 2015. do 2019.',
                                            'Završena edukacija Ospospobljanja za primjenu i bodovanje testa potencijalne kreativnosti EPoC (Siječanj 2019.)'
                                        ],
                                    ],
                                ],
                            ],[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => 'Runaj 2014',
                                        'end' => 'Lipanj 2017',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Psiholog i voditelj psihoedukativnih radionica - ELAN Savjetovanje',
                                    ],[
                                        'type' => 'list',
                                        'list' => [
                                            'Osmišljavanje i planiranje psihoedukativnih radionica -"Ferije sa svrhom" i "Učenje nije mučenje"',
                                            'Neposredni grupni rad (5-9) s djecom osnovnoškolske dobi',
                                            'Evaluacija rada',
                                            'Savjetodavni i terapijski rad s djecom, mladima i roditeljima',
                                            'Istraživačke aktivnosti',
                                            'Sudjelovanje u pisanju projektnih prijedloga',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],[
                        'name' => 'Vještine',
                        'items' => [[
                                'parts' => [[
                                        'type' => 'terms',
                                        'terms' => [
                                            [
                                                'title' => 'Društvene vještine i kompetencije',
                                                'description' => [
                                                    'Prezentacijske vještine stečene u prezentiranju znanstvenog rada, u organiziranju i provođenju radionica i predavanja te sudjelovanju na manifestacijama poput Dana darovitih učenika i Rijeke psihologije, Tjedna psihologije. Prezentiranje na tribinama promocije udomiteljstva i socijalnih usluga "Novi život može početi u Novom" i "Dijete u srcu obitelji", komunikacija s medijima za navedene aktivnosti.',
                                                ],
                                            ],[
                                                'title' => 'Organizacijske vještine i kompetencije',
                                                'description' => [
                                                    'Vještine organiziranja i vođenja stečene u organizaciji i vođenju programa: "Vrijeme za mene" i "Posebni odgojni postupak" u udruzi "Oaza"; KLIK ljetnih radionica i ostalih radionica i predavanja za darovitu djecu i njihove roditelje pri Udruzi za promicanje darovitosti (2013. i 2014. godine), te "Ferije sa svrhom" u Elan savjetovanju.',
                                                    'Organiziranje tribina o novim socijalnim uslugama te promocija udomiteljstva "Novi život može početi u Novom", Novi Vinodolski (prosinac, 2015.) i "Dijete u srcu obitelji" u Senju (Svibanj 2016.).',
                                                    'Vještine upravljanja i organizacije rada udruge stečene kroz članstvo u upravnom odboru Centra za poticanje darovitosti, Rijeka.',
                                                ],
                                            ],[
                                                'title' => 'Računalne vještine i kompetencije',
                                                'description' => [
                                                    'Napredno baratanje Microsoft Office™ alatima (Word™, Excel™ and PowerPoint™)',
                                                    'Baratanje alatima za statističku obradu podataka (SPSS for Windows)',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],[
                        'name' => 'Edukacija',
                        'items' => [[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => 'Travanj 2016',
                                        'end' => 'Listopad 2018',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Psihoterapeutkinja kognitivno bihevioralne terapije (stupanj 2)',
                                    ],[
                                        'type' => 'text',
                                        'text' => 'HUBIKOT - Hrvatsko udruženje za bihevioralno kognitivne terapije',
                                    ],
                                ],
                            ],[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => 'Listopad 2013',
                                        'end' => 'Listopad 2014',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Dopunsko pedagoško psihološko obrazovanje nastavnika',
                                    ],[
                                        'type' => 'text',
                                        'text' => 'Filozofski fakultet Sveučilišta u Rijeci',
                                    ],
                                ],
                            ],[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => 'Siječanj 2013',
                                        'end' => 'Ožujak 2013',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Psihoterapeutkinja kognitivno bihevioralne terapije (stupanj 1)',
                                    ],[
                                        'type' => 'text',
                                        'text' => 'HUBIKOT - Hrvatsko udruženje za bihevioralno kognitivne terapije',
                                    ],
                                ],
                            ],[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => 'Listopad 2009',
                                        'end' => 'Ožujak 2012',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Magistra psihologije',
                                    ],[
                                        'type' => 'text',
                                        'text' => 'Filozofski fakultet Sveučilišta u Rijeci (Odsjek za psihologiju)',
                                    ],
                                ],
                            ],[
                                'parts' => [[
                                        'type' => 'timeline',
                                        'start' => 'Rujan 2006',
                                        'end' => 'Rujan 2009',
                                    ],[
                                        'type' => 'title',
                                        'title' => 'Prvostupnica psihologije',
                                    ],[
                                        'type' => 'text',
                                        'text' => 'Filozofski fakultet Sveučilišta u Rijeci (Odsjek za psihologiju)',
                                    ],
                                ],
                            ],
                        ],
                    ],[
                        'name' => 'Ostale informacije',
                        'items' => [[
                                'parts' => [[
                                        'type' => 'title',
                                        'title' => 'Potentially Gifted Preschool Children Care: Kindergarten Rijeka Model',
                                    ],[
                                        'type' => 'text',
                                        'text' => '14. ECHA kongres "Rethinking giftedness: gifted in digital age", Poster prezentacija, Brašnić, Lj. i Borbelj, J.',
                                    ],[
                                        'type' => 'text',
                                        'text' => 'Ljubljana, Rujan 2014',
                                    ],
                                ],
                            ],[
                                'parts' => [[
                                        'type' => 'title',
                                        'title' => 'Center for Gifted Children - Non-Profit Organization as a Part of a Social Care for the Gifted',
                                    ],[
                                        'type' => 'text',
                                        'text' => '13th International Conference on Excellence & Innovation in Basic-Higher Education & Psychology, Poster prezentacija, Arrigoni, J., Blanuša Trošelj, D., Borbelj Čeko, J., Brašnić, Lj.',
                                    ],[
                                        'type' => 'text',
                                        'text' => 'Rijeka, Svibanj 2016.',
                                    ],
                                ],
                            ],
                        ],
                    ],[
                        'name' => 'O meni',
                        'items' => [[
                                'parts' => [[
                                        'type' => 'about',
                                        'list' => [[
                                                'key' => 'Puno ime',
                                                'value' => 'Jasna Borbelj Čeko',
                                            ],[
                                                'key' => 'Email',
                                                'value' => 'jborbelj@gmail.com',
                                                'href' => 'mailto:jborbelj@gmail.com',
                                                'target' => '_self',
                                            ],[
                                                'key' => 'Mobitel',
                                                'value' => '(+385) 98/937-2922',
                                            ],[
                                                'key' => 'Lokacija',
                                                'value' => 'Selce, Croatia (EU)',
                                            ],[
                                                'key' => 'Godina rođenja',
                                                'value' => '1987.',
                                            ],[
                                                'key' => 'Vozačka dozvola',
                                                'value' => 'B kategorija',
                                            ],[
                                                'key' => 'Linkedin',
                                                'value' => 'jasna-borbelj-ceko',
                                                'href' => 'https://www.linkedin.com/in/jasna-borbelj-ceko/',
                                                'target' => '_blank',
                                            ],[
                                                'key' => 'Preuzimanje',
                                                'value' => 'PDF',
                                                'href' => "{$host}/resume_download/jasna",
                                                'target' => '_self',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];
        
        return $resumes[$person];
    }
}