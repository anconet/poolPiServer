<?php
// Event class
class Event {

	public function __construct($post)
	{
		if (array_key_exists("type",$post)) {
			switch ($post["type"]){

			case "initializeRequest":
				$this->type = "initializeRequest";
				break;
			case "buttonPress":
				$this->type = "buttonPress";

				if (array_key_exists("subject",$post)) {
					switch ($post["subject"]) {
					case "poolModeButton":
						$this->subject = "poolModeButton";
						break;
					default:
						$this->subject = "invalid";
						break;
					}
				} else {
					$this->subject = "invalid";
				}
				break;
			default:
				$this->type = "invalid";
				break;
			}
		} else {
			$this->type = "invalid";
		}
	}
}
