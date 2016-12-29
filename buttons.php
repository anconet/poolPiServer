<?php
// I note to self. JQuery uses application/x-www-form-urlencoded for passing data to the server.
// So JQuery is essentially passing a hash to the server. If you really wanted to receive JSON
// then you have to set JQuery to use application/json. I think it would be $.ajaxsetup(contenType:"application/json")

//Just a comment
echo " button.php: Received: $_POST[eventType], $_POST[eventData]";
//echo " button.php: Received: ";

?>
