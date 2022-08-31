<?php
/* array di array associativi, gli array sono cinque come le faq ed al loro interno hanno i relativi paragrafi  */

$faqs = [
    "titolo primo paragrafo" => ["primo","secondo","terzo","quarto","cinque","sei"],
    "titolo secondo paragrafo" => ["uno","due","tre","quattro"],
    "titolo terzo paragrafo" => ["ichi","ni","san"],
];

/* foreach ($faqs as   $faq_paragraph) {
    foreach ($faq_paragraph as $paragraph) 
    {
        echo ($paragraph);
    }
} */


foreach($faqs as $title => $value)
{var_dump($title);
var_dump($value);}


foreach($faqs as $title => $value)


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <?php foreach ($faqs as $title => $paragraphs) : ?>
        <li>
            <h1><?php echo ($title) ?></h1>
            <ul>
                <?php foreach ($paragraphs as $paragraph) : ?>
                    <li>
                        <p> <?php echo($paragraph) ?></p>
                    </li>
                <?php endforeach ?>
                
            </ul>
        </li>
    <?php endforeach ?>
</ul> 
</body>
</html>
