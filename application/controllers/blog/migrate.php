<?php
class Migrate extends CI_Controller {

	public function index()
	{
		$this->load->library('migration');
		if (!$this->migration->current())
		{
			show_error($this->migration->error_string());
		}
		else
		{
			echo('Current migration was done');
		}
	}

	public function version($version)
	{
		$this->load->library('migration');
		if (!$this->migration->version($version))
		{
			show_error($this->migration->error_string());
		}
		else
		{
			echo('Migration to the version '.$version.' was done');
		}

	}

}


/* End of file migrate.php */
/* Location: ./application/controllers/blog/migrate.php */