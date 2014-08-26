<?php
class Entries_model extends CI_Model {

	var $title = '';
	var $content = '';
	var $date = '';

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function get($id)
	{
		$query = $this->db->get_where('entries', array('id' => $id));
		return $query->row_array();
	}

	function get_last($quantity=10)
	{
		$this->db->order_by('date','desc');
		$query = $this->db->get('entries', $quantity);
		return $query->result_array();
	}

	function insert()
	{
		$this->title = $this->input->post('title');
		$this->content = $this->input->post('content');
		$this->date = date('Y-m-d H:i:s');

		$this->db->insert('entries', $this);
	}

	function update()
	{
		$this->title = $this->input->post('title');
		$this->content = $this->input->post('content');
		$this->date = date('Y-m-d H:i:s');

		$this->db->update('entries', $this, array('id' => $this->input->post('id')));
	}

	function delete()
	{
		$this->db->delete('entries', array('id' => $this->input->post('id')));
	}

}


/* End of file entries_model.php */
/* Location: ./application/models/blog/entries_model.php */