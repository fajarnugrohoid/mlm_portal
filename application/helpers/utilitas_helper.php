<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('FormatDateToMysql')){
	function FormatDateToMysql($str){
		// if(strlen($str)==10 && substr($str,4,1)=='/' && substr($str,7,1)=='/'){
			$tm = explode('/', $str);
			return $tm[2].'-'.$tm[1].'-'.$tm[0];
		// }else{
			// return '0000-00-00';
		// }
	}
}

if(!function_exists('FormatDateFromMysql')){
	function FormatDateFromMysql($str){
		if(strlen($str)>=10 && substr($str,4,1)=='-' && substr($str,7,1)=='-'){
			$y = substr($str, 0, 4);
			$m = substr($str, 5, 2);
			$d = substr($str, 8, 2);
			//$tm = explode('-', $str);
			//return $tm[2].'/'.$tm[1].'/'.$tm[0];
			return $d.'/'.$m.'/'.$y;
		}
	}
}

if(!function_exists('formatTanggal')){
	function formatTanggal($date=null)
	{
		//buat array nama hari dalam bahasa Indonesia dengan urutan 1-7
		$array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat', 'Sabtu','Minggu');
		//buat array nama bulan dalam bahasa Indonesia dengan urutan 1-12
		$array_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus',
		'September','Oktober', 'November','Desember');
		if($date == null) {
		//jika $date kosong, makan tanggal yang diformat adalah tanggal hari ini
		$hari = $array_hari[date('N')];
		$tanggal = date ('j');
		$bulan = $array_bulan[date('n')];
		$tahun = date('Y');
		} else {
		//jika $date diisi, makan tanggal yang diformat adalah tanggal tersebut
		$date = strtotime($date);
		$hari = $array_hari[date('N',$date)];
		$tanggal = date ('j', $date);
		$bulan = $array_bulan[date('n',$date)];
		$tahun = date('Y',$date);
		}
		$formatTanggal = "<b>" . $hari . "</b>, " . $tanggal ." ". $bulan ." ". $tahun;
		return $formatTanggal;
	}
}

if(!function_exists('escape2char')){
	function escape2char($str){
		$arrstr=explode('.',$str);
		$strawal=$arrstr[0];
		return $strawal;
	}
}
# get
// if ( ! function_exists('get_level'))
// {
	// function get_level()
	// {
		// $CI =& get_instance();
		// $CI->load->model('authentikasi');
		// return $CI->authentikasi->get_level();
	// }
// }

# Cek login
// if ( ! function_exists('is_login'))
// {
	// function is_login()
	// {
		// return get_instance()->session->userdata('login')?TRUE:FALSE;
	// }
// }

