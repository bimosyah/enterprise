<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAbsen extends CI_Model {

	function getAll()
	{
		return $this->db->get('absen')->result();
	}
}

/* End of file mAbsen.php */
/* Location: ./application/models/mAbsen.php */