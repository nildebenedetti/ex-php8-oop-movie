<?php

// import rentable
require_once __DIR__ . '/../Traits/Rentable.php';
// import classes
require_once __DIR__ . '/../Models/Genre.php';
require_once __DIR__ . '/../Models/Movie.php';

// instantiate Genres

$action      = new Genre(1, 'Action', '#FF3B30');
$adventure   = new Genre(2, 'Adventure', '#10B981');
$animation   = new Genre(3, 'Animation', '#38BDF8');
$comedy      = new Genre(4, 'Comedy', '#FACC15');
$crime       = new Genre(5, 'Crime / Noir', '#64748B');
$documentary = new Genre(6, 'Documentary', '#D4AF37');
$drama       = new Genre(7, 'Drama', '#722F37');
$fantasy     = new Genre(8, 'Fantasy', '#A855F7');
$horror      = new Genre(9, 'Horror', '#8B0000');
$romance     = new Genre(10, 'Romance', '#EC4899');
$sciFi       = new Genre(11, 'Sci-Fi', '#00D2FF');
$thriller    = new Genre(12, 'Thriller', '#D97706');

// instantiate 2 movies

$hellraiser = new Movie(
        1,
        'Hellraiser',
        'Clive Barker',
        'https://www.themoviedb.org/t/p/w1280/3Z0oPHyLnk3Vx6ZMC1MiVwIrKhO.jpg',
        'An unfaithful wife encounters the resurrected body of her dead lover. He is being hunted by the Cenobites, sadomasochistic beings from another dimension whom he summoned using a mysterious puzzle box.',
        'Andrew Robinson, Clare Higgins, Ashley Laurence, Doug Bradley'
        ,
        1987,
    [$horror]
    );

$matrix = new Movie(
        2,
        'The Matrix',
        'Lana & Lilly Wachowski',
        'https://www.themoviedb.org/t/p/w1280/dXNAPwY7VrqMAo51EKhhCJfaGb5.jpg',
        'A computer hacker learns from mysterious rebels about the true nature of his reality...',
        'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss',
        1999,
        [$sciFi, $drama]
    );


// Insidious Saga
$insidious1 = new Movie(
    3,
    'Insidious',
    'James Wan',
    'https://www.themoviedb.org/t/p/w1280/1egpmVXuXed58TH2UOnX1nATTrf.jpg',
    'A family looks to prevent evil spirits from trapping their comatose child in a realm called The Further.',
    'Patrick Wilson, Rose Byrne, Barbara Hershey',
    2010,
    [$horror, $thriller]
);

$insidious2 = new Movie(
    4,
    'Insidious: Chapter 2',
    'James Wan',
    'https://www.themoviedb.org/t/p/w1280/w5JjiB3O1CLDXbTJe1QpU5RHmlU.jpg',
    'The Lamberts seek to reveal the mysterious childhood secret that has left them dangerously connected to the spirit world.',
    'Patrick Wilson, Rose Byrne, Barbara Hershey',
    2013,
    [$horror, $thriller]
);

// Sinister
$sinister = new Movie(
    5,
    'Sinister',
    'Scott Derrickson',
    'https://www.themoviedb.org/t/p/w1280/nzx10sca3arCeYBAomHan4Q6wa1.jpg',
    'A washed-up true crime writer discovers a box of super 8 home movies in his new home that put his family in grave danger.',
    'Ethan Hawke, Juliet Rylance, Fred Thompson',
    2012,
    [$horror, $thriller]
);

// Parasite
$parasite = new Movie(
    6,
    'Parasite',
    'Bong Joon Ho',
    'https://www.themoviedb.org/t/p/w1280/7IiTTgloJzvGI1TAYymCfbfl3vT.jpg',
    'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.',
    'Song Kang-ho, Lee Sun-kyun, Cho Yeo-jeong, Choi Woo-shik',
    2019,
    [$drama, $thriller, $comedy]
);

// The Platform
$thePlatform = new Movie(
    7,
    'The Platform',
    'Galder Gaztelu-Urrutia',
    'https://www.themoviedb.org/t/p/w1280/iXvQnzy6JCAx1PiQEKXuTY04ZHl.jpg',
    'A vertical prison with one cell per level. Two people per cell. Only one food platform and two minutes per day to feed from top to bottom.',
    'Iván Massagué, Zorion Eguileor, Antonia San Juan',
    2019,
    [$horror, $sciFi, $thriller]
);

// The Substance
$theSubstance = new Movie(
    8,
    'The Substance',
    'Coralie Fargeat',
    'https://www.themoviedb.org/t/p/w1280/uYJvxMWMb9W4zIY3cbM50sj3dpC.jpg',
    'A fading celebrity decides to use a black-market drug, a cell-replicating substance that temporarily creates a younger, better version of herself.',
    'Demi Moore, Margaret Qualley, Dennis Quaid',
    2024,
    [$horror, $sciFi, $drama]
);

// A Minecraft Movie
$minecraft = new Movie(
    9,
    'A Minecraft Movie',
    'Jared Hess',
    'https://www.themoviedb.org/t/p/w1280/yFHHfHcUgGAxziP1C3lLt0q2T4s.jpg',
    'Four misfits are pulled through a mysterious portal into the Overworld, a bizarre, cubic wonderland that thrives on imagination.',
    'Jason Momoa, Jack Black, Emma Myers, Danielle Brooks',
    2025,
    [$adventure, $fantasy, $comedy]
);

// Coco
$coco = new Movie(
    10,
    'Coco',
    'Lee Unkrich, Adrian Molina',
    'https://www.themoviedb.org/t/p/w1280/6Ryitt95xrO8KXuqRGm1fUuNwqF.jpg',
    'Aspiring musician Miguel, confronted with his family\'s ancestral ban on music, enters the Land of the Dead to find his great-great-grandfather.',
    'Anthony Gonzalez, Gael García Bernal, Benjamin Bratt',
    2017,
    [$animation, $adventure, $fantasy, $comedy]
);

// Shaolin Soccer
$shaolinSoccer = new Movie(
    11,
    'Shaolin Soccer',
    'Stephen Chow',
    'https://www.themoviedb.org/t/p/w1280/z6ZQqwoxWy9muIxwUP4K2zWw7BU.jpg',
    'A former Shaolin monk reunites his five brothers to apply their martial arts skills to play soccer and bring Shaolin kung fu to the masses.',
    'Stephen Chow, Zhao Wei, Ng Man-tat',
    2001,
    [$action, $comedy]
);

// Kung Fu Hustle
$kungFuHustle = new Movie(
    12,
    'Kung Fu Hustle',
    'Stephen Chow',
    'https://www.themoviedb.org/t/p/w1280/exbyTbrvRUDKN2mcNEuVor4VFQW.jpg',
    'In 1940s Shanghai, a wannabe gangster aspires to join the notorious Axe Gang, while slum inhabitants reveal extraordinary martial arts skills.',
    'Stephen Chow, Yuen Wah, Yuen Qiu',
    2004,
    [$action, $comedy, $fantasy]
);

// Don't Look Up
$dontLookUp = new Movie(
    13,
    'Don\'t Look Up',
    'Adam McKay',
    'https://www.themoviedb.org/t/p/w1280/th4E1yqsE8DGpAseLiUrI60Hf8V.jpg',
    'Two low-level astronomers must go on a giant media tour to warn mankind of an approaching comet that will destroy planet Earth.',
    'Leonardo DiCaprio, Jennifer Lawrence, Meryl Streep, Jonah Hill',
    2021,
    [$comedy, $sciFi, $drama]
);

// The Curse of La Llorona
$laLlorona = new Movie(
    14,
    'The Curse of La Llorona',
    'Michael Chaves',
    'https://www.ilcineocchio.it/cine/wp-content/uploads/2021/12/The-Legend-of-La-Llorona-film-poster-2022.jpg',
    'Ignoring the eerie warning of a troubled mother, a social worker and her small kids are soon drawn into a terrifying supernatural realm.',
    'Linda Cardellini, Raymond Cruz, Patricia Velasquez',
    2019,
    [$horror, $thriller]
);

// The Lord of the Rings Trilogy
$lotr1 = new Movie(
    15,
    'The Lord of the Rings: The Fellowship of the Ring',
    'Peter Jackson',
    'https://www.themoviedb.org/t/p/w1280/6oom5QYQ2yQTMJIbnvbkBL9cHo6.jpg',
    'A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.',
    'Elijah Wood, Ian McKellen, Orlando Bloom, Viggo Mortensen',
    2001,
    [$fantasy, $adventure, $action]
);

$lotr2 = new Movie(
    16,
    'The Lord of the Rings: The Two Towers',
    'Peter Jackson',
    'https://www.themoviedb.org/t/p/w1280/5VTN0pR8gcqV3EPUHHfMGnJYN9L.jpg',
    'While Frodo and Sam edge closer to Mordor with the help of Gollum, the divided fellowship makes a stand against Sauron\'s new ally, Saruman.',
    'Elijah Wood, Ian McKellen, Viggo Mortensen, Orlando Bloom',
    2002,
    [$fantasy, $adventure, $action]
);

$lotr3 = new Movie(
    17,
    'The Lord of the Rings: The Return of the King',
    'Peter Jackson',
    'https://www.themoviedb.org/t/p/w1280/rCzpDGLbOoPwLjy3OAm5NUPOTrC.jpg',
    'Gandalf and Aragorn lead the World of Men against Sauron\'s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.',
    'Elijah Wood, Viggo Mortensen, Ian McKellen, Orlando Bloom',
    2003,
    [$fantasy, $adventure, $action]
);

// The Hobbit Trilogy
$hobbit1 = new Movie(
    18,
    'The Hobbit: An Unexpected Journey',
    'Peter Jackson',
    'https://www.themoviedb.org/t/p/w1280/yHA9Fc37VmpUA5UncTxxo3rTGVA.jpg',
    'A reluctant Hobbit, Bilbo Baggins, sets out to the Lonely Mountain with a spirited group of dwarves to reclaim their mountain home from a dragon.',
    'Martin Freeman, Ian McKellen, Richard Armitage',
    2012,
    [$fantasy, $adventure]
);

$hobbit2 = new Movie(
    19,
    'The Hobbit: The Desolation of Smaug',
    'Peter Jackson',
    'https://www.themoviedb.org/t/p/w1280/xQYiXsheRCDBA39DOrmaw1aSpbk.jpg',
    'The dwarves, along with Bilbo Baggins and Gandalf the Grey, continue their quest to reclaim Erebor from the dragon Smaug.',
    'Martin Freeman, Ian McKellen, Richard Armitage, Benedict Cumberbatch',
    2013,
    [$fantasy, $adventure]
);

$hobbit3 = new Movie(
    20,
    'The Hobbit: The Battle of the Five Armies',
    'Peter Jackson',
    'https://www.themoviedb.org/t/p/w1280/xT98tLqatZPQApyRmlPL12LtiWp.jpg',
    'Bilbo and company are forced to engage in a war against an array of combatants and keep the Lonely Mountain from falling into darkness.',
    'Martin Freeman, Ian McKellen, Richard Armitage, Luke Evans',
    2014,
    [$fantasy, $adventure, $action]
);

// Pride & Prejudice
$prideAndPrejudice = new Movie(
    21,
    'Pride & Prejudice',
    'Joe Wright',
    'https://www.themoviedb.org/t/p/w1280/7od3Mob2qu5lL1l5RsdV6xuEquw.jpg',
    'Sparks fly when spirited Elizabeth Bennet meets single, rich, and proud Mr. Darcy, but his reluctance threatens to tear them apart.',
    'Keira Knightley, Matthew Macfadyen, Brenda Blethyn',
    2005,
    [$romance, $drama]
);

// La La Land
$laLaLand = new Movie(
    22,
    'La La Land',
    'Damien Chazelle',
    'https://www.themoviedb.org/t/p/w1280/uDO8zWDhfWwoFdKS4fzkUJt0Rf0.jpg',
    'While navigating their careers in Los Angeles, a pianist and an actress fall in love while attempting to reconcile their aspirations for the future.',
    'Ryan Gosling, Emma Stone, J.K. Simmons',
    2016,
    [$romance, $drama, $comedy]
);

// ============================================
// GENRES ARRAY
// ====

$genres = [
    $action,
    $adventure,
    $animation,
    $comedy,
    $crime,
    $documentary,
    $drama,
    $fantasy,
    $horror,
    $romance,
    $sciFi,
    $thriller
];

// ============================================
// MOVIES ARRAY
// ============================================

$movies = [
    $hellraiser,
    $matrix,
    $insidious1,
    $insidious2,
    $sinister,
    $parasite,
    $thePlatform,
    $theSubstance,
    $minecraft,
    $coco,
    $shaolinSoccer,
    $kungFuHustle,
    $dontLookUp,
    $laLlorona,
    $lotr1,
    $lotr2,
    $lotr3,
    $hobbit1,
    $hobbit2,
    $hobbit3,
    $prideAndPrejudice,
    $laLaLand
];


?>