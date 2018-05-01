<?php 

use Madeny\lhttps\Test\CustomTestCase;
use Madeny\lhttps\TrustTheRootSSLCertificate;

class TrustTheRootSSLCertificateTest extends CustomTestCase {

	   /** @test */
	public function it_can_add_root_certificate_authority_to_host_trusted_list()
	    {
	    	$os = "Darwin";
	    	// $os = $os = exec("uname -a");
	    	$trusted = new TrustTheRootSSLCertificate($this->path, $os, $option = null);

	    	$this->assertEquals(1, $trusted->getError());
		}
}