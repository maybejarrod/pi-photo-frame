<?php

//this page will create the data.jason file if ran in the browser.

// make array
$array = Array (
    "0" => Array (
        "id" => "weather",
        "place" => "Raymond Terrace",
        "url" => "https://forecast7.com/en/n32d75151d77/raymond-terrace/"
    ),
    "1" => Array (
        "id" => "rss",
        "url1" => "https://www.newcastleherald.com.au/rss.xml",
        "url1identifier" => "- NH",
        "url2" => "https://www.cnet.com/rss/news/",
        "url2identifier" => "",
        "url3" => "https://techcrunch.com/feed/",
        "url3identifier" => "- TC",
    ),
    "2" => Array (
        "id" => "quotes",
        "url" => "http://quotes.rest/qod.json",
    )
);

// encode array to json
$json = json_encode(array('data' => $array));

//write json to file
if (file_put_contents("data.json", $json)){
    echo "JSON file created successfully...";
}
else{
    echo "Oops! Error creating json file...";
}

?>