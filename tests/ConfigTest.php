<?php
use Madeny\lhttps\Test\CustomTestCase;
use Madeny\lhttps\Config;

class ConfigTest extends CustomTestCase {

	   /** @test */
	public function it_can_create_output_folder()
	    {
	    	$folderprofilder = new Config($this->path);

	    	$this->assertTrue(true);
		}
}