<?php
// Event class
class Event
{
    public $type;
    public $subject;

    public function __construct($post)
    {
        if ($post["type"] == "initializeRequest") {
            $this->type = "initializeRequest";
        } elseif ($post["type"]=="buttonPress") {
            $this->type = "buttonPress";
            if ($post["subject"] =="poolModeButton") {
                $this->subject = "poolModeButton";
            } else {
                $this->subject = "invalid";
            }
        } else {
            $this->type = "invalid";
        }
    }
}
