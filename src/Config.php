<?php 
namespace Madeny\lhttps;

use Madeny\lhttps\Openssl;
use Madeny\lhttps\Path;

class Config{


	public function createFolders($path)
	{
		$folders = ["cnf", 'keys', 'csr' , 'live', 'logs', 'config'];
	
			foreach ($folders as $folder) {
				if (!is_dir($path."/".$folder)) {
				mkdir($path."/".$folder);
			}else{
				echo "\n --------- \n";
				return;
			}		
		}
	}

	public static function file($path, $domainOne, $domainTwo)
	{
		return new Openssl($path, $domainOne, $domainTwo);
	}
}
