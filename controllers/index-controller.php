<?php

// Récupération des différents flux RSS au choix de l'utilisateur.
$xml_actusJeuxVideos = simplexml_load_file("https://www.jeuxactu.com/rss/ja.rss");
$xml_actusPS4 = simplexml_load_file("https://www.jeuxactu.com/rss/ps4.rss");
$xml_actusPS5 = simplexml_load_file("https://www.jeuxactu.com/rss/ps5.rss");
$xml_actusXBoxOne = simplexml_load_file("https://www.jeuxactu.com/rss/xbox-one.rss");
$xml_actusXBoxSeriesX = simplexml_load_file("https://www.jeuxactu.com/rss/xbox-series-x.rss");

// Assignage des propriétés qui nous intéressent à des variables:

$actusJV_TITLE_firstThumb = $xml_actusJeuxVideos->channel->item[0]->title;
$actusJV_SUBTITLE_firstThumb = $xml_actusJeuxVideos->channel->item[0]->link;
$actusJV_TEXT_firstThumb = $xml_actusJeuxVideos->channel->item[0]->description;

// TESTS
var_dump($xml_actusJeuxVideos->channel->item[0]);
echo $xml_actusJeuxVideos->channel->item[0]->title;
echo $xml_actusJeuxVideos->channel->item[0]->description;