<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Sistem Informasi Managemen Restoran';
        $this->load->view('index',$data);
    }

}

/* End of file Home.php */

?>