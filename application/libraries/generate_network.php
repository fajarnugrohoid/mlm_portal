<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Generate_network
{
	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('user_model'); 

		@$kbase="8aHe3nUv9Wo4";
	}
	
	function print_list($array, $parent=0) {
		$res_network = '';
		if (count($array->result()) > 0) { 
			$res_network.='<ul>'; 
		}

		foreach ($array->result() as $row) {
			if ($row->upline_id == $parent) {
				$res_network.='<li>' . $row->name;
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
	
}
