<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Sistem Informasi Managemen Restoran';
        $this->load->view('header');
        $this->load->view('coba',$data);
        $this->load->view('footer');
    }

}

/* End of file Home.php */

?>