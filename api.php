<?php 
# RECOVER JSON FILE
$source_url = __DIR__ . './data.json';

# ROAD FILE CONTENT
$json_data = file_get_contents($source_url);

// $genre = $_GET['genre'] ?? '';
// if($genre){
    # CONVERT FILE JSON TO PHP
    $discs = json_decode($json_data, true);

//     $filtered_discs = [];
//     foreach($disc as $discs){
//         if($disc['genre'] === $genre) $filtered_discs[] = $disc;

//     }
//     $json_data = json_encode($filtered_discs);
// }




# I convert writing to JSON
header('Content-Type: application/json');
# convert to json and return to $disc
echo json_encode($discs);
