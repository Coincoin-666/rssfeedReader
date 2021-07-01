<?php

// Récupération des différents flux RSS au choix de l'utilisateur.
$xml_actusJeuxVideos = simplexml_load_file("https://www.jeuxactu.com/rss/ja.rss");
$xml_actusPS4 = simplexml_load_file("https://www.jeuxactu.com/rss/ps4.rss");
$xml_actusPS5 = simplexml_load_file("https://www.jeuxactu.com/rss/ps5.rss");
$xml_actusXBoxOne = simplexml_load_file("https://www.jeuxactu.com/rss/xbox-one.rss");
$xml_actusXBoxSeriesX = simplexml_load_file("https://www.jeuxactu.com/rss/xbox-series-x.rss");

// Assignage des propriétés qui nous intéressent à des variables:

// 1
$actusJV_TITLE_firstThumb = $xml_actusJeuxVideos->channel->item[0]->title;
$actusJV_SUBTITLE_firstThumb = $xml_actusJeuxVideos->channel->item[0]->link;
$actusJV_TEXT_firstThumb = $xml_actusJeuxVideos->channel->item[0]->description;

// 2
$actusJV_TITLE_secondThumb = $xml_actusJeuxVideos->channel->item[1]->title;
$actusJV_SUBTITLE_secondThumb = $xml_actusJeuxVideos->channel->item[1]->link;
$actusJV_TEXT_secondThumb = $xml_actusJeuxVideos->channel->item[1]->description;

//3
$actusJV_TITLE_thirdThumb = $xml_actusJeuxVideos->channel->item[2]->title;
$actusJV_SUBTITLE_thirdThumb = $xml_actusJeuxVideos->channel->item[2]->link;
$actusJV_TEXT_thirdThumb = $xml_actusJeuxVideos->channel->item[2]->description;

// 4
$actusJV_TITLE_fourthThumb = $xml_actusJeuxVideos->channel->item[3]->title;
$actusJV_SUBTITLE_fourthThumb = $xml_actusJeuxVideos->channel->item[3]->link;
$actusJV_TEXT_fourthThumb = $xml_actusJeuxVideos->channel->item[3]->description;

// 5
$actusJV_TITLE_fifthThumb = $xml_actusJeuxVideos->channel->item[4]->title;
$actusJV_SUBTITLE_fifthThumb = $xml_actusJeuxVideos->channel->item[4]->link;
$actusJV_TEXT_fifthThumb = $xml_actusJeuxVideos->channel->item[4]->description;





// TESTS
// var_dump($xml_actusJeuxVideos->channel->item[0]);
// var_dump($xml_actusJeuxVideos->channel);

// var_dump($_SERVER);