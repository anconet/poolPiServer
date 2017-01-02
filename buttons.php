<?php
// I note to self. JQuery uses application/x-www-form-urlencoded for passing data to the server.
// So JQuery is essentially passing a hash to the server. If you really wanted to receive JSON
// then you have to set JQuery to use application/json. I think it would be $.ajaxsetup(contenType:"application/json")

/**
 * Event
 */
class Event {

  public $type;
  public $subject;

  function __construct($post) {

    $this->type = $post["type"];
    $this->subject = $post["subject"];
    //$this->type = "buttonPress";
    //$this->subject = "poolModeButton";
  }
}

/**
 * Event Reponse
 */
class EventResponse {

  public $type;
  public $subject;
  public $response;

  function __construct($event,$response) {
    $this->type = $event->type;
    $this->subject = $event->subject;
    $this->response = $response;
  }
}

$objEvent = new Event($_POST);

if ($objEvent->type == "buttonPress") {

  $poolState = json_decode(file_get_contents("poolState.json"),false);

  if ($objEvent->subject == "poolModeButton") {
    if ($poolState->poolMode == "off") {
      $poolState->poolMode = "on";
    }
    else {
      $poolState->poolMode = "off";
    }
    file_put_contents("poolState.json",json_encode($poolState));
    echo json_encode(new EventResponse($objEvent,$poolState->poolMode));
  }
  else {
    echo json_encode(new EventResponse($objEvent,"invalid"));
  }
}
else {
  echo json_encode(new EventResponse($objEvent,"invalid"));
}

?>
