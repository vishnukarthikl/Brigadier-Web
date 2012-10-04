<?php
class MCrypt
{
	private $iv = 'fedcba9876543210'; 
	private $key = '14f0f2873e593b8482d998f5f7bce4a9'; 
	private $finalkey='';

	
	
	function MCrypt($hash)
	{
		//echo $this->key;
		$this->finalkey=$this->hex2bin($hash);
		$temp=$this->hex2bin($this->key);
		$this->finalkey=$this->finalkey^$temp;
		 
	}

	
	function encrypt($str) {

		//$key = $this->hex2bin($key);
		$iv = $this->iv;

		$td = mcrypt_module_open('rijndael-128', '', 'cbc', $iv);

		mcrypt_generic_init($td, $this->finalkey, $iv);
		$encrypted = mcrypt_generic($td, $str);

		mcrypt_generic_deinit($td);
		mcrypt_module_close($td);

		return bin2hex($encrypted);
	}

	function decrypt($code) {
		//$key = $this->hex2bin($key);
		//$this->finalkey=bin2hex($this->finalkey);
		$code = $this->hex2bin($code);
		$iv = $this->iv;

		$td = mcrypt_module_open('rijndael-128', '', 'cbc', $iv);

		mcrypt_generic_init($td, $this->finalkey, $iv);
		$decrypted = mdecrypt_generic($td, $code);

		mcrypt_generic_deinit($td);
		mcrypt_module_close($td);

		return utf8_encode(trim($decrypted));
	}

	function hex2bin($hexdata) {
		$bindata = '';

		for ($i = 0; $i < strlen($hexdata); $i += 2) {
			$bindata .= chr(hexdec(substr($hexdata, $i, 2)));
		}

		return $bindata;
	}

}


?>