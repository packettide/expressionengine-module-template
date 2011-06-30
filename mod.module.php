<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Module
{
	public $return_data = NULL;
	
	public function __construct()
	{
		$this->EE =& get_instance();
	}
}

/* End of File: mod.module.php */