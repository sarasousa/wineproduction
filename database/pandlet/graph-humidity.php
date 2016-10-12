<?php
// we need this so that PHP does not complain about deprectaed functions
error_reporting( 0 );

// DB Connection
  $dbh = null;

  try {
    $dbh = new PDO('sqlite:../../php/setec.db');
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
     die($e->getMessage());
  }


// Fetch the data
  $pandlet = $_GET['pandlet'];
  $farm = $_GET['farm'];

  $query = "SELECT dates, AVG(value) as valor FROM moisture WHERE pan = ". $pandlet ." AND farm = " . $farm . " GROUP BY dates ORDER BY dates ASC";
  $stmt = $dbh->query($query);

// All good?
  if ( !$stmt ) {
    // Nope
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die( $message );
  }


// Print out rows - date + Temperature
  $prefix = '';
  echo "[\n";
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $date = date("Y-m-d", strtotime($row['dates']));
    echo $prefix . " {\n";
    echo '  "date": "' . $date . '",' . "\n";
    echo '  "moisture": ' . $row['valor'] . '' . "\n";
    echo " }";
    $prefix = ",\n";
  }
  echo "\n]";

  /* close the database connection */
      $dbh = null;

?>