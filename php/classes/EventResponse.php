<?php
// Event Response class
class EventResponse
{
    public $type;
    public $subject;
    public $response;

    public function __construct($event, $response)
    {
        switch ($event->type) {

        case "invalid":
          $this->type = $event->type;
          $this->response = $response;
          break;

        case "initializeRequest":
          $this->type = $event->type;
          $this->type = $response;
          break;

        case "buttonPress":
          $this->type = $event->type;
          $this->subject = $event->subject;
          $this->response = $response;
          break;

        default:
          $this->type = "invalid";
          $this->subject = "invalid";
          break;
      }
    }
}
