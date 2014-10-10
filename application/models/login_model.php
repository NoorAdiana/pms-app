<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function login($login)
    {
        $this->db->initialize();
        $this->db->trans_begin();

        $result = $this->db->query('CALL getLoginUser(\'' . $login['username'] . '\', \''.$login['password'].'\')');

        if ($this->db->trans_status() === FALSE) {
            $this->db->rollback();
            $this->db->close();
            return FALSE;
        } else {
            $this->db->trans_commit();
            $this->db->close();
            if($result->num_rows() <= 1){
                return $user = $result->result_array();
            }else {
                return FALSE;
            }
        }
    }

    function login_log($login_log){
        $this->db->initialize();
        $this->db->trans_begin();

        $this->db->insert('userLogLogin', $login_log);

        if ($this->db->trans_status() === FALSE) {
            $this->db->rollback();
            $this->db->close();
        } else {
            $this->db->trans_commit();
            $this->db->close();
        }
    }
}

/* End of file home_view.php */
/* Location: ./application/models/home_view.php */
