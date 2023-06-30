<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP Partie 10 - TP3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.22/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="/main.css">
</head>
<body>
<?php

$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

function showPortrait($portrait) {
    $identity = $portrait['name'] . ' ' . $portrait['firstname'];
    $render = '<div class="uk-card uk-card-default uk-width-1-5">';

    $render .= '<div class="uk-card-media-top"><img src="' . $portrait['portrait'] . '" alt="' . $identity . '"></div>';
    $render .= '<div class="uk-card-body"><p class="uk-text-center">' . $identity . '</p></div>';
    $render .= '</div>';

    return $render;
}


?>
    <div class="uk-flex uk-flex-center uk-flex-middle">
        <?= showPortrait($portrait1); ?>
        <?= showPortrait($portrait2); ?>
        <?= showPortrait($portrait3); ?>
        <?= showPortrait($portrait4); ?>
    <div>
</body>
</html>
