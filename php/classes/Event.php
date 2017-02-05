<?php
// Event class
class Event {

	public function __construct($post)
	{
		switch ($post["type"]){

		case "initializeRequest":
			$this->type = "initializeRequest";
			break;
		case "buttonPress":
			$this->type = "buttonPress";

			switch ($post["subject"]) {
			case "poolModeButton":
				$this->subject = "poolModeButton";
				break;
			default:
				$this->subject = "invalid";
			}	break;
		default:
			$this->type = "invalid";
			break;
		}
	}
}
