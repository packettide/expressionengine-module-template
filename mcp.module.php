<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Module_mcp
{
	private $data = array();

	public function __construct()
	{
		$this->EE =& get_instance();
	}

	public function index()
	{
		// Set page title
		$this->EE->cp->set_variable('cp_page_title', $this->EE->lang->line('module_module_name'));
		return $this->EE->load->view('index', $this->data, TRUE);
	}
}

/* End of File: mcp.module.php */
