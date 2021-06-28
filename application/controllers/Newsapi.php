<?php
defined ('BASEPATH') OR exit ('no direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Newsapi extends RestController
{
	function__construct()
	{
		parent::__contruct();
		$this->load->database();
	}
	
	public funstion index_get($id=0)
	{
		if(!empty($id))
		{
			$data = $this->db->get_where('heroku_9a33627d4fcc7f9.newtable', ['id' => $id])->row_array();
		}
		else 
		{
			$data = $this->db->get('heroku_9a33627d4fcc7f9.newtable')->result();
		}$this->response($data, 200);
	}
	public function index_post()
	{
		$input = $this->input->post();
		$this->db->insert('news',$input);
		$this-response(['News successfully created'], 200);
	}
	public function index_put($id)
	{
		$input = $this->put();
		$this->db->update('news', $input, array ('id'=>$id));
		$this->response(['News sueccessfully updated'], 200);
	}
	public function index_delete($id)
	{
		$this-db-delete('news', array(('id'=>$id)));
		$this->response(['Item successfully deleted'], REST_Controller::HTTP_OK);
	}
}