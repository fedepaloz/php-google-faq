<?php
/* array di array associativi, gli array sono cinque come le faq ed al loro interno hanno i relativi paragrafi  */

$faqs = [
    "titolo primo paragrafo" => ["lorem ipsum","ciao sono federico","bella di padella","il mio nome è nessuno"],
];

foreach ($faqs as $faq_paragraph) {
    foreach ($faq_paragraph as $paragraph) 
    {
        echo ($paragraph);
    }
}


?>


