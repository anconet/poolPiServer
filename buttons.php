<?php
// I note to self. JQuery uses application/x-www-form-urlencoded for passing data to the server.
// So JQuery is essentially passing a hash to the server. If you really wanted to receive JSON
// then you have to set JQuery to use application/json. I think it would be $.ajaxsetup(contenType:"application/json")

//Just a comment
//$objEvent->type = $_POST[eventType];
//$objEvent->data = $_POST[eventData];

class Event {

  public $type;
  public $data;
}

$objEvent = new Event();

$objEvent->type = "buttonPress";
$objEvent->data = "poolModeButton";


if ($objEvent->type == "buttonPress") {

  $poolState = json_decode(file_get_contents("poolState.json"),false);

  if ($objEvent->data == "poolModeButton") {
    if ($poolState->poolMode == "off") {$poolState->poolMode = "on";}
    else {$poolState->poolMode = "off";}
  }

  file_put_contents("poolState.json",json_encode($poolState));
}
//echo " button.php: Received: $_POST[eventType], $_POST[eventData]";
//echo " button.php: Received: ";

?>
