<?php
    require_once __DIR__ . '/mainMovies.php';
    $firstMovie = new Movie("Ecce Bombo",
                            "Nanni Moretti",
                            "Michele, Goffredo, Mirko and Vito are four friends who have participated in the battles of the student in Sixties. Now in the Seventies, the four friends don't know what to do, though young and with so many possibilities to find a job in life. Intellectuals marginalized and misunderstood, the four friends find themselves when they can in a restaurant to discuss their outlandish theories. A girl named Olga disrupts their life, but Michele is her favorite, although he does not know what to do with the girl."
);
    $firstMovie->setYear(1978);
    $firstMovie->setLanguage('IT');
    echo $firstMovie->getMovieInfo() . '<br>';
    $secondMovie = new Movie("Bianca",
                             "Nanni Moretti",
                             "1984",
                             "Eccentric and full of manias, Michele is a young high school professor who defines himself as “not used to happiness”. He realizes his life is meaningless if he doesn/’t have a woman by his side but, after a series of rather disastrous experiences, he feels more alone than ever. Then, out of the blue, a new French teacher called Bianca arrives at school. Amongst uncertainties and contradictions, the two start dating. In the meantime, a series of homicides take place and a police officer begins to suspect that Michele is involved. Bianca will save him providing an alibi at the right moment, but then, everything goes wrong again."
    
);
    $secondMovie->setYear(1984);
    $secondMovie->setLanguage('IT');
    echo $secondMovie->getMovieInfo() . '<br>';

?>



