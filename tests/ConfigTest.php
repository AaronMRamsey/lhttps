<?php 
use Madeny\lhttps\Test\CustomTestCase;
use Madeny\lhttps\Config;

class ConfigTest extends CustomTestCase{
	   /** @test */
	public function it_can_provide_necessery_folders()
	    {
	    	$files = Config::createFolders($this->path);

	    	$this->assertTrue(file_exists($this->path."/cnf"));
	    	
		}

	

}