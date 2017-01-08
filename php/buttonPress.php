
<?php
// Note to self. JQuery uses application/x-www-form-urlencoded for passing data
// to the server. So JQuery is essentially passing a hash to the server. If you
// really wanted to receive JSON then you have to set JQuery to use
// application/json. I think it would be
// $.ajaxsetup(contenType:"application/json")

include 'classes/Event.php';
include 'classes/EventResponse.php';

$objEvent = new Event($_POST);
//$objEvent = new Event(array("type"=>"buttonPress","subject"=>"poolModeButton"));

if ($objEvent->type == "invalid") {
    echo json_encode(new EventResponse($objEvent, "invalid"));
} elseif ($objEvent->type == "buttonPress") {
    $poolState = json_decode(file_get_contents("poolState.json"), false);

    if ($objEvent->subject == "poolModeButton") {
        if ($poolState->poolMode == "off") {
            $poolState->poolMode = "on";
        } else {
            $poolState->poolMode = "off";
        }

        file_put_contents("poolState.json", json_encode($poolState));
        echo json_encode(new EventResponse($objEvent, $poolState->poolMode));
    }
}

?>
