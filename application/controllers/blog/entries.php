<?php
class Entries extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('blog/entries_model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->get_last_entries();
	}

	public function get_last_entries($quantity=6)
	{
		$this->load->helper('text');
		$header['title'] = 'Últimas entradas';
		$data['entries'] = $this->entries_model->get_last();
		$this->load->view('templates/header', $header);
		$this->load->view('blog/entries/list', $data);
		$this->load->view('templates/footer');
	}

	public function new_entry()
	{
		$header['title'] = 'Ingresar entrada';
		$this->load->view('templates/header', $header);
		$this->load->view('blog/entries/new');
		$this->load->view('templates/footer');
	}

	public function insert_entry()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$this->entries_model->insert();
			$this->session->set_flashdata('success', 'Entrada creada exitosamente');
			redirect('blog/entries');
		}
		else
		{
			$this->request_error('Bad Request Method');
		}
	}

	public function get_entry($id)
	{
		if (isset($id))
		{
			$data['entry'] = $this->entries_model->get($id);
			if (!empty($data['entry'])){
				$header['title'] = $data['entry']['title'];
				$this->load->view('templates/header', $header);
				$this->load->view('blog/entries/entry', $data);
				$this->load->view('templates/footer');
			}
			else
			{
				$this->session->set_flashdata('error', 'La entrada no existe.');
				redirect('blog/entries');
			}
		}
		else
		{
			$this->request_error('Need an ID.');
		}
	}

	public function del_entry()
	{
		$header['title'] = 'Eliminar entrada';
		$this->load->view('templates/header', $header);
		$this->load->view('blog/entries/del_entry');
		$this->load->view('templates/footer');
	}

	public function delete_entry()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$data['entry'] = $this->entries_model->get($this->input->post('id'));
			if (!empty($data['entry']))
			{
				$this->entries_model->delete();
				$this->session->set_flashdata('success', 
					'Entrada '.$data['entry']['id'].' con título: "'.$data['entry']['title'].
					'" ha sido eliminada exitosamente');
				redirect('blog/entries');
			}
			else
			{
				$this->session->set_flashdata('error', 'La entrada con ID "'.$this->input->post('id').'" no existe.');
				redirect('blog/entries/del_entry');
			}
		}
		else
		{
			$this->request_error('Bad Request Method');
		}
		
	}

	public function mod_entry()
	{
		$header['title'] = 'Modificar entrada';
		$this->load->view('templates/header', $header);
		$this->load->view('blog/entries/mod_entry');
		$this->load->view('templates/footer');
	}

	public function load_entry()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$data['entry'] = $this->entries_model->get($this->input->post('id'));
			if (!empty($data['entry']))
			{
				$header['title'] = 'Modificar '.$data['entry']['title'];
				$this->load->view('templates/header', $header);
				$this->load->view('blog/entries/load',$data);
				$this->load->view('templates/footer');
			}
			else
			{
				$this->session->set_flashdata('error', 'La entrada con ID "'.$this->input->post('id').'" no existe.');
				redirect('blog/entries/mod_entry');
			}
		}
		else
		{
			$this->request_error('Bad Request Method');
		}
	}

	public function update_entry()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$this->entries_model->update();
			$this->session->set_flashdata('success', 'Entrada editada exitosamente');
			redirect('blog/entries/');
		}
		else
		{
			$this->request_error('Bad Request Method');
		}
	}

	public function request_error($error)
	{
		$header['title'] = 'Error';
		$this->load->view('templates/header', $header);
		$data['error'] = $error;
		$this->load->view('blog/entries/error',$data);
		$this->load->view('templates/footer');
	}
}


/* End of file entries.php */
/* Location: ./application/controllers/blog/entries.php */