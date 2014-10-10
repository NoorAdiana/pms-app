<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'PMS App - SMS Finance',
            'username' => 'Noor Abdullah Adiana'
        );

        $this->load->view('admin/home_view', $data);
    }
}

/* End of file home_view.php */
/* Location: ./application/controllers/home_view.php */
