<?php
if (! Defined ('BASEPATH')) 
	
exit ('No direct script access allowed');

Class contact extends CI_Controller {
	public function index(){
		$this->load->view('contact_view');
	}
}

?>