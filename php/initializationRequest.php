<?php
// This file handles dynamic initialization of the web page.
include 'classes/Event.php';
include 'classes/EventResponse.php';

$objEvent = new Event($_POST);
//$objEvent = new Event(array("type"=>"initializeRequest"));

if ($objEvent->type == "invalid") {
  echo json_encode(new EventResponse($objEvent,"invalid"));
} elseif ($objEvent->type == "initializeRequest") {

  $poolState = json_decode(file_get_contents("poolState.json"),false);
  echo json_encode(new EventResponse($objEvent,$poolState));
  }


 ?>
