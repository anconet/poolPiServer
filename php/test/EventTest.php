<?php
include '../classes/Event.php';

//use PHPUnit\Framework\TestCase;

class EventTest extends PHPUnit_Framework_TestCase {

	//Add test for a null object.

	public function testPoorlyFormedJSON () {
		$obj = new Event("{blah:\"ReallyBlah\"}");
		$this->assertEquals($obj->type,"invalid");
	}	

	public function testNoType () {
		$obj = new Event("{\"blah\":\"ReallyBlah\"}");
		$this->assertEquals($obj->type,"invalid");
	}	

	public function testInvalidType () {
		$obj = new Event("{\"type\":\"blah\"}");
		$this->assertEquals($obj->type,"invalid");
	}	

	public function testInitializeRequest () {
		$obj = new Event("{\"type\":\"initializeRequest\"}");
		$this->assertEquals("initializeRequest",$obj->type); 
	}

	public function testButtonPressNoSubject () {
		$obj = new Event("{\"type\":\"buttonPress\",\"blah\":\"blah\"}");
		$this->assertEquals("buttonPress",$obj->type); 
		$this->assertEquals("invalid",$obj->subject); 
	}

	public function testButtonPressInvalidSubject () {
		$obj = new Event("{\"type\":\"buttonPress\",\"subject\":\"blah\"}");
		$this->assertEquals("buttonPress",$obj->type); 
		$this->assertEquals("invalid",$obj->subject); 
	}

	public function testButtonPressPoolMode () {
		$obj = new Event("{\"type\":\"buttonPress\",\"subject\":\"poolModeButton\"}");
		$this->assertEquals("buttonPress",$obj->type); 
		$this->assertEquals("poolModeButton",$obj->subject); 
	}



}





?>
