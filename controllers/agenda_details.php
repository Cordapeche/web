<?php

$id = (isset($_GET["id"]) && $_GET["id"] != "" && $_GET["id"] != "null") ? clean($_GET["id"]) : 1;


$event = [
    'image_main' => 'https://picsum.photos/1200/300',
    'title' => 'Evento dans la ville de Bruxelles 1',
    'date' => '01/01/2025',
    'category' => 'Formation',
    'description' => [
        'Et aut eum quis fuga eoslaceatplaceat Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat. Et aut eum quis fuga eos sunt ipfuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.',
        'Et aut eum quis fuga aceat Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat. Et aut eum quis fuga eos sunt ipfuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.',
        'Et aut eum quis fu eos sunt ipfuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.'
    ],
    'image_secondary' => 'https://picsum.photos/300/300',
    'extra_text' => 'Et aut eum quis fuga eos sunt ipfuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.'
];




$comments = [
    [
        'author' => 'Alberto Salas',
        'date' => '01/01/2025',
        'comment' => 'Paut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat Et aut eum quis fuga eos sunt ipsa nihil.'
    ],
    [
        'author' => 'Maria Carlos',
        'date' => '01/01/2025',
        'comment' => 'Paut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat Et aut eum quis fuga eos sunt ipsa nihil.'
    ],
    [
        'author' => 'Castillo der',
        'date' => '01/01/2025',
        'comment' => 'Paut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat Et aut eum quis fuga eos sunt ipsa nihil.'
    ],
    [
        'author' => 'Mecaderos Salas',
        'date' => '01/01/2025',
        'comment' => 'Paut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat Et aut eum quis fuga eos sunt ipsa nihil.'
    ],
    [
        'author' => 'Ana maria Fruis',
        'date' => '01/01/2025',
        'comment' => 'Paut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat Et aut eum quis fuga eos sunt ipsa nihil.'
    ],
    [
        'author' => 'Jose mascoles Moder',
        'date' => '01/01/2025',
        'comment' => 'Paut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat Et aut eum quis fuga eos sunt ipsa nihil.'
    ]
];

include view('public_html', 'agenda_details');
