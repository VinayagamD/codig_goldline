<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: vinaylogics
 * Date: 1/5/2018
 * Time: 10:55 PM
 */

class Home extends CI_Controller
{

    function index(){
        $this->load->view('home/index');
    }

    function lead_generation(){
        $data['image'] = base_url().'public/images/lead-generation.jpg';
        $data['title'] ='Lead Generation';
        $data['view'] = 'home/lead_generation';
        $this->load->view('layout/layout_services',$data);
    }

    function lead_management(){
        $data['image'] = base_url().'public/images/lead-management.jpg';
        $data['title'] ='Lead Management';
        $data['view'] = 'home/lead_management';
        $this->load->view('layout/layout_services',$data);
    }

    function hr(){
        $data['image'] = base_url().'public/images/hr.jpg';
        $data['title'] ='Human Resource';
        $data['view'] = 'home/hr';
        $this->load->view('layout/layout_services',$data);
    }

    function logistics(){
        $data['image'] = base_url().'public/images/logistics.jpg';
        $data['title'] ='Logistics';
        $data['view'] = 'home/logistics';
        $this->load->view('layout/layout_services',$data);
    }

    public function contact_us(){

            $data['title'] = 'Contact Us';
            $data['view'] = 'home/contact_us';
            $this->load->view('layout/layout_contact', $data);

    }

    public function save_enquiry(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'First Name', 'required|alpha');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        if ($this->form_validation->run()){
            $data["first_name"] =  $this->input->post("first_name");
            $data["last_name"] = $this->input->post("last_name");
            $data["email"] = $this->input->post("email");
            $data["mobile"] = $this->input->post("phone");
            $data["subject"] = $this->input->post("subject");
            $data["message"] = $this->input->post("message");

            $this->load->model("enquiry_model");
            $data = $this->enquiry_model->save_enquiry($data);
            if (isset($data)){
                $this->send_office_email($data);
            }else{
                $this->session->set_flashdata('error', 'Unable place your enquiry please try after sometime');
                redirect('contact-us','refresh' );

            }
        }else{

          $this->contact_us();
        }

    }

    public function send_customer_email($data){
        $this->setup_email_config();
        $this->email->from('contact@goldenbridge.co.in', 'Golden Bridge Business Solutions');
        $this->email->subject('Enquiry Confirmation');
        $this->email->to($data["email"]);
        $this->email->message("
        
            Thank for placing your enquiry. We will revert you back soon. 
        
  
        ");

        $this->email->set_newline("\r\n");
        $this->email->set_mailtype('html');
        if ($this->email->send()){
            $message="Email sent Successful";
        }else{
            $message="Email unsuccessful contact admin".$this->email->print_debugger();;
            echo 'message';
        }
        $this->session->set_flashdata('user_id',$data['id']);
        $this->session->set_flashdata('message', $message);
        redirect('contact-us','refresh' );

    }

    public function send_office_email($data){
        $this->setup_email_config();
        $this->email->from('contact@goldenbridge.co.in', 'Golden Bridge Business Solutions');
        $this->email->reply_to($data['email'], $data['first_name']);
        $this->email->subject( $data['subject']);
        $this->email->to('contact@goldenbridge.co.in');
        $this->email->message("From:".$data['email'].", Name: ".$data['first_name']."<br> Message :".$data["message"]);

        $this->email->set_newline("\r\n");
        $this->email->set_mailtype('html');
        if ($this->email->send()){
            $message="Email sent Successful";
            $this->send_customer_email($data);
        }else{
            $message="Email unsuccessful contact admin".$this->email->print_debugger();;
            $this->session->set_flashdata('user_id',$data['id']);
            $this->session->set_flashdata('message', $message);
            redirect('contact-us','refresh' );
        }

    }

    private function setup_email_config(){
        $config =  Array(
            'protocol'=> 'smtp',
            'smtp_host'=> 'cp-20.webhostbox.net',
            'smtp_port'=> 587,
            'smtp_user'=> 'contact@goldenbridge.co.in',
            'smtp_pass'=> 'Royal@1955@',
            'mailtype'=> 'html',
            'charset' => 'utf-8',
            'newline'  => "\r\n",
            'wordwrap' => TRUE
        );
        $this->load->library('email',$config);

    }




}