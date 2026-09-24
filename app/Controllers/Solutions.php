<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Solutions extends BaseController
{
    public function index()
    {
        $solutions = [
            [
                'number' => '01',
                'title' => 'Automated Messaging',
                'category' => 'COMMUNICATION',
                'description' => 'Reliable, labor-saving communication solutions using phone, text and email messaging.',
                'slug' => 'automated-messaging'
            ],

            [
                'number' => '02',
                'title' => 'Data Warehousing',
                'category' => 'DATA',
                'description' => 'Centralized data solutions designed to support reporting, analytics and business decisions.',
                'slug' => 'data-warehousing'
            ],

            [
                'number' => '03',
                'title' => 'SAP Solutions',
                'category' => 'ENTERPRISE',
                'description' => 'Technology solutions supporting enterprise applications and business processes.',
                'slug' => 'sap-solutions'
            ],

            [
                'number' => '04',
                'title' => 'GIS Solutions',
                'category' => 'TECHNOLOGY',
                'description' => 'Geographic information solutions designed to support business and operational requirements.',
                'slug' => 'gis-solutions'
            ],

            [
                'number' => '05',
                'title' => 'Customer Relationship Management',
                'category' => 'CRM',
                'description' => 'Solutions that help organizations manage customer information and relationships.',
                'slug' => 'customer-relationship-management'
            ],

            [
                'number' => '06',
                'title' => 'Document Management',
                'category' => 'DOCUMENTS',
                'description' => 'Solutions for organizing, managing and accessing business documents efficiently.',
                'slug' => 'document-management'
            ]
        ];

        return view('solutions/index', [
            'title' => 'Solutions | AmeriPro Solutions',
            'solutions' => $solutions
        ]);
    }


    public function detail($slug)
    {
        $solutions = [

            /*
            |--------------------------------------------------------------------------
            | 01 - AUTOMATED MESSAGING
            |--------------------------------------------------------------------------
            */

            'automated-messaging' => [
                'title' => 'Automated Messaging',

                'image' => 'https://www.ameripro-solutions.com/_include/img/ams.jpg',

                'paragraphs' => [
                    'AmeriPro make it easy to keep in touch with groups, using the tools everyone has come to depend on – phone, text and email messages. AmeriPro offers a variety of reliable, labor-saving communication solutions to help you connect with customers, parishioners and patients in the following areas.'
                ],

                'sections' => [

                    [
                        'title' => 'HEALTHCARE:',

                        'content' => 'Whether you need an efficient way to send automated appointment reminders or a comprehensive communication program that helps improve overall patient health, you want HealthWave® automated calling and messaging. HealthWave is fully customizable to fit the unique needs of your practice, so you can save time, boost revenue and provide better outcomes.'
                    ],

                    [
                        'title' => 'FAITH-BASED & NON-PROFIT:',

                        'content' => 'For faith-based and non-profit organizations, a VoiceWave® automated messaging system provides a direct line of communication to your network of members and supporters. VoiceWave ensures timely, accurate delivery of everything from meeting notices and cancellations to stewardship and capital campaign reminders – all while freeing up staff time to focus on other important responsibilities.'
                    ],

                    [
                        'title' => 'BUSINESS:',

                        'content' => 'In today\'s competitive marketplace you need an edge over your competitors. Improve customer satisfaction, build loyalty and improve your bottom line with a VoiceWave® automated calling and messaging system. For customer appointment and delivery reminders, service notices, reorder prompting and even past due notifications, you won\'t find a more efficient, cost effective way to keep in touch.'
                    ]
                ]
            ],


            /*
            |--------------------------------------------------------------------------
            | 02 - DATA WAREHOUSING
            |--------------------------------------------------------------------------
            */

            'data-warehousing' => [
                'title' => 'Data Warehousing',

                'image' => 'https://www.ameripro-solutions.com/_include/img/dw.jpg',

                'paragraphs' => [
                    'AmeriPro Data warehousing offers flexibility to managers to access the data using queries. This easy access to complicated data enables effective business analysis and business forecasting, which in turn provides great insight on various trends and supports in faster and better decision making. AmeriPro Solutions is providing a truly unique solution based on the simplicity of a single central data warehouse. We offer Data Warehousing Services tailored.',

                    'AmeriPro Solutions is providing a truly unique solution based on the simplicity of a single central data warehouse. We offer Data Warehousing Services tailored to many diverse industries in the following areas:'
                ],

                'sections' => [

                    [
                        'title' => 'Architecture Design and Modeling Services:',

                        'content' => 'Design and architect your data warehouse to meet the needs of both business and IT users. Architecture and design services help identify business opportunities, examine current data warehouse maturity, build a business case and define a roadmap to ensure the data warehouse continually meets business needs.'
                    ],

                    [
                        'title' => 'Data Warehouse Migration Services:',

                        'content' => 'Centralize your data into an enterprise data warehouse through data mart consolidation or migration from another platform.'
                    ],

                    [
                        'title' => 'Enterprise Data Management Services:',

                        'content' => 'Integrate, validate, manage and protect data from the point of origin to its eventual discontinuation.'
                    ],

                    [
                        'title' => 'Analytical Services:',

                        'content' => 'Assistance in forecasting, decision support, application development and implementation for both operational and strategic users.'
                    ],

                    [
                        'title' => 'Performance Services:',

                        'content' => 'Optimize your system through performance and capacity analysis. We can also implement workload management tools and application tuning techniques to improve data warehouse performance.'
                    ]
                ]
            ],


            /*
            |--------------------------------------------------------------------------
            | 03 - SAP SOLUTIONS
            |--------------------------------------------------------------------------
            */

            'sap-solutions' => [
                'title' => 'SAP Solutions',

                'image' => 'https://www.ameripro-solutions.com/_include/img/sap.jpg',

                'paragraphs' => [

                    'We provide services to companies globally ranging in size from mid-sized businesses to the Fortune 50. Our vast experience, high skilled consultants, and proprietary tools allow us to help companies make informed decisions about their business strategies, whether it is planning an upgrade, global rollout, or taking advantage of the new SAP service bundles included in the Enhancement Packages.',

                    'Our expertise and capabilities in implementing and maintaining complex ERP environments translates into unmatched efficiency for our customers, while reducing overall costs and timelines.'
                ],

                'sections' => [

                    [
                        'title' => 'Our Service for SAP include:',

                        'list' => [
                            'Implementations',
                            'Upgrades',
                            'Global Rollouts',
                            'Testing Automation',
                            'Application Management Services'
                        ]
                    ]
                ]
            ],


            /*
            |--------------------------------------------------------------------------
            | 04 - GIS SOLUTIONS
            |--------------------------------------------------------------------------
            */

            'gis-solutions' => [
                'title' => 'GIS Solutions',

                'image' => 'https://www.ameripro-solutions.com/_include/img/gis.jpg',

                'paragraphs' => [

                    'Serving the needs of global GIS markets through focused, innovative, efficient and quality products and services in all areas of spatial technology and applications that can be based on ESRI technology.',

                    'At AmeriPro we believe GIS is the technology that will enable organizations across verticals to make informed decisions about any location. It provides a strong framework in which GIS data can be gathered to support and manage generation of spatial information. GIS information, thus, generated can be easily integrated with the business strategies of the organization. A GIS is not an end in itself but can be a beginning – a beginning of better decisions, effective actions, cost-competitive work-flows, transparent governance and much more.'
                ],

                'sections' => []
            ],


            /*
            |--------------------------------------------------------------------------
            | 05 - CUSTOMER RELATIONSHIP MANAGEMENT
            |--------------------------------------------------------------------------
            */

            'customer-relationship-management' => [
                'title' => 'Customer Relationship Management',

                'image' => 'https://www.ameripro-solutions.com/_include/img/crm.jpg',

                'paragraphs' => [

                    'Customer Relationship Management (CRM) is a strategy that focuses on building strong relationships with customers and potential customers for creating and maintaining a loyal customer base. Customer relationship management describes a company-wide business strategy including customer-interface departments as well as other departments. It is a widely implemented strategy for managing a company\'s interactions with customers, clients and sales prospects.',

                    'With AmeriPro CRM solutions, the user has the freedom to choose the customer relationship management solution that best fits their unique business requirements. AmeriPro Customer Relationship Management works across all departments to harmonize customer-centric thinking. Customer Relationship Management reduces costs, increases efficiency and improves customer satisfaction.',

                    'Customer Relationship Management has 3 key features, namely:'
                ],

                'sections' => [

                    [
                        'title' => '',

                        'list' => [

                            'Collaborative CRM: Having a direct communication with the clients without any interference from service or sales representatives.',

                            'Analytical CRM: Investigating Customer Data with a huge volume of functions and reasons, as a perspective.',

                            'Operational CRM: Offering full front end support for marketing, sales and other related service.'
                        ]
                    ]
                ]
            ],


            /*
            |--------------------------------------------------------------------------
            | 06 - DOCUMENT MANAGEMENT
            |--------------------------------------------------------------------------
            */

            'document-management' => [
                'title' => 'Document Management',

                'image' => 'https://www.ameripro-solutions.com/_include/img/dm.jpg',

                'paragraphs' => [

                    'Document Management Software Suite is an end to end solution for any kind of industry where mass scanning, automatic extract of the relevant information from the paper documents and data analysis is required. Our solution automatically scans and uploads the documents, recognizes and stores the data, subsequently facilitates viewing and analyzing the data from wherever and whenever needed.',

                    'Document Management Software Suite comprises of four individual components that can be used either individually or collectively:'
                ],

                'sections' => [

                    [
                        'title' => '',

                        'numbered_list' => [

                            'Batch Scan and Upload Service: With and without the human interaction, the entire bunch of documents are fed into the scanner and this application facilitates the scanning of the entire bunch or entire set of paper documents and uploads to the server.',

                            'Document Template Builder: This application creates the template which contains the coordinates of the text zones and image zones. This template is used as input to the Document OCR Service for extracting the relevant information.',

                            'Document OCR Service: This application screens the files that are uploaded by Batch Scan and Upload Service application, maps and extracts the data using the respective template and stores data into the database server.',

                            'Document Indexing & Data Analysis Tool: This application indexes and analyses the data and generates the reports as per the specific needs.'
                        ]
                    ]
                ]
            ]
        ];


        /*
        |--------------------------------------------------------------------------
        | CHECK SOLUTION
        |--------------------------------------------------------------------------
        */

        if (!isset($solutions[$slug])) {

            throw PageNotFoundException::forPageNotFound();

        }


        /*
        |--------------------------------------------------------------------------
        | SEND DATA TO DETAIL VIEW
        |--------------------------------------------------------------------------
        */

        return view('solutions/detail', [

            'title' => $solutions[$slug]['title'] . ' | AmeriPro Solutions',

            'solution' => $solutions[$slug]

        ]);
    }
}