<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Featured
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Featured extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    is_logged_in2();
  }

  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Admin';
		$this->load->view('layout/dashboard_header', $data);
		$this->load->view('dashboard/featured');
		$this->load->view('layout/dashboard_footer');
  }

}


/* End of file Featured.php */
/* Location: ./application/controllers/Featured.php */