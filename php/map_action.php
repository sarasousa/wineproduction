<?php


ini_set('display_errors',1); 
error_reporting(E_ALL);

require_once('../database/Users.php');
require_once('../database/connection.php');

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);


// Select all the rows in the markers table
$stmt = $dbh->prepare("SELECT * FROM pandlet WHERE 1");
$stmt->execute();


header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  // ADD TO XML DOCUMENT NODE
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("pid",$row['pid']);
  $newnode->setAttribute("farm",$row['farm']);
  $newnode->setAttribute("name",$row['name']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
}

echo $dom->saveXML();


?>