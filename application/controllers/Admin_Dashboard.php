<?php
defined('BASEPATH') or exit('no direct access allowed');

class Admin_Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (sessionId('admin_id') == "") {
            redirect(base_url('admin'));
        }
        date_default_timezone_set("Asia/Kolkata");
    }

    public function index()
    {
        $data['title'] = "Home";
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['contactdetails'] = $this->CommonModal->getRowById('contactdetails', 'cid', '1');

        $this->load->view('admin/dashboard', $data);
    }


    public function editcontactdetils()
    {
        $table = "contactdetails";
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $datav = $this->input->post();
        $update = $this->CommonModal->updateRowByMoreId($table, array('cid' => '1'), $datav);
        if ($update) {

            $this->session->set_flashdata('msg', 'contract Add successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'Soemthing went wrong Please try again!!');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }

        redirect(base_url() . 'admin_Dashboard');
    }



    public function user_add()
    {

        $data['title'] = 'User';
        if (count($_POST) > 0) {
            print_r($_POST);

            $post = $this->input->post();
            $post['img'] = imageUpload('img', 'uploads/user/');

            $insert = $this->Dashboard_model->insertdata('tbl_user', $post);

            if ($insert) {
                $this->session->set_flashdata('msg', 'User  Add successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Something went wrong Please try again!!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }
            redirect(base_url() . 'admin_Dashboard/user_registration');
        } else {
            $this->load->view('admin/user_add', $data);
        }
    }


    public function user_edit($id = true)
    {
        $data['title'] = 'User';
        $id = decryptId($id);
        $data['user'] = $this->CommonModal->getRowById('tbl_user', 'uid ', $id);

        if (count($_POST) > 0) {
            print_r($_POST);

            $post = $this->input->post();
            $img = $post['img'];
            if ($_FILES['img_temp']['name'] != '') {
                $img = imageUpload('img_temp', 'uploads/user/');
                $post['img'] = $img;
                if ($img != "") {
                    unlink('uploads/user/' . $img);
                }
            }

            $update = $this->CommonModal->updateRowById('tbl_user', 'uid ', $id, $post);
            if ($update) {
                $this->session->set_flashdata('msg', 'User  Edit successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'User  Edit successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            }
            redirect(base_url() . 'admin_Dashboard/user_registration');
        } else {
            $this->load->view('admin/user_edit', $data);
        }
    }

    public function getcity()
    {
        $state = $this->input->post('state');
        $data['city'] = $this->CommonModal->getRowByIdInOrder('tbl_cities', array('state_id' => $state), 'name', 'asc');
        $this->load->view('admin/dropdown', $data);
    }

    public function disable()
    {
        $id = $this->uri->segment(3);
        $table = $this->uri->segment(4);
        $status = $this->uri->segment(5);

        $data['favicon'] = base_url() . 'assets/images/favicon.png';

        if ($table == 'contract') {
            $this->CommonModal->updateRowById($table, 'contract_id', $id, array('status' => $status));
            redirect(base_url('admin_Dashboard/view_contract'));
        }
        if ($table == 'sub_contract') {
            $this->CommonModal->updateRowById($table, 'sub_contract_id', $id, array('status' => $status));
            redirect(base_url('admin_Dashboard/view_subcontract'));
        }
        if ($table == 'promocode') {
            $this->CommonModal->updateRowById($table, 'pid', $id, array('status' => $status));
            redirect(base_url('admin_Dashboard/promocode'));
        }
        if ($table == 'Stamp Duty') {
            $this->CommonModal->updateRowById($table, 'product_id', $id, array('status' => $status));
            redirect(base_url('admin_Dashboard/view_Stamp Duty'));
        }
    }

    public function view_contract()
    {

        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Contract";
        $data['contract'] =  $this->CommonModal->getAllRows('contract');
        if (count($_POST) > 0) {
            $data = $this->input->post();
            if ($this->Dashboard_model->insertdata('contract', $data)) {

                $this->session->set_flashdata('msg', 'Contract Add successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Soemthing went wrong Please try again!!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }

            redirect(base_url('admin_Dashboard/view_contract'));
        } else {
            $this->load->view('admin/view_contract', $data);
        }
    }

    public function editcontract()
    {
        $table = "contract";
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        if (count($_POST) > 0) {
            $id = $this->input->post('contract_id');
            $data = $this->input->post();


            $update = $this->CommonModal->updateRowById($table, 'contract_id', $id, $data);
            if ($update) {

                $this->session->set_flashdata('msg', 'contract Update successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'contract Update successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            }

            redirect(base_url() . 'admin_Dashboard/view_contract');
        } else {
            redirect(base_url() . 'admin_Dashboard/edit_contract');
        }
    }

    public function deletecontract($id)
    {
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $table = "contract";

        $data = $this->CommonModal->getRowById('contract', 'contract_id', $id);


        if ($this->CommonModal->deleteRowById($table, array('contract_id' => $id))) {
            $this->session->set_flashdata('msg', 'Contract Delete successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'Contract not Delete Please try again!!');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }


        redirect('admin_Dashboard/view_contract');
    }

    public function view_subcontract()
    {

        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Sub contract";
        $data['sub_contract'] = $this->CommonModal->getAllRows('sub_contract');
        $data['contract'] = $this->CommonModal->getAllRows('contract');
        if (count($_POST) > 0) {
            $data = $this->input->post();
            if ($this->Dashboard_model->insertdata('sub_contract', $data)) {

                $this->session->set_flashdata('msg', 'Subcontract Add successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Soemthing went wrong Please try again!!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }
            redirect(base_url('admin_Dashboard/view_subcontract'));
        } else {
            $this->load->view('admin/view_subcontract', $data);
        }
    }

    public function editsubcontract()
    {
        $table = "sub_contract";
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        if (count($_POST) > 0) {
            $id = $this->input->post('sub_contract_id');
            $data = $this->input->post();
            $update = $this->CommonModal->updateRowById($table, 'sub_contract_id', $id, $data);
            if ($update) {

                $this->session->set_flashdata('msg', 'Sub Contract Update successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Sub Contract Update successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            }
            redirect(base_url() . 'admin_Dashboard/view_subcontract');
        } else {
            redirect(base_url() . 'admin_Dashboard/view_subcontract');
        }
    }


    public function deletesubcontract($id)
    {
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $table = "sub_contract";
        $data = $this->CommonModal->getRowById('sub_contract', 'sub_contract_id', $id);


        if (file_exists("./uploads/subcontract/' . $data[0]['image']")) {

            unlink('./uploads/subcontract/' . $data[0]['image']);
        }

        if ($this->CommonModal->deleteRowById($table, array('sub_contract_id' => $id))) {
            $this->session->set_flashdata('msg', 'Subcontract Delete successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'contract not Delete Please try again!!');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }
        redirect('admin_Dashboard/view_subcontract');
    }

    public function view_Stamp_Duty()
    {
        $data['favicon'] = base_url() . 'assets/images/favicon.png';

        $data['title'] = "Stamp Duty";
        $data['stamp_duty'] = $this->CommonModal->getAllRows('tbl_stamp_duty');

        $this->load->view('admin/view_stamp_duty', $data);
    }

    public function get_subcontract()
    {
        $contact = $_POST['contact'];
        $data = $this->CommonModal->getRowById('sub_contract', 'cat_id', $contact);
        echo '<option>Select Sub contract</option>';
        foreach ($data as $da) {
            echo '<option value="' . $da['sub_contract_id'] . '">' . $da['subcat_name'] . '</option>';
        }
    }
    public function add_stamp_duty()
    {
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Add Stamp Duty";
        $data['contract'] =  $this->CommonModal->getAllRows('contract');

        $data['state_list'] =  $this->CommonModal->getAllRows('tbl_state');

        if (count($_POST) > 0) {

            $post = $this->input->post();

            $stampdutyId = $this->CommonModal->insertRowReturnId('tbl_stamp_duty', $post);
            if ($stampdutyId) {
                $this->session->set_flashdata('msg', ' Stamp Duty Add Successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Something went wrong Please try again!!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }

            redirect(base_url() . 'admin_Dashboard/view_stamp_duty');
        } else {

            $this->load->view('admin/add_stamp_duty', $data);
        }
    }



    public function blog()
    {
        $table = "tbl_blog";
        $id = 'id';
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Blog";
        $data['blog'] = $this->Dashboard_model->fetchalldesc($table, $id);
        $this->load->view('admin/blog', $data);
    }


    public function blog_add()
    {

        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Blog Add";


        if (count($_POST) > 0) {

            $post = $this->input->post();
            $title = $this->input->post('title');
            $post['url_title'] = url_title($title);
            $post['image'] = imageUpload('image', 'uploads/blog/');

            $savedata = $this->CommonModal->insertRowReturnId('tbl_blog', $post);


            if ($savedata) {
                $this->session->set_userdata('msg', 'Blog Added Succesfully.');
            } else {
                $this->session->set_userdata('msg', 'We are facing technical error, please try again later  ');
            }
            redirect(base_url('admin_Dashboard/blog'));
        } else {
            $this->load->view('admin/blog_add', $data);
        }
    }


    public function deleteblog($id)
    {
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $table = "tbl_blog";

        $data = $this->CommonModal->getRowById('tbl_blog', 'id', $id);
        if (file_exists("uploads/blog/" . $data[0]['image'])) {
            unlink('uploads/blog/' . $data[0]['image']);
        }

        if ($this->CommonModal->deleteRowById($table, array('id' => $id))) {
            $this->session->set_flashdata('msg', 'Blog Delete successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'blog not Delete Please try again!!');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }


        redirect('admin_Dashboard/blog');
    }


    public function editblog()
    {
        $id = $this->uri->segment(3);
        // echo $id;
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Edit blog";
        $data['blog'] = $this->CommonModal->getRowById('tbl_blog', 'id', $id);
        if (count($_POST) > 0) {
            $post = $this->input->post();


            $title = $this->input->post('title');
            $post['url_title'] = url_title($title);

            $temp_image = $post['image'];
            if ($_FILES['img']['name'] != '') {
                $img = imageUpload('img', 'uploads/blog/');
                $post['image'] = $img;
                if ($temp_image != "") {
                    unlink('uploads/blog/' . $temp_image);
                }
            }

            $update = $this->CommonModal->updateRowById('tbl_blog', 'id', $id, $post);
            if ($update) {
                $this->session->set_flashdata('msg', 'blog Update successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            }
            redirect(base_url('admin_Dashboard/blog'));
        } else {
            $this->load->view('admin/edit_blog', $data);
        }
    }




    public function importdata()
    {
        $file = $_FILES['pname']['tmp_name'];
        // print_r($file);
        echo '<pre>';
        $handle = fopen($file, "r");
        $c = 0; //
        $msg = 'Saved List - <br>';

        while (($filesop = fgetcsv($handle, 1000, ",")) !== false) {

            $post = array();
            print_r($filesop);
            // echo '<br>';
            $post['state_id'] = $filesop[0];
            $post['con_id'] = $filesop[1];
            $post['subcon_id'] = $filesop[2];
            $post['amount'] = $filesop[3];
            $post['article_number'] = $filesop[4];
            $post['fees'] = $filesop[5];

            // print_r($post);
            if ($c <> 0) {
                // print_r($post);
                if ($post['state_id'] != '') {
                    $this->CommonModal->insertRowReturnId('tbl_stamp_duty', $post);
                    $msg .= '<br>' . 'File Uploaded';
                }
            }
            $c = $c + 1;
        }
        //  exit();
        userData('msg', $msg);
        redirect('admin_Dashboard/view_stamp_duty');
    }



    public function stamp_duty_edit($id = true)
    {

        $id = decryptId($id);


        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Edit Stamp Duty";
        $data['stampduty'] = $this->CommonModal->getRowById('tbl_stamp_duty', 'stamp_id', $id);
        $data['contract'] =  $this->CommonModal->getAllRows('contract');


        $data['state_list'] =  $this->CommonModal->getAllRows('tbl_state');
        $data['subcon'] = $this->CommonModal->getRowById('sub_contract', 'sub_contract_id', $data['stampduty'][0]['subcon_id']);

        if (count($_POST) > 0) {

            $data = $this->input->post();
            $update = $this->CommonModal->updateRowById('tbl_stamp_duty', 'stamp_id', $id, $data);
            if ($update) {

                $this->session->set_flashdata('msg', 'Sub Contract Update successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Sub Contract Update successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            }
            redirect(base_url() . 'admin_Dashboard/view_Stamp_Duty');
        } else {

            $this->load->view('admin/stamp_duty_edit', $data);
        }
    }
    public function quiz()
    {
        $table = "tbl_quiz";
        $id = 'qid';
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Quiz";
        $data['quiz'] = $this->Dashboard_model->fetchalldesc($table, $id);
        $this->load->view('admin/quiz', $data);
    }


    public function quiz_add()
    {

        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Quiz Add";
        if (count($_POST) > 0) {

            $post = $this->input->post();
            $savedata = $this->CommonModal->insertRowReturnId('tbl_quiz', $post);
            if ($savedata) {
                $this->session->set_userdata('msg', 'quiz Added Succesfully.');
            } else {
                $this->session->set_userdata('msg', 'We are facing technical error, please try again later  ');
            }
            redirect(base_url('admin_Dashboard/quiz'));
        } else {
            $this->load->view('admin/quiz_add', $data);
        }
    }


    public function deletequiz($id)
    {
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $table = "tbl_quiz";


        if ($this->CommonModal->deleteRowById($table, array('qid' => $id))) {
            $this->session->set_flashdata('msg', 'Quiz Delete successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'Quiz not Delete Please try again!!');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }


        redirect('admin_Dashboard/quiz');
    }


    public function editquiz($id)
    {

        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['title'] = "Edit quiz";
        $data['quiz'] = $this->CommonModal->getRowById('tbl_quiz', 'qid', $id);


        
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $update = $this->CommonModal->updateRowById('tbl_quiz', 'qid', $id, $post);
            if ($update) {
                $this->session->set_flashdata('msg', 'quiz Update successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            }
            redirect(base_url('admin_Dashboard/quiz'));
        } else {
            $this->load->view('admin/edit_quiz', $data);
        }
    }
}
