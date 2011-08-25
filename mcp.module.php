<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Module_mcp
{
	private $data = array();

	public function __construct()
	{
		$this->EE =& get_instance();

		// setup navigation
		$this->EE->cp->set_right_nav(array(
			'module_nav_home' => BASE.AMP.'C=addons_modules'.AMP.'M=show_module_cp'.AMP.'module=module'.AMP.'method=index',
			'module_nav_settings' => BASE.AMP.'C=addons_modules'.AMP.'M=show_module_cp'.AMP.'module=module'.AMP.'method=settings',
		));
	}

	public function index()
	{
		// Set page title
		$this->EE->cp->set_variable('cp_page_title', $this->EE->lang->line('module_module_name'));
		return $this->EE->load->view('index', $this->data, TRUE);
	}

	public function settings()
	{
		// Set page title
		$this->EE->cp->set_variable('cp_page_title', $this->EE->lang->line('module_page_title_settings'));
		return $this->EE->load->view('settings', $this->data, TRUE);
	}
}

/* End of File: mcp.module.php */
