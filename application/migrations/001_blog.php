<?php
class Migration_Blog extends CI_Migration {

	public function up()
	{		
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'null' => FALSE,
				'auto_increment' => TRUE,
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => FALSE,
			),
			'content' => array(
				'type' => 'TEXT',
				'null' => FALSE,
			),
			'date' => array(
				'type' => 'DATETIME',
				'null' => FALSE,
			),
		));

		$this->dbforge->add_key('id', TRUE);

		$this->dbforge->create_table('entries', TRUE);
	}

	public function down()
	{	
		$this->dbforge->drop_table('entries');
	}

}


/* End of file 001_blog.php */
/* Location: ./application/migrations/001_blog.php */