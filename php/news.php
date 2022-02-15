<?php

// Get the contents of the JSON settings file 
$strJsonFileContents = file_get_contents("data.json");
// Convert to array 
$settingsArray = json_decode($strJsonFileContents, true);

//get the rss feed 1
$feed = null;
$feed = file_get_contents($settingsArray["data"]["1"]["url1"]);
$identifier = $settingsArray["data"]["1"]["url1identifier"];
$xml = simplexml_load_string($feed);

//get the rss feed 2
$feed2 = null;
$feed2 = file_get_contents($settingsArray["data"]["1"]["url2"]);
$identifier2 = $settingsArray["data"]["1"]["url2identifier"];
$xml2 = simplexml_load_string($feed2);

//get the rss feed 3
$feed3 = null;
$feed3 = file_get_contents($settingsArray["data"]["1"]["url3"]);
$identifier3 = $settingsArray["data"]["1"]["url3identifier"];
$xml3 = simplexml_load_string($feed3);

$newsstring = "";

// This will display all the posts in the RSS feeds.
for ($i = 0; $i < count($xml->channel->item); $i++ ) {
  //feed 1
  $newsstring = $xml->channel->item[$i]->title . " " . $identifier . " " . " | " . " " . " " . $newsstring;

  //feeed 2
  if($i < count($xml2->channel->item)){
    $newsstring = $xml2->channel->item[$i]->title . " " . $identifier2 . " " . " | " . " " . " " . $newsstring;
  }

  //feed 3
  if($i < count($xml3->channel->item)){
    $newsstring = $xml3->channel->item[$i]->title . " " . $identifier3 . " " . " | " . " " . " " . $newsstring;
  }
}

//echo the final news string
echo $newsstring;

 ?>
