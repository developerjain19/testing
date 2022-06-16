<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

        $data['title'] = 'Welcome To Law Suite';
        $this->load->view('home', $data);
    }


    public function stamp_duty_assistant()
    {
        $data['title'] = 'Stamp Duty Assistant | Law Suite';
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $data['state_list'] = $this->CommonModal->getAllRows('tbl_state');

        $data['contract'] = $this->CommonModal->getAllRows('contract');
        $this->load->view('stamp-duty', $data);
    }

    public function getsubcontract()
    {
        $contract = $this->input->post('contract');


        $data['subcontract'] = $this->CommonModal->getRowByIdInOrder('sub_contract', array('cat_id' => $contract), 'sub_contract_id', 'asc');
        $this->load->view('dropdown', $data);
    }


    public function stampresult()
    {
        $state = $this->input->post('state');
        $contract = $this->input->post('contract');
        $sub_contract = $this->input->post('sub_contract');

        $data['stamp'] = $this->CommonModal->getRowByIdInOrder('tbl_stamp_duty', array('con_id' => $contract, 'state_id' => $state, 'subcon_id' =>  $sub_contract), 'stamp_id', 'asc');
        $this->load->view('getstampresult', $data);
    }

    public function blog()
    {
        $table = "tbl_blog";
        $id = 'id';
        $data['blog'] = $this->Dashboard_model->fetchallasc($table, $id);

        $data['title'] = 'Blogs | LawSuite';
        $this->load->view('blog', $data);
    }

    public function blogview()
    {
        $id = $this->uri->segment(2);
        $table = "tbl_blog";
        $where = array('id' => $id);
        $data['details'] = $this->CommonModal->getRowByMoreId($table, $where);

        $data['title'] =   $data['details'][0]['title'] . '| LawSuite';
        $this->load->view('blog_view', $data);
    }


    public function contact()
    {
        $data['title'] =  'Contact Us | Law Suite';
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $insert = $this->CommonModal->insertRowReturnId('contact_query', $post);
            if ($insert) {
                $this->session->set_userdata('msg', 'Your query is successfully submit. We will contact you as soon as possible.');
            } else {
                $this->session->set_userdata('msg', 'We are facing technical error ,please try again later or get in touch with Email ID provided in contact section.');
            }
        } else {
        }

        $this->load->view('contact', $data);
    }


    public function insolvency_quiz()
    {

        $data['quiz'] = $this->CommonModal->getAllByRand('tbl_quiz', '10');

        $data['title'] =   'Insolvency Quiz | LawSuite';
        $this->load->view('insolvency_quiz', $data);
    }



    public function resultdisplay()
    {
         
        $post = $this->input->post();
        $quiz = array();
        for ($i = 0; $i <= count($post['question']); $i++) {
            if($post['question'][$i] != ''){
                array_push($quiz, array('que' => $post['question'][$i], 'ans' => $post['answer' . $post['question'][$i]]));
            }
            
        }
               // $data['question'] = $post['question'];
        // $data['checks'] = array(
        //      'ques1' => $this->input->post('quizid1'),
        //      'ques2' => $this->input->post('quizid2'),
        // 	 'ques3' => $this->input->post('quizid3'),
        // 	 'ques4' => $this->input->post('quizid4'),
        //      'ques5' => $this->input->post('quizid5'),
        // 	 'ques6' => $this->input->post('quizid6'),
        // 	 'ques7' => $this->input->post('quizid7'),
        // 	 'ques8' => $this->input->post('quizid8'),
        //      'ques9' => $this->input->post('quizid9'),
        // 	 'ques10' => $this->input->post('quizid10'),
        // );

        // $this->load->model('quizmodel');
        // $data['results'] = $this->CommonModal->getAllRows('tbl_quiz');
        $data['quiz'] = $quiz;
        $this->load->view('result_display', $data);
    }
}
