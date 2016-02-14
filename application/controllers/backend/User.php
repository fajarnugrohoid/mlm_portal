<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Backend {

   public function __construct()
   {
      parent::__construct();
      $this->load->model('user_model');
      if(!isset($_COOKIE['remember_me_cookie'])) 
      {
         session_destroy();
         redirect('home/login');
      }
   }
   public function index()
   {
      $this->header();
      if ($_SESSION['level']=='1')
      {
         $this->load->view('backend_view/user/index');
      }
      else 
      {
         redirect('home/login');
      }
      $this->footer();
   }
   public function list_data()
   {

      $data['data'] =$this->user_model->m_list_user();
      echo json_encode( $data );

   }
   function change_status()
   {      
      $id=$this->input->post('id');
      $data=array(
         'id' => $id,
         'is_active' => $this->input->post('is_active'),
         );

      $param=$this->user_model->m_edit_user_active($data,$id); 
      if($param == 1)
      {
         $out= array(
            'isSuccess' => 1,
            'message' => "Success Change State Active"
            );
         echo json_encode( $out );
      }
      else
      {
         $out= array(
            'isSuccess' => 0,
            'message' => "Failed Change State Active"
            );
         echo json_encode( $out );
      }
   }
   function delete_user_data($id)
   {      
      $data=array(
         'id' => $id
         );


      $param=$this->user_model->m_delete_user_data($data,$id);
      if($param == 1)
      {
         $out= array(
            'isSuccess' => 1,
            'message' => "Success Delete Data"
            );
         echo json_encode( $out );
      }
      else
      {
         $out= array(
            'isSuccess' => 0,
            'message' => "Failed Delete Data"
            );
         echo json_encode( $out );
      }
   }
   function edit_user($id)
   {
      $data_get=array(
         'id'=>$id,
         );

      $data['data_edit']=$this->user_model->m_edit_user($data_get);    
      $this->header();
      $this->load->view('backend_view/user/edit',$data);
      $this->footer();
   }
   function edit_user_data()
   {
      $id=$this->input->post('id');
      $email =$this->input->post('email');
      $original_value = $this->db->query("SELECT email FROM mst_member WHERE id = ".$id)->row()->email;
      if($email != $original_value) 
      {
         $this->form_validation->set_rules('email', 'Email','is_unique[mst_member.email]');
      } 
      else
      {
         $this->form_validation->set_rules('email', 'Email', 'required');
      }

      if ($this->form_validation->run()==TRUE)
      {  
         $config = array(
            'allowed_types' => 'jpg|jpeg|gif|png',
            'max_size' => 2000,
            'file_name' => url_title($this->input->post('userfile')),
            'upload_path' => './assets/images/news/'
            );
         $this->load->library('upload',$config);


         $data = array
         (

            'sponsor_name' => $this->input->post('sponsor_name'),
            'sponsor_email' => $this->input->post('sponsor_email'),

            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),

            'name' =>  $this->input->post('name'),
            'birthday_place' =>  $this->input->post('birthday_place'),
            'birthday' =>  $this->input->post('birthday'),
            'status' => $this->input->post('status'),
            'sex' => $this->input->post('sex'),
            'child_count' => '',
            'handphone' =>  $this->input->post('handphone'),
            'phone' =>  $this->input->post('phone'),
            'email' =>  $email,
            'nationality' =>  $this->input->post('nationality'),
            'no_ktp' =>  $this->input->post('no_ktp'),
            'no_sim' =>  $this->input->post('no_sim'),
            'job' =>  $this->input->post('job'),
            'bank' =>  $this->input->post('bank'),
            'bank_an' =>  $this->input->post('bank_an'),
            'no_rek' =>  $this->input->post('no_rek'),
            'bank_branch' =>  $this->input->post('bank_branch'),
            'bank_city' =>  $this->input->post('bank_city'),
            'plan' =>  'A',
            'level' => 1,
            'value' =>  $this->input->post('value'),
            'mothers_name' =>  $this->input->post('mothers_name'),
            'status_barang' =>  $this->input->post('status_barang'),
            'position' => '',
            'downline_count' => '',


            'ktp_address' =>  $this->input->post('ktp_address'),
            'ktp_districts' =>  $this->input->post('ktp_district'),
            'ktp_subdistricts' =>  $this->input->post('ktp_subdistrict'),
            'ktp_city' =>  $this->input->post('ktp_city'),
            'ktp_province' =>  $this->input->post('ktp_province'),
            'shipment_address' =>  $this->input->post('shipment_address'),
            'shipment_districts' =>  $this->input->post('shipment_district'),
            'shipment_subdistricts' =>  $this->input->post('shipment_subdistricts'),
            'shipment_city' =>  $this->input->post('shipment_city'),
            'shipment_province' =>  $this->input->post('shipment_province'),


            'date' =>  date('Y-m-d'),
            'time' =>  date('HH:mm:ss')
         );

         if ($_FILES['userfile']['size'] > 0)
         {  

            if($this->upload->do_upload())
            {
               $file = $this->upload->file_name;
               $data['photo']=$file;
               $this->user_model->m_edit_user_data($data,$id);
               $this->session->set_flashdata('flash_data', 'This Account Has Been Edited');
               redirect($this->agent->referrer());
            }
            else
            {
               $data['photo']="";
               $this->session->set_flashdata('flash_data', $this->upload->display_errors());
               redirect($this->agent->referrer());
            }
         }
         else
         {

            $this->user_model->m_edit_user_data($data,$id);
            $this->session->set_flashdata('flash_data', 'Data Has Been Saved Without Photo Profile');
            redirect($this->agent->referrer());
         }

      }
      else
      {
         $this->session->set_flashdata('flash_data', 'Your Email Already Exist Try With Another Email');
         redirect($this->agent->referrer());
      }
   }
}
