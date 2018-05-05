<?php 
namespace Madeny\lhttps;

class TrustTheRootSSLCertificate{
	protected  $error;

	protected  $output;

	// protected  $message;

	function __construct($path, $checkOS, $option)
	{
		if (strpos($checkOS, "Darwin") !== false) {
			exec("sudo security add-trusted-cert -d -r trustRoot -k /Library/Keychains/System.keychain echo read -s PASSWORD {$path}/csr/root.pem 2>>{$path}/logs/log", $output, $error);	
			$this->error = $error;

		}else{
			return $this->error = 1;
		}
		
	}

	public function getError()
	{
		return $this->error;
	}
}