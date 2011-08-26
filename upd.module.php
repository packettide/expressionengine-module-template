<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Module_upd
{
	public $version = '1.0';

	public function __construct()
	{
		$this->EE =& get_instance();
	}

	public function install()
	{
		$this->EE->db->insert('modules', array(
			'module_name' => 'Module',
			'module_version' => $this->version,
			'has_cp_backend' => 'y',
			'has_publish_fields' => 'n'
		));

		return TRUE;
	}

	public function update( $current = '' )
	{
		if($current == $this->version) { return FALSE; }
		return TRUE;
	}

	public function uninstall()
	{
		$this->EE->db->query("DELETE FROM exp_modules WHERE module_name = 'Module'");
		return TRUE;
	}
}

/* End of File: upd.module.php */
