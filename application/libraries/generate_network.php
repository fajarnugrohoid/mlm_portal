<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Generate_network
{
	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('user_model'); 
		$this->CI->load->model('referral_model'); 

		@$kbase="8aHe3nUv9Wo4";
	}
	
	function print_list($array, $parent=0) {
		$res_network = '';
		if (count($array->result()) > 0) { 
			$res_network.='<ul>'; 
		}

		foreach ($array->result() as $row) {
			if ($row->upline_id == $parent) {
				$res_network.='<li><a href="' . site_url() . $row->member_id .  '">' . $row->name;
				$array2=$this->CI->user_model->get_data_by_id_upline($row->member_id);
	            $res_network.=$this->print_list($array2, $row->member_id);  # recurse
	            $res_network.= '</li>';
	        }   
	    }

	    if (count($array->result()) > 0) { 
	    	$res_network.= '</ul>'; 
	    }
	    return $res_network;
	}

	public function gen_sys_referral($userid){
		$res=$this->CI->referral_model->get_sys_referral($userid);
		$downline_selec = $res->row()->downline_selection;
		$arr_downline=explode(";",$downline_selec);
		$i=0;
		for($i=0;$i<count($arr_downline);$i++){
			if ($arr_downline[$i]!=''){
				//echo 'test:'. $arr_downline[$i];
				$users[] = $arr_downline[$i];
			}
		}
		$id = $users[array_rand($users)];
		//echo 'id:' . $id;
		$arr_users_select=$this->CI->user_model->get_data_member_id($id);

		$user_select=$arr_users_select->row()->member_id;
		return $user_select;
	}
	
}
