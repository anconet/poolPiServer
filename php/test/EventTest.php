<?php
include '../classes/Event.php';

//use PHPUnit\Framework\TestCase;

class EventTest extends PHPUnit_Framework_TestCase {

	public function testNoType () {
		$obj = new Event(array("blah"=>"ReallyBlah"));
		$this->assertEquals($obj->type,"invalid");
	}	

	public function testInvalidType () {
		$obj = new Event(array("type"=>"blah"));
		$this->assertEquals($obj->type,"invalid");
	}	

	public function testInitializeRequest () {
		$obj = new Event(array("type"=>"initializeRequest"));
		$this->assertEquals("initializeRequest",$obj->type); 
	}

	public function testButtonPressNoSubject () {
		$obj = new Event(array("type"=>"buttonPress","blah"=>"blah"));
		$this->assertEquals("buttonPress",$obj->type); 
		$this->assertEquals("invalid",$obj->subject); 
	}

	public function testButtonPressInvalidSubject () {
		$obj = new Event(array("type"=>"buttonPress","subject"=>"blah"));
		$this->assertEquals("buttonPress",$obj->type); 
		$this->assertEquals("invalid",$obj->subject); 
	}

	public function testButtonPressPoolMode () {
		$obj = new Event(array("type"=>"buttonPress","subject"=>"poolModeButton"));
		$this->assertEquals("buttonPress",$obj->type); 
		$this->assertEquals("poolModeButton",$obj->subject); 
	}



}





?>
