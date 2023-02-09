<?php 
# RECOVER JSON FILE
$source_url = __DIR__ . './data.json';

# ROAD FILE CONTENT
$json_data = file_get_contents($source_url);

# CONVERT FILE JSON TO PHP
$discs = json_decode($json_data, true);

# I convert writing to JSON
header('Content-Type: application/json');
# convert to json and return to $disc
echo json_encode($discs);
