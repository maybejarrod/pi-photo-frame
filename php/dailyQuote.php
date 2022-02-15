<?php

// Get the contents of the JSON settings file 
$strJsonFileContents = file_get_contents("data.json");
// Convert to array 
$settingsArray = json_decode($strJsonFileContents, true);

//get the quote json and decode
$string = file_get_contents($settingsArray["data"]["2"]["url"]);
$json_a = json_decode($string, true);

//get the author and quote
$quote =  $json_a['contents']['quotes'][0];
$quotefinal = $quote['quote'] . "  -  " . $quote['author'];

//if the api rejects the call use the last saved quote
if($quotefinal == "  -  "){
$myfile = fopen("Quote.txt", "r") or die("Unable to open file!");
$quotefinal = fread($myfile,filesize("Quote.txt"));
fclose($myfile);
}
else{
//write to file as backup
$myfile = fopen("Quote.txt", "w") or die("Unable to open file!");
fwrite($myfile, $quotefinal);
fclose($myfile);
}

//display the quote
echo trim($quotefinal,'"');

?>