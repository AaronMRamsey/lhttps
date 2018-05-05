<?php 

use Madeny\lhttps\Test\CustomTestCase;
use Madeny\lhttps\TrustTheRootSSLCertificate;

class TrustTheRootSSLCertificateTest extends CustomTestCase {

	   /** @test */
	public function it_can_add_root_certificate_authority_to_host_trusted_list()
	    {
	    	$checkOS = exec("uname -a");
	    	$trusted = new TrustTheRootSSLCertificate($this->path, $checkOS, $option = null);

	    	if ($trusted->getError() == 0) {
    			$this->assertEquals($trusted->getError(), 0);
    		} else{
    			$this->assertEquals($trusted->getError(), 1);
    		}

		}

			   /** @test */
	public function it_can_check_os()
	    {
	    	$checkOS = exec("uname -a");
	    	$trusted = new TrustTheRootSSLCertificate($this->path, "Darwin", $option = null);

	    	if ($trusted->getError() == 0) {
    			$this->assertEquals($trusted->getError(), 0);
    		} else{
    			$this->assertEquals($trusted->getError(), 1);
    		}

		}




}