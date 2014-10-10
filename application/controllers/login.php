<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $data = array(
            'error' => '',
            'success' => '',
            'username' => ''
        );
        $this->load->view('signin', $data);
    }

    function do_login()
    {

        $this->load->model('login_model');

        $data = array(
            'error' => '',
            'success' => '',
            'username' => ''
        );

        $username_input = $this->input->post('username');
        $password_input = $this->input->post('password');

        /*
            Cek apakah user mengisi form login
        */

        if($username_input === ''){
            $data['error'] = 'Username harus diisi!';
            $this->load->view('signin', $data);
        } else if($password_input === ''){
            $data['error'] = 'Password harus diisi!';
            $data['username'] = $username_input;
            $this->load->view('signin', $data);
        } else if($username_input == '' AND $password_input == ''){
            $this->load->view('signin', $data);
        }else{

            /*
                Proses pengecekan login
            */
            $login = array(
                'username' => $username_input,
                'password' => md5($password_input)
            );

            $result = $this->login_model->login($login);

            if($result === FALSE){
                $data['error'] = 'Username atau password salah!';
                $data['username'] = $username_input;
                $this->load->view('signin', $data);
            } else if($result[0]['isActive'] == 0){
                $data['error'] = 'Username sudah tidak aktif!';
                $data['username'] = $username_input;
                $this->load->view('signin', $data);
            }else {
                /*
                 *  Pembuatan session
                 */
                foreach($result as $row){
                    $this->session->set_userdata('user_id', $row['userId']);
                    $this->session->set_userdata('user_fullName', $row['userFullName']);
                    $this->session->set_userdata('user_position', $row['userPosition']);
                    $this->session->set_userdata('user_branch', $row['userBranch']);
                    $this->session->set_userdata('user_group', $row['userGroup']);
                    $this->session->set_userdata('username', $row['username']);
                    $this->session->set_userdata('is_active', $row['isActive']);
                }

                /*
                 *   Insert login log
                 */
                $login_log = array(
                    'sessionId' => $this->session->userdata('session_id'),
                    'ipAddress' => $this->session->userdata('ip_address'),
                    'userId' => $this->session->userdata('user_id'),
                    'loginDate' => date('Y-m-d H:i:s')
                );

                $this->login_model->login_log($login_log);

                /*
                 *   Redirect ke home user
                 */
                redirect('/home', 'refresh');
            }
        }
    }
}

/* End of file home_view.php */
/* Location: ./application/controllers/home_view.php */
