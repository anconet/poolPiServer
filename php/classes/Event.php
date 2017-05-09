<?php
// Event class
class Event {

	public function __construct($post)
	{
		$obj = json_decode(file_get_contents("php://input"));
		//var_dump($obj);
		if (property_exists($obj,"type")) {
			switch ($obj->type){

				case "initializeRequest":
					$this->type = "initializeRequest";
					break;
				case "buttonPress":
					$this->type = "buttonPress";

					if (property_exists($obj,"subject")) {
						switch ($obj->subject) {
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
