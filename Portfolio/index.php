<?php
// Personal information
$nom = 'Mariam Oumlil';
$email = 'oumlimari@gmail.com';


// Skills
$skills = [
    'HTML5',
    'CSS3',
    'Pitching'
];


// Projects
$projets = [
    [
        'titre' => 'SkillProof',
        'description' => 'A platform where people with real skills but no diploma take practical tests, 
         earn a verified certificate, and get found by companies.',
        'technologies' => 'HTML, CSS, JavaScript',
        'color' => 'bleu'
    ],

    [
        'titre' => 'DABAFIX',
        'description' => 'An on-demand platform for verified artisans and home repairs, 
         with fixed prices shown upfront and live tracking.',
        'technologies' => 'HTML, CSS, JavaScript',
        'color' => 'rose'
    ]
];

require 'index-template.php';