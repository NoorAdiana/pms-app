<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get_menu_user($user)
    {
        $this->db->initialize();
        $this->db->trans_begin();

        $get_menu_user = $this->db->query('CALL getMenuUser(\'' . $user . '\')');

        if ($this->db->trans_status() === FALSE) {
            $this->db->rollback();
            $this->db->close();
            return FALSE;
        } else {
            $this->db->trans_commit();
            $this->db->close();
            return $menu_user = $get_menu_user->result_array();
        }
    }

    function get_parent_menu($user)
    {

        $this->db->initialize();
        $this->db->trans_begin();

        $get_parent_menu = $this->db->query('CALL getParentMenuUser(\'' . $user . '\')');

        if ($this->db->trans_status() === FALSE) {
            $this->db->rollback();
            $this->db->close();
            return FALSE;
        } else {
            $this->db->trans_commit();
            $this->db->close();
            return $parent_menu = $get_parent_menu->result_array();
        }
    }

    function get_child_menu($user)
    {

        $this->db->initialize();
        $this->db->trans_begin();

        $get_child_menu = $this->db->query('CALL getChildMenuUser(\'' . $user . '\')');

        if ($this->db->trans_status() === FALSE) {
            $this->db->rollback();
            return FALSE;
            $this->db->close();
        } else {
            $this->db->trans_commit();
            $this->db->close();
            return $child_menu = $get_child_menu->result_array();
        }
    }

}

/* End of file home_view.php */
/* Location: ./application/models/home_view.php */
